<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DtnaVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('dtnavattu')->insert([
            'dtnaMaVTu'=>'DD01',
            'dtnaTenVTu'=>'Đầu DVD Hitachi 1 cửa',
            'dtnaDvTinh'=>'Bộ',
            'dtnaPhanTram'=>40,
            ]);
            DB::table('dtnavattu')->insert([
                'dtnaMaVTu'=>'DD02',
                'dtnaTenVTu'=>'Đầu DVD Hitachi 2 cửa',
                'dtnaDvTinh'=>'Bộ',
                'dtnaPhanTram'=>50,
                ]);
                //
                $faker = Faker::create();
                foreach(range(1,50)as $index){
                    DB::table('dtnavattu')->insert([
                        'dtnaMaVTu'=>$faker->word(4),
                        //'MaNCC'=>$faker->word(15),
                        'dtnaTenVTu'=>$faker->sentence(5),
                        'dtnaDiaChi'=>$faker->address(),
                        'dtnaDienThoai'=>$faker->phoneNumber(10),
                        'dtnaemail'=>$faker->email(),
                        'dtnatatus'=>$faker->boolean()
                        ]);
                }
    }
}
