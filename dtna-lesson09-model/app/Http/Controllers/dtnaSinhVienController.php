<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dtnaSinhVienController extends Controller
{
    //list/insert/update(edit)/delete
public function dtnalist()
    {
    $dtnasinhViens = dtnaSinhVien::all();
return view('dtnasinhvien.dtna-list',['dtnaSinhVien'=>$dtnasinhViens]);
    } 
    //create (insert)
    public function dtnacreate()
    {
        return view('dtnaSinhVien.dtna-create')
    }  
    public function dtnaCreateSubmit(require $_REQUEST)
    {
        $dtnaSinhVien= new dtnaSinhVien();
        $dtnaSinhVien->dtnaMaSV=$_REQUEST->dtnaMaSV;
        $dtnaSinhVien->dtnaHoSV=$_REQUEST->dtnaHoSV;
        $dtnaSinhVien->dtnaTenSV=$_REQUEST->dtnaTenSV;
        $dtnaSinhVien->dtnaPhai=$_REQUEST->dtnaPhai;
        $dtnaSinhVien->dtnaNgaySinh=$_REQUEST->dtnaNgaySinh;
        $dtnaSinhVien->dtnaNoiSinh=$_REQUEST->dtnaNoiSinh;
        $dtnaSinhVien->dtnaMaKH=$_REQUEST->dtnaMaKH;
        //ghi vao bang trong csdl
        $dtnaSinhVien->save();
        //return view('dtbaSinhVien.dtna-create');
        return back()->with('dtnaSinhVien_created','Da them moi mot sinh vien thanh cong !');
    }
}
