<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Duyuru;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }
    public static function getsetting()
    {
        return Setting::first();
    }
    public function index()
    {
        $setting = Setting::first();
        $slider= Duyuru::select('id','description','title','image','slug')->limit(4)->get();
        $randomevent= Duyuru::select('id','description','title','image','slug')->limit(4)->inRandomOrder()->get();
        $yeni= Duyuru::select('id','description','title','image','slug')->limit(4)->orderByDesc('id')->get();
        $donate = Duyuru::select('title','image')->inRandomOrder('id')->limit(4)->get();
        #print_r($randomevent);
        #exit();

        $data= [
            'setting'=>$setting,
            'randomevent'=>$randomevent,
            'yeni'=>$yeni,
            'slider'=>$slider,
            'donate'=>$donate,
            'page'=>'home'
            ];

        return view( 'home.index',$data); #tek tek slider setting göndermek yerine
    }
    public function duyuru($id,$slug)
    {
        $data = Duyuru::find($id);
        $datalist= Duyuru::select('title','image','slug','detail')->get();
        #print_r($data);
        #exit();
        return view( 'home.duyuru_detail',['data'=>$data,'datalist'=>$datalist]);
    }
    public function categoryduyurus($id,$slug)
    {
        $datalist= Duyuru::where('category_id',$id)->get();
        $data = Category::find($id);
        #print_r($data);
        #exit();
        return view( 'home.category_duyurus',['data'=>$data,'datalist'=>$datalist]);
    }
    public function aboutus()
    {
        $setting = Setting::first();
        return view( 'home.about', ['setting'=>$setting]);
    }
    public function references()
    {
        $setting = Setting::first();
        return view( 'home.references', ['setting'=>$setting]);
    }
    public function faq()
    {
        return view( 'home.faq'); #aktif değil
    }

    public function contact()
    {
        $setting = Setting::first();
        return view( 'home.contact', ['setting'=>$setting]);
    }
    public function sendmessage(Request $request)
    {
        $data= new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->save();

        return redirect()->route('contact')->with('success', 'Mesaj başarılı bir şekilde gönderildi.');
    }



    public function login()
    {
        return view( 'admin.login');
    }
    public function logincheck(Request $request)
    {

        if($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email'  => 'The provided credentials do not match our records.',
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

 }

