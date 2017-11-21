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

Route::get('/ABOUT', function () {
    return '<title>WOY, DENGARKANLAH!!!</title>
    		<center>Lagu Ini Kupersembahkan untukmu<br>Dimanapun.. Kau Berada..<br>Bersatu Bukan untuk berpecah belah..<br>Perbedaan Bukan Lah suatu masalah<br>Penampilan Bukan lah hal yang utama<br>Tapi hati kita yang menentukan nya<br>bersatu untuk persib bandung</center>';
});


Route::get('/kantin/{mkn}/{mnm}/{mil}',function($mk,$mn,$ml){
	return 'Makan <b>'.$mk.'</b><br>Minum <b>'.$mn.'</b><br>Ngemil <b>'.$ml.'</b>';
	});

Route::get('/test/{u?}',function($a="Dadang"){
	return $a;
});

Route::get('/TestSiswa', function(){
	$a =App\Gema::find(2);
	return $a;
});

Route::get('/tests', function(){
	$a =App\Gema::where('alamat','like','Jl Sayuran 121')->get();
	return $a;
});
