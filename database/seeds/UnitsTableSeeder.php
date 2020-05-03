<?php

use Illuminate\Database\Seeder;
use App\Unit;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::insert([
    		[ 'title' => '人類の発生と古代文明' , 'category_id' => 1],
    		[ 'title' => '日本の成り立ちと倭の王権' , 'category_id' => 1],
    		[ 'title' => '大帝国の出現と律令国家の形成' , 'category_id' => 1],
    		[ 'title' => '貴族社会の発展' , 'category_id' => 1],
    		[ 'title' => '中世問題タイトル1' , 'category_id' => 2],
    		[ 'title' => '中世問題タイトル2' , 'category_id' => 2],
    		[ 'title' => '中世問題タイトル3' , 'category_id' => 2],
    		[ 'title' => '中世問題タイトル4' , 'category_id' => 2],
    		[ 'title' => '近世問題タイトル1' , 'category_id' => 3],
    		[ 'title' => '近世問題タイトル2' , 'category_id' => 3],
    		[ 'title' => '近世問題タイトル3' , 'category_id' => 3],
    		[ 'title' => '近代問題タイトル1' , 'category_id' => 4],
    		[ 'title' => '近代問題タイトル2' , 'category_id' => 4],
    		[ 'title' => '近代問題タイトル3' , 'category_id' => 4],
    		[ 'title' => '近代問題タイトル4' , 'category_id' => 4],
    		[ 'title' => '現代問題タイトル1' , 'category_id' => 5],
    		[ 'title' => '現代問題タイトル2' , 'category_id' => 5],
    		[ 'title' => '現代問題タイトル3' , 'category_id' => 5],
        ]);
    }
}
