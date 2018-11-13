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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => true]);

Route::get('profil-user',function(){
  return('This is Profil Page');
})->middleware('verified');

Route::resource('map','MapController');

Route::get('/','BlogController@index');
Route::get('profil-pse1','BlogController@profilWeb');
Route::get('daftar-pelayanan','BlogController@pelayanan');
Route::get('visi-misi-motto','BlogController@vmm');
Route::get('daftar-pegawai','BlogController@daftarPegawai');
Route::get('kontak','MapController@kontak');
Route::get('index-post','BlogController@indexPost');
Route::get('banner/{slug}','BannerController@theBanner');

Route::group(['middleware' => 'verified'],function(){
  Route::get('dashboard','AdminController@index');
  Route::get('kategori/{tag}','AdminController@filter');

  Route::get('/profil-user', 'HomeController@index')->name('profil-user');
  Route::get('/ubah-password', 'HomeController@ubahPass')->name('ubah-password');
  Route::post('/changePassword','HomeController@changePassword')->name('changePassword');
  Route::get('/edit-nama-user','HomeController@editNamaUser')->name('editNamaUser');
  Route::put('/update-nama-user','HomeController@updateNamaUser')->name('updateNamaUser');



  Route::post('/save-tag','TagController@saveTag');
  Route::get('/get-tag','TagController@getTag');
  Route::delete('/del-tag','TagController@delTag');


  Route::resource('posts','PostController');

  Route::group(['middleware'=> 'admin'], function(){
    Route::resource('pegawai','PegawaiController');
    Route::get('get-kontak','KontakController@getKontak');
    Route::put('save-kontak','KontakController@saveKontak');

    Route::get('banner-kosong','BannerController@getBanner');
    Route::put('save-banner-kosong','BannerController@saveKosong');
    Route::get('daftar-banner','BannerController@indexBanner');
    Route::get('add-banner','BannerController@addBanner');
    Route::get('edit-banner/{id}','BannerController@editBanner');
    Route::post('save-banner','BannerController@saveBanner');
    Route::put('update-banner/{id}','BannerController@updateBanner');
    Route::delete('delete-banner/{id}','BannerController@deleteBanner');

    Route::get('web-profil','AdminController@webProfil');
    Route::put('save-web-profil','AdminController@updateWebProfil');

    Route::get('edit-visi-misi-motto','AdminController@getVM');
    Route::put('save-visi-misi-motto','AdminController@updateVM');

    Route::get('waktu','AdminController@getWaktu');
    Route::put('update-waktu','AdminController@updateWaktu');

    Route::get('edit-layanan','AdminController@getLayanan');
    Route::put('save-web-layanan','AdminController@updateLayanan');
    Route::delete('posts-list/{id}','AdminController@hpsPost');
  });
});
