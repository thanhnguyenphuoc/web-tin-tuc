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
Route::get('trangchu','PagesController@trangchu');
Route::get('gioithieu','PagesController@gioithieu');
Route::get('lienhe', 'PagesController@lienhe');
Route::get('loaitin/{id}/{TenKhongDau}','PagesController@loaitin');
Route::get('tintuc/{id}/{TieuDeKhongDau}','PagesController@tintuc');
Route::get('dangnhap','PagesController@getdangnhap');
Route::post('dangnhap','PagesController@postdangnhap');
Route::get('dangxuat','PagesController@getDangxuat');
Route::get('nguoidung','PagesController@getNguoidung');

Route::post('nguoidung','PagesController@postNguoidung');
Route::post('comment/{idComment}','CommentController@postComment');
Route::get('dangky','PagesController@getDangKy');
Route::post('dangky','PagesController@postDangKy');

Route::post('timkiem','PagesController@timkiem');


Route::get('admin/dangnhap','UserController@getDangnhapAdmin');
Route::post('admin/dangnhap','UserController@postDangnhapAdmin');
Route::get('admin/logout','UserController@getDangXuatAdmin');

Route::group(['prefix' => 'admin','middleware'=>'adminLogin'], function () {
    
    Route::get('home','AdminController@index');

    Route::group(['prefix' => 'theloai'], function () {
        //admin/theloai/...
        Route::get('danhsach','TheLoaiController@getDanhSach');
    
        Route::get('sua/{id}','TheLoaiController@getSua');
        Route::post('sua/{id}','TheLoaiController@postSua');
       
        Route::get('them','TheLoaiController@getThem');
        Route::post('them','TheLoaiController@postThem');

        route::get('xoa/{id}','TheLoaiController@getXoa');
    });
    Route::group(['prefix' => 'loaitin'], function () {
        //admin/loaitin/...
        Route::get('danhsach','LoaiTinController@getDanhSach');

        Route::get('sua/{id}','LoaiTinController@getSua');
        Route::post('sua/{id}','LoaiTinController@postSua');

        Route::get('them','LoaiTinController@getThem');
        Route::post('them','LoaiTinController@postThem');

        route::get('xoa/{id}','LoaiTinController@getXoa');
        
    });
    Route::group(['prefix' => 'tintuc'], function () {
        //admin/tintuc/...
        Route::get('danhsach','TinTucController@getDanhSach');

        Route::get('sua/{id}','TinTucController@getSua');
        Route::post('sua/{id}','TinTucController@postSua');

        Route::get('them','TinTucController@getThem');
        Route::post('them','TinTucController@postThem');

        route::get('xoa/{id}','TinTucController@getXoa');

        route::get('loaitin/{idTheLoai}','CommentController@getLoaiTin');
        
    }); 
    Route::group(['prefix' => 'comment'], function () {
        route::get('xoa/{id}/{idTinTuc}','CommentController@getXoa');
    });
    Route::group(['prefix' => 'slide'], function () {
        //admin/tintuc/...
        Route::get('danhsach','SlideController@getDanhSach');

        Route::get('sua/{id}','SlideController@getSua');
        Route::post('sua/{id}','SlideController@postSua');

        Route::get('them','SlideController@getThem');
        Route::post('them','SlideController@postThem');

        route::get('xoa/{id}','SlideController@getXoa');
        
    }); 
    Route::group(['prefix' => 'user'], function () {
        //admin/tintuc/...
        Route::get('danhsach','UserController@getDanhSach');

        Route::get('sua/{id}','UserController@getSua');
        Route::post('sua/{id}','UserController@postSua');

        Route::get('them','UserController@getThem');
        Route::post('them','UserController@postThem');

        route::get('xoa/{id}','UserController@getXoa');
        
    }); 
});


