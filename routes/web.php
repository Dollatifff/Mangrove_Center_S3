<?php

use App\Http\Controllers\Admin\Admindashboard;
use App\Http\Controllers\Admin\Adminevent;
use App\Http\Controllers\Admin\Adminkatalog;
use Illuminate\Support\Facades\Route;




Route::prefix('admin')->group(function () {

    Route::controller(Admindashboard::class)->group(function () {
        Route::get('/dashboard', 'index');
    });

    Route::controller(Adminevent::class)->group(function () {
        Route::get('/event', 'index');
        Route::get('/event/tambah', 'tambah');
        Route::post('/event/tambah', 'aksiTambah');
        Route::get('/event/detail/{event}', 'detail');
        Route::get('/event/edit/{event}', 'edit');
        Route::post('/event/update/{event}', 'akisEdit');
        Route::get('/event/hapus/{event}', 'hapus');
    });
    Route::controller(Adminkatalog::class)->group(function () {
        Route::get('/katalog', 'index');
        Route::get('/katalog/tambah', 'tambah');
        Route::post('/katalog/tambah', 'aksiTambah');
        Route::get('/katalog/detail/{katalog}', 'detail');
        Route::get('/katalog/edit/{katalog}', 'edit');
        Route::post('/katalog/update/{katalog}', 'akisEdit');
        Route::get('/katalog/hapus/{katalog}', 'hapus');
    });

});

Route::get('/', function () {
    return view('landing.home');
});
Route::get('/login', function () {
    return view('landing.login');
});
