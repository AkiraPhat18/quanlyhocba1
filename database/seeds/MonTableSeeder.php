<?php

use Illuminate\Database\Seeder;

class MonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $monhoc = [
            ['tenmon' => 'Toán '],
            ['tenmon' => 'Vật lý '],
            ['tenmon' => 'Hóa học '],
            ['tenmon' => 'Sinh học '],
            ['tenmon' => 'Tin học '],
            ['tenmon' => 'Ngữ Văn '],
            ['tenmon' => 'Lịch sử '],
            ['tenmon' => 'Địa lý '],
            ['tenmon' => 'Tiếng Anh '],
            ['tenmon' => 'Giáo dục công dân'],
            ['tenmon' => 'Công nghệ '],
            ['tenmon' => 'Thể dục  '],
            ['tenmon' => 'Quốc phòng an ninh '],
        ];
        DB::table('mons')->insert($monhoc);
    }
}
