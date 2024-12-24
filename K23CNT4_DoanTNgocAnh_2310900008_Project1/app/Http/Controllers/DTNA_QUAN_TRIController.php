<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DTNA_QUAN_TRIController extends Controller
{
    //

    //GET:login (authentication)
    public function dtnaLogin(){
        return view('DtnaLogin.dtna-login');
    }

    //POST:login (authentication)
    public function dtnaLoginSubmit(request $_REQUEST){
        return view('DtnaLogin.dtna-login');
    }
}
