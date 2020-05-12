<?php

use Illuminate\Database\Seeder;
use App\Choice;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Choice::insert([
    		[ 'unit_id' => 1 , 'question_id' => 1 , 'content' => 'クロマニョン人' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 1 , 'content' => '北京原人' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 1 , 'content' => 'ジャワ原人' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 1 , 'content' => 'アウストラロピテクス' , 'is_answer' => 1 ],
    		[ 'unit_id' => 1 , 'question_id' => 2 , 'content' => '土器を使って料理や食料の保存をするようになった' , 'is_answer' => 1 ],
    		[ 'unit_id' => 1 , 'question_id' => 2 , 'content' => '仲間とのやりとりで言葉を使うようになった' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 2 , 'content' => '木の実や植物を集め、食料とするようになった' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 2 , 'content' => '火を使うようになった' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 3 , 'content' => 'インダス文明' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 3 , 'content' => 'エジプト文明' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 3 , 'content' => '中国文明' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 3 , 'content' => 'メソポタミア文明' , 'is_answer' => 1 ],
    		[ 'unit_id' => 1 , 'question_id' => 4 , 'content' => '甲骨文字' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 4 , 'content' => 'くさび形文字' , 'is_answer' => 1 ],
    		[ 'unit_id' => 1 , 'question_id' => 4 , 'content' => 'ヒエログリフ' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 4 , 'content' => 'アルファベット' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 5 , 'content' => 'モヘンジョ＝ダロ' , 'is_answer' => 1 ],
    		[ 'unit_id' => 1 , 'question_id' => 5 , 'content' => 'ハンムラビ法典' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 5 , 'content' => '太陽暦' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 5 , 'content' => '60進法' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 6 , 'content' => 'イスラム教' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 6 , 'content' => '仏教' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 6 , 'content' => 'キリスト教' , 'is_answer' => 1 ],
    		[ 'unit_id' => 1 , 'question_id' => 6 , 'content' => 'ユダヤ教' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 7 , 'content' => '秦' , 'is_answer' => 1 ],
    		[ 'unit_id' => 1 , 'question_id' => 7 , 'content' => '殷' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 7 , 'content' => '漢（前漢）' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 7 , 'content' => '周' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 8 , 'content' => '万里の長城' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 8 , 'content' => '焚書坑儒' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 8 , 'content' => '度量衡の統一' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 8 , 'content' => '楽浪郡の設置' , 'is_answer' => 1 ],
    		[ 'unit_id' => 1 , 'question_id' => 9 , 'content' => '新羅' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 9 , 'content' => '伽耶（加羅）' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 9 , 'content' => '高句麗' , 'is_answer' => 1 ],
    		[ 'unit_id' => 1 , 'question_id' => 9 , 'content' => '百済' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 10 , 'content' => '百済' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 10 , 'content' => '高句麗' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 10 , 'content' => '隋' , 'is_answer' => 0 ],
    		[ 'unit_id' => 1 , 'question_id' => 10 , 'content' => '新羅' , 'is_answer' => 1 ],
		]);
    }
}
