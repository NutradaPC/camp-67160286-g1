<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use League\Uri\Http;

Route::get('/', function () {
    return view('html');
});

Route::get('/se', function(){
    return view('template.default');
});


Route::get('/workshop', [MyController::class, 'index']); // เปิดหน้าฟอร์ม
Route::post('/workshop-store', [MyController::class, 'store'])->name('workshop.store'); // รับค่า

Route::resource('/flights', App\Http\Controllers\FlightController::class);
