<?php

use Illuminate\Database\Seeder;
use App\Model\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::insert([
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => '12345678'
            ],
            [
                'id' => 2,
                'name' => 'Nguyễn Văn Khánh',
                'email' => 'khanhnguyen@gmail.com',
                'password' => '12345678'
            ],
            [
                'id' => 3,
                'name' => 'Lý Văn Hùng',
                'email' => 'hungly@gmail.com',
                'password' => '12345678'
            ],
            [
                'id' => 4,
                'name' => 'Đoàn Ngọc Sơn',
                'email' => 'sondoan@gmail.com',
                'password' => '12345678'
            ],
            [
                'id' => 5,
                'name' => 'Nguyễn Thị Bé',
                'email' => 'benguyen@gmail.com',
                'password' => '12345678'
            ],
            [
                'id' => 6,
                'name' => 'Lâm Thị  Lệ',
                'email' => 'lelam@gmail.com',
                'password' => '12345678'
            ]
        ]);
    }
}
