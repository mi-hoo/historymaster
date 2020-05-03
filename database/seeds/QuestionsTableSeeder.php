<?php

use Illuminate\Database\Seeder;
use App\Question;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::insert([
    		[ 'category_id' => 1 , 'unit_id' => 1 , 'text' => '約400万年前に現れた最古の人類を何というか。' , 'image_path' => '' , 'commentary' => '北京原人、ジャワ原人は約160〜20万年前に現れ火や言葉を使った。クロマニョン人は約10万年前に現れた現在の人類の直接の祖先。' ],
    		[ 'category_id' => 1 , 'unit_id' => 1 , 'text' => '新人が初めて行ったこととして、当てはまるものを一つ選びなさい。' , 'image_path' => '' , 'commentary' => '言葉や火の使用は原人、木の実や植物の採集は猿人が始めた。' ],
    		[ 'category_id' => 1 , 'unit_id' => 1 , 'text' => 'チグリス、ユーフラテス川流域に栄えた文明を何というか。' , 'image_path' => '' , 'commentary' => 'インダス文明はインダス川流域、エジプト文明はナイル川流域、中国文明は黄河流域に栄えた。' ],
    		[ 'category_id' => 1 , 'unit_id' => 1 , 'text' => 'メソポタミア文明で使用された文字を何というか。' , 'image_path' => '' , 'commentary' => 'くさび形文字はアルファベットの原型となった。甲骨文字は中国文明で使用され、亀の甲羅や牛の骨などに刻まれた。ヒエログリフはエジプト文明で使用された。' ],
    		[ 'category_id' => 1 , 'unit_id' => 1 , 'text' => 'インダス文明に関連するものを一つ選びなさい。' , 'image_path' => '' , 'commentary' => 'ハンムラビ法典と60進法はメソポタミア文明、太陽暦はエジプト文明。' ],
    		[ 'category_id' => 1 , 'unit_id' => 1 , 'text' => 'イエス・キリストが1世紀ごろに開いた宗教を何というか。' , 'image_path' => '' , 'commentary' => 'イスラム教は7世紀ごろにムハンマドが、仏教は紀元前6世紀ごろにシャカが開いた。ユダヤ教は紀元前6世紀ごろ、ヘブライ人が確立した。' ],
    		[ 'category_id' => 1 , 'unit_id' => 1 , 'text' => '紀元前221年に始皇帝が中国を統一し建国した国の名前は何か。' , 'image_path' => '' , 'commentary' => '殷は紀元前1600年ごろに成立。周は紀元前1100年ごろに殷を滅ぼした。漢（前漢）は秦が滅亡した後、紀元前202年にできた。' ],
    		[ 'category_id' => 1 , 'unit_id' => 1 , 'text' => '始皇帝に関連する用語として誤っているものを一つ選びなさい。' , 'image_path' => '' , 'commentary' => '楽浪郡は漢（前漢）の武帝が朝鮮半島に設置した。' ],
    		[ 'category_id' => 1 , 'unit_id' => 1 , 'text' => '紀元前1世紀ごろ、漢の支配を退け朝鮮半島北部に成立した国を何というか。' , 'image_path' => '' , 'commentary' => '新羅と百済は4世紀半ばごろに朝鮮半島南部に建国された。伽耶（加羅）は3世紀から6世紀ごろ朝鮮半島南端にあった小国家群。' ],
    		[ 'category_id' => 1 , 'unit_id' => 1 , 'text' => '6世紀後半に伽耶（加羅）を滅ぼした国はどれか。' , 'image_path' => '' , 'commentary' => '新羅は唐と結んで百済、高句麗も滅ぼした。' ],
        ]);
    }
}
