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

Route::get('/about', function() {
	return '<h1>Halo</h1>'
	.'Selamat Datang di Webapp Saya<br>'
	.'laravel, emang keren.';
});

Route::get('latihan',function(){
	return view('about');
});

Route::get('/about/1',function(){
	return view('about.satu');
});

Route::get('/about/2',function(){
	return view('about.dua');
});

Route::get('/about/3',function(){
	return view('about.tiga');
});

Route::get('/about/{halaman}',function($id){
	return 'Halaman About'.$id;
});

Route::get('/profil/{nama}/{sekolah}/{umur}',function($nama,$sekolah,$umur){
	return 'Nama Saya : '.$nama.'<br>'
	.'Sekolah : '.$sekolah.'<br>'
	.'Umur : '.$umur;
});

Route::get('/nama/{halaman}',function($id){
	$id= ' John';
	return 'Halaman About'.$id;
});