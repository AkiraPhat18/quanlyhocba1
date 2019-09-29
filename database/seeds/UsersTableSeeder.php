<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
        	['username' => 'Nguyễn Mạnh Cường', 'email' => 'manhcuong@gmail.com', 'password' => '12345678'],
        	['username' => 'Lê Xuân Bằng', 'email' => 'bangxt@gmail.com', 'password' => 'matkhaulagi'],
        	['username' => 'Đoàn Văn Hiệu', 'email' => 'hieudh@gmail.com', 'password' => 'tinuanoi'],
        	['username' => 'Admin', 'email' => 'ngocpt@gmail.com', 'password' => '123456879'],
        ];
        DB::table('users')->insert($users);
    }
}
