<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/proker', function () {
    return view('proker');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/proker/obseva-14-10-2023', function () {
    return view('obseva-14-2023');
});

Route::get('/proker/mpk-15-01-2020', function () {
    return view('mpk-15-2020');
});

Route::get('/proker/syohita-29-03-2019', function () {
    return view('syohita-29-2019');
});

Route::get('/proker/obseva-17-08-2015', function () {
    return view('syohita-29-2019');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/presensi', function () {
    return view('presensi');
});

Route::get('/presensi/karista', function () {
    return view('presensi-karista');
});

Route::get('/presensi/snb', function () {
    return view('presensi-snb');
});

Route::get('/presensi/sdf', function () {
    return view('presensi-sdf');
});

Route::get('/presensi/jurnalistik', function () {
    return view('presensi-jurnalistik');
});
