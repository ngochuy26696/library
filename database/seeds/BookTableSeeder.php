<?php

use Illuminate\Database\Seeder;
use App\Model\Book;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Book::insert([
            [
                'id' => 1,
                'name' => 'Toán học lớp 10',
                'publisher' => 'NXB Giáo dục',
                'author' => 'Đỗ Trung Tân',
                'category_id' => 1,
                'number' => 10
            ],
            [
                'id' => 2,
                'name' => 'Toán học lớp 11',
                'publisher' => 'NXB Giáo dục',
                'author' => 'Nguyễn Văn An',
                'category_id' => 1,
                'number' => 15
            ],
            [
                'id' => 3,
                'name' => 'Toán học lớp 12',
                'publisher' => 'NXB Giáo dục',
                'author' => 'Lý Văn Bình',
                'category_id' => 1,
                'number' => 10
            ],
            [
                'id' => 4,
                'name' => 'Đại số toàn tập',
                'publisher' => 'NXB Giáo dục',
                'author' => 'Trần Ngọc Đức',
                'category_id' => 1,
                'number' => 10
            ],
            [
                'id' => 5,
                'name' => 'Hình học toàn tập',
                'publisher' => 'NXB Giáo dục',
                'author' => 'Đỗ Trung Tân',
                'category_id' => 1,
                'number' => 20
            ],
            [
                'id' => 6,
                'name' => 'Văn học lớp 10',
                'publisher' => 'NXB Giáo dục',
                'author' => 'Nguyễn Thị Bình',
                'category_id' => 2,
                'number' => 10
            ],
            [
                'id' => 7,
                'name' => 'Văn học lớp 11',
                'publisher' => 'NXB Giáo dục',
                'author' => 'Nguyễn Thị Bình',
                'category_id' => 2,
                'number' => 30
            ],
            [
                'id' => 8,
                'name' => 'Văn học lớp 12',
                'publisher' => 'NXB Giáo dục',
                'author' => 'Nguyễn Thị Bình',
                'category_id' => 2,
                'number' => 10
            ],
            [
                'id' => 9,
                'name' => 'Cuốn theo chiều gió',
                'publisher' => 'NXB Trẻ',
                'author' => 'Nguyễn Văn Bé',
                'category_id' => 2,
                'number' => 10
            ],
            [
                'id' => 10,
                'name' => 'Chạng vạng',
                'publisher' => 'NXB Trẻ',
                'author' => 'Trần Văn Dũng',
                'category_id' => 2,
                'number' => 10
            ],
            [
                'id' => 11,
                'name' => 'Tiếng Anh cơ bản',
                'publisher' => 'NXB Giáo dục',
                'author' => 'Võ Thành Vinh',
                'category_id' => 3,
                'number' => 10
            ],
            [
                'id' => 12,
                'name' => 'Tiếng Anh nâng cao',
                'publisher' => 'NXB Giáo dục',
                'author' => 'Võ Thành Vinh',
                'category_id' => 3,
                'number' => 10
            ],
            [
                'id' => 13,
                'name' => 'TOEIC',
                'publisher' => 'NXB Ngoại Ngữ',
                'author' => 'Nguyễn Đức',
                'category_id' => 3,
                'number' => 10
            ],
            [
                'id' => 14,
                'name' => 'IELTS',
                'publisher' => 'NXB Giáo dục',
                'author' => 'Trần Bình Minh',
                'category_id' => 3,
                'number' => 10
            ],
            [
                'id' => 15,
                'name' => 'Tiếng Anh giao tiếp',
                'publisher' => 'NXB Giáo dục',
                'author' => 'Trần Văn Bình',
                'category_id' => 3,
                'number' => 10
            ],
            [
                'id' => 16,
                'name' => 'HTML',
                'publisher' => 'NXB Giáo dục',
                'author' => 'Nguyễn Văn Anh',
                'category_id' => 4,
                'number' => 10
            ],
            [
                'id' => 17,
                'name' => 'CSS',
                'publisher' => 'NXB Giáo dục',
                'author' => 'Võ Đại Nhân',
                'category_id' => 4,
                'number' => 10
            ],
            [
                'id' => 18,
                'name' => 'JS',
                'publisher' => 'NXB Giáo dục',
                'author' => 'Đỗ Trung Tân',
                'category_id' => 4,
                'number' => 10
            ],
            [
                'id' => 19,
                'name' => 'PHP',
                'publisher' => 'NXB Giáo dục',
                'author' => 'Murach',
                'category_id' => 4,
                'number' => 10
            ],
            [
                'id' => 20,
                'name' => 'MySQL',
                'publisher' => 'NXB Giáo dục',
                'author' => 'Nguyễn Đình Trí',
                'category_id' => 4,
                'number' => 10
            ],
            [
                'id' => 21,
                'name' => 'Cristiano Ronaldo',
                'publisher' => 'NXB thể thao',
                'author' => 'Nguyễn Bình Minh',
                'category_id' => 5,
                'number' => 10
            ],
            [
                'id' => 22,
                'name' => 'Lionel Messi',
                'publisher' => 'NXB thể thao',
                'author' => 'Đỗ Trung Tân',
                'category_id' => 5,
                'number' => 10
            ],
            [
                'id' => 23,
                'name' => 'Fernando Torres',
                'publisher' => 'NXB thể thao',
                'author' => 'Lý Hoài Sa',
                'category_id' => 5,
                'number' => 10
            ],
            [
                'id' => 24,
                'name' => 'David Beckham',
                'publisher' => 'NXB thể thao',
                'author' => 'Lý Nhân Toàn',
                'category_id' => 5,
                'number' => 10
            ],
            [
                'id' => 25,
                'name' => 'Luka Modric',
                'publisher' => 'NXB thể thao',
                'author' => 'Đỗ Trung Tân',
                'category_id' => 5,
                'number' => 10
            ]
        ]);
    }
}
