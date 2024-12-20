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

#view
route::get('/dtna-view1',function (){
    return view('dtna-view1',['name'=>"K23CNT-Project-Ngoc Anh"]);
});

route::get('/dtna-view2',function (){
    return view('dtna-view2',[
        'name'=>"K23CNT-Project-Ngoc Anh",
        'array'=>[1,3,2,6,9]
    ]);
});
