<?php

use Illuminate\Database\Seeder;

class HsDiemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $hsdiem = [
            ['mahs' => '7','mamon' => '1' , 'mabaikt' => '1', 'diem' => '8', 
            'magv' => '1'],
            ['mahs' => '21','mamon' => '3' , 'mabaikt' => '2', 'diem' => '9', 
            'magv' => '9'],
            ['mahs' => '12','mamon' => '4' , 'mabaikt' => '3', 'diem' => '7', 
            'magv' => '10'],
            ['mahs' => '5','mamon' => '7' , 'mabaikt' => '4', 'diem' => '8', 
            'magv' => '11'],
            ['mahs' => '13','mamon' => '5' , 'mabaikt' => '1', 'diem' => '8', 
            'magv' => '7'],
            ['mahs' => '20','mamon' => '4' , 'mabaikt' => '5', 'diem' => '8', 
            'magv' => '4'],
        ];
        DB::table('hs-diems')->insert($hsdiem);
    }
}
