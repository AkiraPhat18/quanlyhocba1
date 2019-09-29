<?php

use Illuminate\Database\Seeder;


class HocSinhTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $hocsinhs = [
            ['tenhs' => 'Khúc Diệu Khánh ','ngaysinh' => '1993/04/06', 
            'gioitinh' => 'Nữ','dantoc' => 'Kinh', 'quequan' => 'Xuân Phong'],
            ['tenhs' => 'Nguyễn Mỹ Hạnh ','ngaysinh' => '1993/04/16', 
            'gioitinh' => 'Nữ','dantoc' => 'Kinh', 'quequan' => 'Xuân Phong'],
            ['tenhs' => 'Lương Xuân Tỉnh ','ngaysinh' => '1997/09/06', 
            'gioitinh' => 'Nam','dantoc' => 'Kinh', 'quequan' => 'Xuân Kiên'],
            ['tenhs' => 'Nguyễn Ngọc Tuấn ','ngaysinh' => '1997/09/06', 
            'gioitinh' => 'Nam','dantoc' => 'Kinh', 'quequan' => 'Xuân Phong'],
            ['tenhs' => 'Dương Tiến Đạt ' ,'ngaysinh' => '1997/09/06', 
            'gioitinh' => 'Nam','dantoc' => 'Kinh', 'quequan' => 'Xuân Ngọc'],
            ['tenhs' => 'Nguyễn Thị Thư ','ngaysinh' => '1997/09/06', 
            'gioitinh' => 'Nữ','dantoc' => 'Kinh', 'quequan' => 'Xuân Phong'],
            ['tenhs' => 'Nguyễn Hải Yến ','ngaysinh' => '1997/09/06', 
            'gioitinh' => 'Nữ','dantoc' => 'Kinh', 'quequan' => 'Xuân Tân'],
            ['tenhs' => 'Nguyễn Văn Sơn ','ngaysinh' => '1997/09/06', 
            'gioitinh' => 'Nam','dantoc' => 'Kinh', 'quequan' => 'Xuân Đài'],
            ['tenhs' => 'Hoàng Công Viên ','ngaysinh' => '1997/09/15', 
            'gioitinh' => 'Nam','dantoc' => 'Kinh', 'quequan' => 'Xuân Thành'],
            ['tenhs' => 'Lê Văn Công ','ngaysinh' => '1996/09/03', 
            'gioitinh' => 'Nam','dantoc' => 'Kinh', 'quequan' => 'Xuân Tân'],
            ['tenhs' => 'Cao Văn Thức ','ngaysinh' => '1997/02/06', 
            'gioitinh' => 'Nam','dantoc' => 'Kinh', 'quequan' => 'Xuân Tân'],
            ['tenhs' => 'Bùi Đức Toàn  ','ngaysinh' => '1997/01/20', 
            'gioitinh' => 'Nam','dantoc' => 'Kinh', 'quequan' => 'Xuân Tân'],
            ['tenhs' => 'Ngô Thế Đông ','ngaysinh' => '1997/10/16', 
            'gioitinh' => 'Nam','dantoc' => 'Kinh', 'quequan' => 'Xuân Đài'],
            ['tenhs' => 'Bùi Thị Nhài ','ngaysinh' => '1997/09/12', 
            'gioitinh' => 'Nữ','dantoc' => 'Kinh', 'quequan' => 'Xuân Đài'],
            ['tenhs' => 'Đinh Quốc Duy ','ngaysinh' => '1997/09/15', 
            'gioitinh' => 'Nam','dantoc' => 'Kinh', 'quequan' => 'Xuân Phong'],
            ['tenhs' => 'Trần Thị Mai ','ngaysinh' => '1998/10/10', 
            'gioitinh' => 'Nữ','dantoc' => 'Kinh', 'quequan' => 'Xuân Hồng'],
            ['tenhs' => 'Nguyễn Thị Mai Hương ','ngaysinh' => '1997/12/26', 
            'gioitinh' => 'Nữ','dantoc' => 'Kinh', 'quequan' => 'Xuân Đài'],
            ['tenhs' => 'Đỗ  Thị Trang ','ngaysinh' => '1997/09/06', 
            'gioitinh' => 'Nữ','dantoc' => 'Kinh', 'quequan' => 'Xuân Trường'],
            ['tenhs' => 'Bùi Thị Ngọc Bích  ','ngaysinh' => '1997/09/10', 
            'gioitinh' => 'Nữ','dantoc' => 'Kinh', 'quequan' => 'Xuân Phong'],
            ['tenhs' => 'Tạ Thị Quỳnh ','ngaysinh' => '1997/09/15', 
            'gioitinh' => 'Nữ','dantoc' => 'Kinh', 'quequan' => 'Xuân Đài'],
            ['tenhs' => 'Dương Thị Thủy','ngaysinh' => '1995/09/26', 
            'gioitinh' => 'Nữ','dantoc' => 'Kinh', 'quequan' => 'Xuân Phong'],
        ];
        DB::table('hocsinhs')->insert($hocsinhs);
    }
}
