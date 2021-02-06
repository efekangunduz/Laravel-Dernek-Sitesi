<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {return view('home.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus',[HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/references',[HomeController::class, 'references'])->name('references');
Route::get('/faq',[HomeController::class, 'faq'])->name('faq');

//Route::get('test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');

//Admin
Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');
#Kategori
    Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::get('category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');
#Duyuru
    Route::prefix('duyuru')->group(function(){
        Route::get('/', [\App\Http\Controllers\Admin\DuyuruController::class,'index'])->name('admin_duyurus');
        Route::get('create', [\App\Http\Controllers\Admin\DuyuruController::class,'create'])->name('admin_duyuru_add');
        Route::post('store', [\App\Http\Controllers\Admin\DuyuruController::class,'store'])->name('admin_duyuru_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\DuyuruController::class,'edit'])->name('admin_duyuru_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\DuyuruController::class,'update'])->name('admin_duyuru_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\DuyuruController::class,'destroy'])->name('admin_duyuru_delete');
        Route::get('show', [\App\Http\Controllers\Admin\DuyuruController::class,'show'])->name('admin_duyuru_show');
    });

#Setting
    Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');
});

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
