<?php

use Illuminate\Database\Seeder;

class LopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $lops = [
            ['tenlop' => '10A1','siso' => '45'],
            ['tenlop' => '10A2', 'siso' => '44'],
            ['tenlop' => '10A3','siso' => '41'],
            ['tenlop' => '11A1','siso' => '35'],
            ['tenlop' => '11A2', 'siso' => '46'],
            ['tenlop' => '11A3','siso' => '37'],
            ['tenlop' => '12A1', 'siso' => '43'],
            ['tenlop' => '12A2','siso' => '42'],
            ['tenlop' => '12A3', 'siso' => '34'],
        ];
        DB::table('lops')->insert($lops);
    }
}
