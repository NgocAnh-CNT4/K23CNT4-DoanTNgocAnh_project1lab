<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DtanNhaCCController extends Controller
{
    
    
    // List((R)) / create / edit / delete

    public function list(){
        //lấy dữu liệu từ db thông qua ORM
        $dtnaNhaCCs = DtnaNhaCC::all()
        return view('DtnaNhaCC.List',['dtnaNhaCCs'=>$dtnaNhaCCs]);
    }
/ }
