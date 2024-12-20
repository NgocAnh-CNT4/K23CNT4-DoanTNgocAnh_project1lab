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

#sinhvien-model1
route ::get('/dtna-sinhviens',[dtnaSinhVienController::class,'dtnaList'])->name('dtnaSinhVien.dtnaList');
route ::get('/dtna-sinhvien/create',[dtnaSinhVienController::class,'dtnaCreate'])->name('dtnaSinhVien.dtnaCreate');
route ::post('/dtna-sinhvien/create',[dtnaSinhVienController::class,'dtnaCreateSubmit'])->name('dtnaSinhVien.dtnaCreateSubmit');


