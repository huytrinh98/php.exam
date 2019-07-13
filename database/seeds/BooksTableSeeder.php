<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            ['authorid' => 1, 'title' => 'Bố Già', 'ISBN' => '110111', 'pub_year' => 2011, 'available' => 11],
            ['authorid' => 2, 'title' => 'Đại Gia Gatsby', 'ISBN' => '110112', 'pub_year' => 2012, 'available' => 12],
            ['authorid' => 3, 'title' => 'Nhà Giả Kim', 'ISBN' => '110113', 'pub_year' => 2013, 'available' => 13],
            ['authorid' => 4, 'title' => 'Trăm Năm Cô Đơn', 'ISBN' => '110114', 'pub_year' => 2014, 'available' => 14],
        ]);
    }
}
