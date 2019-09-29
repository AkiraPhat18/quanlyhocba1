<?php

use Illuminate\Database\Seeder;

class HsLopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $hslop = [
            ['mahs' => '1','malop' => '2','tinhtrang' => 'Yes' ,'hanhkiem' => 'Tốt'
            ,'nxki1' => 'Ngoan , Chăm chỉ , cần cù trong học tập ' , 'nxki2' =>
            'Có tiến bộ trong học tập ', 'nxnam' => 'Học tập tốt cần phát huy '],
            ['mahs' => '2','malop' => '9','tinhtrang' => 'Yes' ,'hanhkiem' => 'Tốt'
            ,'nxki1' => 'Ngoan , Chăm chỉ , cần cù trong học tập ' , 'nxki2' =>
            'Có tiến bộ trong học tập ', 'nxnam' => 'Học tập tốt cần phát huy '],
            ['mahs' => '3','malop' => '5','tinhtrang' => 'Yes' ,'hanhkiem' => 'Tốt'
            ,'nxki1' => 'Ngoan , Chăm chỉ , cần cù trong học tập ' , 'nxki2' =>
            'Có tiến bộ trong học tập ', 'nxnam' => 'Học tập tốt cần phát huy '],
            ['mahs' => '4','malop' => '6','tinhtrang' => 'Yes' ,'hanhkiem' => 'Tốt'
            ,'nxki1' => 'Ngoan , Chăm chỉ , cần cù trong học tập ' , 'nxki2' =>
            'Có tiến bộ trong học tập ', 'nxnam' => 'Học tập tốt cần phát huy '],
            ['mahs' => '7','malop' => '8','tinhtrang' => 'Yes' ,'hanhkiem' => 'Tốt'
            ,'nxki1' => 'Ngoan , Chăm chỉ , cần cù trong học tập ' , 'nxki2' =>
            'Có tiến bộ trong học tập ', 'nxnam' => 'Học tập tốt cần phát huy '],
        ];
        DB::table('hs-lops')->insert($hslop);
    }
}
