<?php
Route::group(['middleware' => ['web','auth']], function () {
    Route::get('peminjaman', 'Jalinmodule\Peminjaman\Controllers\PeminjamanController@index');
    Route::get('peminjamannew', 'jalinmodule\peminjaman\Controllers\PeminjamanController@newpeminjaman');
    Route::post('peminjaman', 'jalinmodule\peminjaman\Controllers\PeminjamanController@store');
});