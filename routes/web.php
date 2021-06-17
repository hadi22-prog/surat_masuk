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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@home');
Route::get('surat_masuk/index', 'HomeController@index_suratmasuk');
Route::get('surat_masuk/create', 'HomeController@create_suratmasuk');
Route::post('surat_masuk/create', 'HomeController@save_suratmasuk');
Route::get('surat_masuk/edit/{id}', 'HomeController@edit_suratmasuk');
Route::post('surat_masuk/edit', 'HomeController@update_suratmasuk');
Route::get('surat_masuk/delete/{id}', 'HomeController@delete_suratmasuk')->name("delete_suratmasuk");
Route::get('/surat_masuk/detail/{id}', 'HomeController@detail_suratmasuk');

Route::get('surat_masuk/downloadpdf_allsuratmasuk', 'HomeController@downloadpdf_allsuratmasuk')->name('downloadpdf_allsuratmasuk');


Route::get('Admin/index', 'HomeController@index_admin');
Route::get('Admin/create', 'HomeController@create_admin');
Route::post('Admin/create', 'HomeController@save_admin');
Route::get('Admin/edit/{id}', 'HomeController@edit_admin');
Route::post('Admin/edit', 'HomeController@update_admin');
Route::get('Admin/delete/{id}', 'HomeController@delete_admin')->name("delete_admin");
Route::get('Admin/downloadpdf_alluser', 'HomeController@downloadpdf_alluser')->name('downloadpdf_alluser');


Route::get('disposisi/create/{id}', 'HomeController@create_disposisi');
Route::post('disposisi/create', 'HomeController@save_disposisi');
Route::get('disposisi/index', 'HomeController@index_disposisi');
Route::get('/disposisi/detail/{id}', 'HomeController@detail_disposisi');
Route::get('disposisi/delete/{id}', 'HomeController@delete_disposisi')->name("delete_disposisi");
Route::get('disposisi/downloadpdf_alldisposisi', 'HomeController@downloadpdf_alldisposisi')->name('downloadpdf_alldisposisi');

Route::get('surat_keluar/index', 'HomeController@index_suratkeluar');
Route::get('surat_keluar/create', 'HomeController@create_suratkeluar');
Route::post('surat_keluar/create', 'HomeController@save_suratkeluar');
Route::get('surat_keluar/edit/{id}', 'HomeController@edit_suratkeluar');
Route::post('surat_keluar/edit', 'HomeController@update_suratkeluar');
Route::get('surat_keluar/delete/{id}', 'HomeController@delete_suratkeluar')->name("delete_suratkeluar");
Route::get('/surat_keluar/detail/{id}', 'HomeController@detail_suratkeluar');
Route::get('surat_keluar/downloadpdf_allsuratkeluar', 'HomeController@downloadpdf_allsuratkeluar')->name('downloadpdf_allsuratkeluar');



/*        Route::get('mail/index/{name}', 'HomeController@olahTabelUserPost');
*/
Route::get('logout', function() {
    Auth::logout();
    return redirect(url('/'));
});