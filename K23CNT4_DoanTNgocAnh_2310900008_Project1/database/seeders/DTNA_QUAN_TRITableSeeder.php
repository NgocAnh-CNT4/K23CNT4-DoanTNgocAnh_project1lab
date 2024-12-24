<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DTNA_QUAN_TRITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dtnaMaKhau = md5("123456a@");
        DB::table('DTNA_QUAN_TRI')->insert([
            'dtnaTaiKhoan'=>'doan80040@gmail.com',
            'dtnaMatKhau'=> $dtnaMaKhau,
            'dtnaTrangThai'=>0
        ]);
        DB::table('DTNA_QUAN_TRI')->insert([
            'dtnaTaiKhoan'=>'0346375366',
            'dtnaMatKhau'=> $dtnaMaKhau,
            'dtnaTrangThai'=>0
        ]);
    }
}
