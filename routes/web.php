<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::resource('tamu', 'App\Http\Controllers\TamuController');
    Route::post('tamu/delete', 'App\Http\Controllers\TamuController@delete')->name('tamu.delete');

    Route::get('riwayat-kunjungan', 'App\Http\Controllers\RiwayatKunjunganController@index')->name('riwayat-kunjungan.index');

    Route::resource('agenda-dan-kegiatan', 'App\Http\Controllers\AgendaController');
    Route::post('agenda-dan-kegiatan/delete', 'App\Http\Controllers\AgendaController@delete')->name('agenda-dan-kegiatan.delete');

    Route::resource('ekpedisi-surat', 'App\Http\Controllers\EkpedisiController');
    Route::post('ekpedisi-surat/delete', 'App\Http\Controllers\EkpedisiController@delete')->name('ekpedisi-surat.delete');

    Route::resource('users', 'App\Http\Controllers\UsersController');
    Route::post('users/delete', 'App\Http\Controllers\UsersController@delete')->name('users.delete');
});