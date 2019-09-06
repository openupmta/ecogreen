<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
})->name('trang-chu');



Route::get('/gioi-thieu', function () {
    return view('pages.gioithieu');
})->name('gioi-thieu');


Route::get('/tu-van-suc-khoe',function(){
    return view('pages.tuvan-suckhoe');
})->name('tu-van-suc-khoe');

Route::get('/san-pham', function () {
    return view('pages.sanpham');
})->name('san-pham');

Route::get('/khuyen-mai', function () {
    return view('pages.khuyen-mai');
})->name('khuyen-mai');

Route::get('/tu-van', function () {
    return view('pages.tuvan-suckhoe');
})->name('tu-van');


Route::get('/chu-de-suc-khoe', function () {
    return view('pages.chude-suckhoe');
})->name('chu-de-suc-khoe');

Route::get('/dang-nhap', function () {
    return view('pages.dang-nhap');
})->name('dang-nhap');

Route::get('/dang-ky', function () {
    return view('pages.dang-ky');
})->name('dang-ky');

Route::get('/chi-tiet-san-pham', function () {
    return view('pages.chitiet-sanpham');
})->name('chi-tiet-san-pham');



