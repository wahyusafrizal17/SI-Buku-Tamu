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

    Route::get('tamu/excel', 'App\Http\Controllers\TamuController@excel')->name('tamu.excel');
    Route::get('tamu/pdf', 'App\Http\Controllers\TamuController@pdf')->name('tamu.pdf');
    Route::post('tamu/delete', 'App\Http\Controllers\TamuController@delete')->name('tamu.delete');
    Route::resource('tamu', 'App\Http\Controllers\TamuController');

    Route::get('riwayat-kunjungan', 'App\Http\Controllers\RiwayatKunjunganController@index')->name('riwayat-kunjungan.index');

    Route::get('agenda-dan-kegiatan/excel', 'App\Http\Controllers\AgendaController@excel')->name('agenda-dan-kegiatan.excel');
    Route::get('agenda-dan-kegiatan/pdf', 'App\Http\Controllers\AgendaController@pdf')->name('agenda-dan-kegiatan.pdf');
    Route::post('agenda-dan-kegiatan/delete', 'App\Http\Controllers\AgendaController@delete')->name('agenda-dan-kegiatan.delete');
    Route::resource('agenda-dan-kegiatan', 'App\Http\Controllers\AgendaController');

    Route::get('ekpedisi-surat/excel', 'App\Http\Controllers\EkpedisiController@excel')->name('ekpedisi-surat.excel');
    Route::get('ekpedisi-surat/pdf', 'App\Http\Controllers\EkpedisiController@pdf')->name('ekpedisi-surat.pdf');
    Route::post('ekpedisi-surat/delete', 'App\Http\Controllers\EkpedisiController@delete')->name('ekpedisi-surat.delete');
    Route::resource('ekpedisi-surat', 'App\Http\Controllers\EkpedisiController');

    Route::resource('users', 'App\Http\Controllers\UsersController');
    Route::post('users/delete', 'App\Http\Controllers\UsersController@delete')->name('users.delete');
});