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

Route::get('testmodel',function(){
	$a=App\Post::all();
	return $a;
});

Route::get('testmodel1',function(){

	$a=App\Post::find(1);
	return $a;
});

Route::get('testmodel2',function(){
	$a=App\Post::find(3);
	$a->title = "Belajar Al-Quran";
	$a->save();
	return $a;
});

Route::get('testmodel3',function(){
	$a=App\Post::where('title','like','%Belajar Al-Quran%')->get();
	return $a;
});

Route::get('testmodel4',function(){
	$a=App\Post::find(1);
	$a->delete();
});

Route::get('testmodel5',function(){
	$a=new App\Post;
	$a->title="7 Amalan Pembuka Jodoh";
	$a->content="Shalat Malam,Sedekah,Puasa Sunah,Silaturahmi,Senyum,dan Tobat";
	$a->save();
	return $a;
});

Route::get('cektampilan',function(){
	return view('layouts.master');
});

// Route::get('/orangtua',function(){
// $ortu=App\ortu::all();
// foreach ($ortu as $key ) {
// 	echo $key->nama_ayah;
// 	echo " ";
// 	echo $key->umur_ayah; 
// 	echo " dengan ";
// 	echo $key->nama_ibu;
// 	echo " ";
// 	echo $key->umur_ibu; 
// 	echo " mempunyai anak ";
// 	foreach ($key->siswa as $data ) {
// 		echo "<li>".$data->nama;
// 		echo " ";
// 		echo $data->umur;
// 		echo "</li>";
// 		echo "<hr>";
// 	}
// }
// });

Route::get('index','MyController@index');

Route::get('tampil','MyController@tampilmodel');

Route::get('tampil2','MyController@tampilview');

Route::get('coba','MyController@percobaan');

Route::resource('orangtua','OrangtuaController');