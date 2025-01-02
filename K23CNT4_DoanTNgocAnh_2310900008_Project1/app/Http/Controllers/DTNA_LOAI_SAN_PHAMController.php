<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DTNA_LOAI_SAN_PHAMController extends Controller
{
    //admin:CRUD
    //DTNALIST
    public function dtnaList()
    {
        $dtnaloaisanphams=dtna_loai_san_pham::all();
        return view ('dtnaAdmins.dtnaLoaiSanPham.dtna_list',['dtnaloaisanphams'=>$dtnaloaisanphams]);
    }
    public function dtnaCreate()
    {
        return view('dtnaAdmins.dtnaLoaiSanPham.dtna_create');
    }
    public function dtnaCreateSubmit(Request $request)
    {
        //ghi du lieu xuong db
        $dtnaLoaiSanPham = new dtna_loai_san_pham;
        $dtnaLoaiSanPham->dtnaMaLoai = $request->dtnaMaLoai;
        $dtnaLoaiSanPham->dtnaTenLoai = $request->dtnaTenLoai;
        $dtnaLoaiSanPham->dtnaTrangThai = $request->dtnaTrangThai;

        $dtnaLoaiSanPham->save();

        return redirect()->route('dtnaadmins.dtnaloaisanpham');
    }
    public function dtnaEdit($id)
    {
        $dtnaLoaiSanPham=dtna_loai_san_pham::find($id);
        return view('dtnaadmins.dtnaloaisanpham.dtna_edit',['dtnaLoaiSanPham'=>$dtnaLoaiSanPham]);
    }
    public function dtnaEditSubmit(Request $request)
    {
        //ghi du lieu xuong db
        $dtnaLoaiSanPham=dtna_loai_san_pham::find($request-> id);
        $dtnaLoaiSanPham->dtnaMaLoai = $request->dtnaMaLoai;
        $dtnaLoaiSanPham->dtnaTenLoai = $request->dtnaTenLoai;
        $dtnaLoaiSanPham->dtnaTrangThai = $request->dtnaTrangThai;

        $dtnaLoaiSanPham->save();

        return redirect()->route('dtnaadmins.dtnaloaisanpham');
    }
    public function dtnaDelete($id)
    {
        $dtnaLoaiSanPham=dtna_loai_san_pham::find($id);
        $dtnaLoaiSanPham->delete();
        return redirect()->route('dtnaadmins.dtnaloaisanpham');
    }
}
