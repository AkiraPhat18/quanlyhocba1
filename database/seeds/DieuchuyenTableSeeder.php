<?php

use Illuminate\Database\Seeder;

class DieuchuyenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dc = [
            ['mahs' => '5' ,'ngay' => '2013/09/15','malopcu' => '8' , 'malopmoi'
            => '7','lydo' => 'Học tập tiến bộ ','tinhtrang' =>'Yes'],
            ['mahs' => '7' ,'ngay' => '2013/10/15','malopcu' => '2' , 'malopmoi'
            => '1','lydo' => 'Học tập tiến bộ ','tinhtrang' =>'Yes']
        ];
        DB::table('dieuchuyens')->insert($dc);
    }
}
