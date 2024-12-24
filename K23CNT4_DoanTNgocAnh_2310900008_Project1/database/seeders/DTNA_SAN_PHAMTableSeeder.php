<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DTNA_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("DTNA_SAN_PHAM")->insert([
            'dtnaMaSanPham' =>"VP001",
            'dtnaTenSanPham'=>"Cây phú quý",
            'dtnaHinhAnh'=>"images/san-pham/VP001.jpg",
            'dtnaSoLuong'=>100,
            'dtnaDonGia'=>699000,
            'dtnaMaLoai'=>1,
            'dtnaTrangThai'=>0
        ]);
        DB::table("DTNA_SAN_PHAM")->insert([
            'dtnaMaSanPham' =>"VP002",
            'dtnaTenSanPham'=>"Cây đại phú gia",
            'dtnaHinhAnh'=>"images/san-pham/VP002.jpg",
            'dtnaSoLuong'=>200,
            'dtnaDonGia'=>550000,
            'dtnaMaLoai'=>1,
            'dtnaTrangThai'=>0
        ]);
        DB::table("DTNA_SAN_PHAM")->insert([
            'dtnaMaSanPham' =>"VP003",
            'dtnaTenSanPham'=>"Cây hạnh phúc",
            'dtnaHinhAnh'=>"images/san-pham/VP003.jpg",
            'dtnaSoLuong'=>150,
            'dtnaDonGia'=>250000,
            'dtnaMaLoai'=>1,
            'dtnaTrangThai'=>0
        ]);
        DB::table("DTNA_SAN_PHAM")->insert([
            'dtnaMaSanPham' =>"VP004",
            'dtnaTenSanPham'=>"Cây vạn lộc",
            'dtnaHinhAnh'=>"images/san-pham/VP004.jpg",
            'dtnaSoLuong'=>300,
            'dtnaDonGia'=>799000,
            'dtnaMaLoai'=>1,
            'dtnaTrangThai'=>0
        ]);
        DB::table("DTNA_SAN_PHAM")->insert([
            'dtnaMaSanPham' =>"PT001",
            'dtnaTenSanPham'=>"Cây mộc lan",
            'dtnaHinhAnh'=>"images/san-pham/PT001.jpg",
            'dtnaSoLuong'=>150,
            'dtnaDonGia'=>590000,
            'dtnaMaLoai'=>3,
            'dtnaTrangThai'=>0
        ]);
        DB::table("DTNA_SAN_PHAM")->insert([
            'dtnaMaSanPham' =>"PT002",
            'dtnaTenSanPham'=>"Cây trường sinh",
            'dtnaHinhAnh'=>"images/san-pham/PT002.jpg",
            'dtnaSoLuong'=>100,
            'dtnaDonGia'=>150000,
            'dtnaMaLoai'=>3,
            'dtnaTrangThai'=>0
        ]);
        DB::table("DTNA_SAN_PHAM")->insert([
            'dtnaMaSanPham' =>"PT003",
            'dtnaTenSanPham'=>"Cây hạnh phúc",
            'dtnaHinhAnh'=>"images/san-pham/PT003.jpg",
            'dtnaSoLuong'=>200,
            'dtnaDonGia'=>299000,
            'dtnaMaLoai'=>3,
            'dtnaTrangThai'=>0
        ]);
        DB::table("DTNA_SAN_PHAM")->insert([
            'dtnaMaSanPham' =>"PT004",
            'dtnaTenSanPham'=>"Cây hoa nhài",
            'dtnaHinhAnh'=>"images/san-pham/PT004.jpg",
            'dtnaSoLuong'=>300,
            'dtnaDonGia'=>199000,
            'dtnaMaLoai'=>3,
            'dtnaTrangThai'=>0
        ]);
    }
}
