<?php

use Illuminate\Database\Seeder;
use App\Model\Receipt;

class ReceiptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Receipt::insert([
            [
                'user_id' => 2,
                'book_id' => 1,
                'date_borrow' => '2019-05-04',
                'date_return' => '2019-06-05',
                'status' => 1
            ],
            [
                'user_id' => 3,
                'book_id' => 8,
                'date_borrow' => '2019-05-07',
                'date_return' => '2019-06-08',
                'status' => 1
            ],
            [
                'user_id' => 4,
                'book_id' => 14,
                'date_borrow' => '2019-07-04',
                'date_return' => '2019-10-05',
                'status' => 0
            ],
            [
                'user_id' => 5,
                'book_id' => 16,
                'date_borrow' => '2019-05-04',
                'date_return' => '2019-09-09',
                'status' => 0
            ],
            [
                'user_id' => 6,
                'book_id' => 21,
                'date_borrow' => '2019-05-14',
                'date_return' => '2019-06-27',
                'status' => 1
            ]
        ]);
    }
}
