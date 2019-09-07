<?php

use Illuminate\Database\Seeder;
use App\Model\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::insert([
            [
                'id' => 1,
                'name' => 'Toán học'
            ],
            [
                'id' => 2,
                'name' => 'Văn học'
            ],
            [
                'id' => 3,
                'name' => 'Tiếng Anh'
            ],
            [
                'id' => 4,
                'name' => 'Lập trình'
            ],
            [
                'id' => 5,
                'name' => 'Thể thao'
            ]
        ]);
    }
}
