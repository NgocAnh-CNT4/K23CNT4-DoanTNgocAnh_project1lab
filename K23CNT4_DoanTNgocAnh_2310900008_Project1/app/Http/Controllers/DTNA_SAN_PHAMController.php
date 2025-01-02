<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DTNA_SAN_PHAMController extends Controller
{
    //CRUD
    //GET : read all;
    public function dtnaList()
    {
        $dtnasanphams=dtna_san_pham::where('dtnaTrangThai',0);
        return view ('dtnaAdmins.dtnaSanPham.dtna_list',['dtnasanphams'=>$dtnasanphams]);
    }
}
