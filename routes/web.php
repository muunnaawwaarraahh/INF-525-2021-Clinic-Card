<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


Route::prefix('user')->name('user.')->group(function(){
    Route::middleware(['guest:web'])->group(function(){
        Route::get('/login', 'App\Http\Controllers\PagesController@index');
        Route::get('register', 'App\Http\Controllers\PagesController@regis');
        Route::post('register', 'App\Http\Controllers\PagesController@store');
        Route::post('check', 'App\Http\Controllers\PagesController@check');
        
    });

    Route::middleware(['auth:web'])->group(function(){
        Route::get('home', 'App\Http\Controllers\PatientsController@index');
        Route::get('kartu_view', 'App\Http\Controllers\PatientsController@show');
        Route::get('kartu', 'App\Http\Controllers\PatientsController@kartu');
        Route::post('kartu', 'App\Http\Controllers\PatientsController@store');
        Route::get('jadwal', 'App\Http\Controllers\PatientsController@jadwal');
        Route::get('dokter', 'App\Http\Controllers\PatientsController@dokter');
        Route::post('logout', 'App\Http\Controllers\PagesController@logout');
    });
});

Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin'])->group(function(){
        Route::get('login', 'App\Http\Controllers\AdminPagesController@index');
        Route::post('check', 'App\Http\Controllers\AdminPagesController@check');
    });

    Route::middleware(['auth:admin'])->group(function(){   
        Route::get('home', 'App\Http\Controllers\AdminsController@index');
        Route::post('logout', 'App\Http\Controllers\AdminPagesController@logout');
        Route::get('kartu', 'App\Http\Controllers\AdminsController@kartu');
        Route::post('/kartu/{pasien}', 'App\Http\Controllers\AdminsController@destroyPasien');
        Route::get('/kartu/tambah_pasien', 'App\Http\Controllers\AdminsController@tambahPasien');
        Route::post('/kartu/tambah_pasien', 'App\Http\Controllers\AdminsController@createPasien');
        Route::get('/jadwal', 'App\Http\Controllers\AdminsController@jadwal');
        Route::get('/dokter', 'App\Http\Controllers\AdminsController@dokter');
        Route::get('/dokter/tambah_dokter', 'App\Http\Controllers\AdminsController@tambahDokter');
        Route::post('/dokter/tambah_dokter', 'App\Http\Controllers\AdminsController@createDokter');
        Route::get('/jadwal/tambah_jadwal', 'App\Http\Controllers\AdminsController@tambahJadwal');
        Route::post('/jadwal/tambah_jadwal', 'App\Http\Controllers\AdminsController@createJadwal');
        Route::get('/kartu/detail/{patient:id}', 'App\Http\Controllers\AdminsController@show');
    });

});




