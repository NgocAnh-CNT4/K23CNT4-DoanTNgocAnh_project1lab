<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DTNA_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('DTNA_LOAI_SAN_PHAM')->insert([
            'dtnaMaLoai' =>"L001",
            'dtnaTenLoai' =>"Cây cảnh văn phòng",
            'dtnaTrangThai'=>0
        ]);
        DB::table('DTNA_LOAI_SAN_PHAM')->insert([
            'dtnaMaLoai' =>"L002",
            'dtnaTenLoai' =>"Cây thuỷ canh",
            'dtnaTrangThai'=>0
        ]);
        DB::table('DTNA_LOAI_SAN_PHAM')->insert([
            'dtnaMaLoai' =>"L003",
            'dtnaTenLoai' =>"Cây để bàn",
            'dtnaTrangThai'=>0
        ]);
        DB::table('DTNA_LOAI_SAN_PHAM')->insert([
            'dtnaMaLoai' =>"L004",
            'dtnaTenLoai' =>"Cây cảnh phong thuỷ",
            'dtnaTrangThai'=>0
        ]);
    }
}
