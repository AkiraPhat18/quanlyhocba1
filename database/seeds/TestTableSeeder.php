<?php

use Illuminate\Database\Seeder;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $test = [
            // ['loaibaikt' => 'kiểm tra miệng  ', 'thoigian' => '2013/08/25'],
            ['loaibaikt' => 'kiểm tra 15', 'thoigian' => '2013/09/03'],
            ['loaibaikt' => 'kiểm tra 45', 'thoigian' => '2013/10/15'],
            ['loaibaikt' => 'thi giữa kì 1', 'thoigian' => '2013/11/16'],
            ['loaibaikt' => 'thi học kì 1', 'thoigian' => '2013/12/16'],
            ['loaibaikt' => 'kiểm tra miệng ', 'thoigian' => '2014/02/25'],
            ['loaibaikt' => 'kiểm tra 15', 'thoigian' => '2014/03/03'],
            ['loaibaikt' => 'kiểm tra 45', 'thoigian' => '2014/04/15'],
            ['loaibaikt' => 'thi giữa kì 2', 'thoigian' => '2014/05/16'],
            ['loaibaikt' => 'thi học kì 2', 'thoigian' => '2013/05/25'],
        ];
        DB::table('baikts')->insert($test);
    }
}
