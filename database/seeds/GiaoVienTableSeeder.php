<?php

use Illuminate\Database\Seeder;

class GiaoVienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $giaoviens = [
            ['tengv' => 'Lê Xuân Bằng','gioitinh' => 'Nam','malop' => '1'],
            ['tengv' => 'Phạm Văn Thiêm','gioitinh' => 'Nam','malop' => '2'],
            ['tengv' => 'Phạm Thị Oanh','gioitinh' => 'Nữ', 'malop' => '3'],
            ['tengv' => 'Đoàn Văn Hiệu','gioitinh' => 'Nam','malop' => '2'],
            ['tengv' => 'Nguyễn Thị Nga','gioitinh' => 'Nữ','malop' => '4'],
            ['tengv' => 'Vũ Thị Hoài','gioitinh' => 'Nữ','malop' => '5' ],
            ['tengv' => 'Vũ Thị Xuân','gioitinh' => 'Nữ','malop' => '6'],
            ['tengv' => 'Phạm Thị Duyên','gioitinh' => 'Nữ','malop' => '7'],
            ['tengv' => 'Vũ Khắc Lượng','gioitinh' => 'Nam','malop' => '8'],
            ['tengv' => 'Nguyễn Thị Thúy','gioitinh' => 'Nữ','malop' => '9'],
            ['tengv' => 'Đinh Hà Hải','gioitinh' => 'Nam','malop' => '1'],
        ];
        DB::table('giaoviens')->insert($giaoviens);
    }
}
