<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Duyuru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DuyuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Duyuru::all();
        return view('admin.duyuru', ['datalist'=> $datalist]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Category::with('children')->get();
        return view('admin.duyuru_add', ['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new Duyuru;
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->category_id=$request->input('category_id');
        $data->user_id= Auth::id();
        $data->detail=$request->input('detail');
        $data->slug=$request->input('slug');
        $data->save();
        return redirect()->route('admin_duyurus');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Duyuru  $duyuru
     * @return \Illuminate\Http\Response
     */
    public function show(Duyuru $duyuru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Duyuru  $duyuru
     * @return \Illuminate\Http\Response
     */
    public function edit(Duyuru $duyuru,$id)
    {
        $data= Duyuru::find($id);
        $datalist = Category::with('children')->get();
        return view('admin.duyuru_edit', ['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Duyuru  $duyuru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Duyuru $duyuru, $id)
    {
        $data = Duyuru::find($id);
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->category_id=$request->input('category_id');
        $data->user_id= Auth::id();
        $data->detail=$request->input('detail');
        $data->slug=$request->input('slug');
        $data->save();
        return redirect()->route('admin_duyurus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Duyuru  $duyuru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Duyuru $duyuru, $id)
    {
        //DB::table('duyurus')->where('id','=',$id)->delete();
        $data= Duyuru::find($id);
        $data->delete();


        return redirect()->route('admin_duyurus');
    }
}
