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
    		[ 'category_id' => 1 , 'unit_id' => 2 , 'text' => '相沢忠洋が発見した、群馬県にある旧石器時代の遺跡を何というか。' , 'image_path' => '' , 'commentary' => '三内丸山遺跡は青森県にある縄文時代の遺跡。登呂遺跡は静岡県、吉野ヶ里遺跡は佐賀県にあり、ともに弥生時代の遺跡。' ],
    		[ 'category_id' => 1 , 'unit_id' => 2 , 'text' => '縄文時代に使われていたものを一つ選びなさい。' , 'image_path' => '' , 'commentary' => '土偶は収穫祈願や呪術などに用いられていたと考えられている。青銅器や鉄器は稲作の伝来とともに弥生時代に伝えられた。米を保管していた高床式倉庫はねずみ返しなどの工夫が見られた。' ],
    		[ 'category_id' => 1 , 'unit_id' => 2 , 'text' => '縄文時代の人々が食べていたものとして誤っているものを一つ選びなさい。' , 'image_path' => '' , 'commentary' => '氷期が終わるとナウマンゾウなどの大型動物は減り、シカやイノシシなどの小型動物を狩るようになった。また、魚や貝、木の実などをとって食べた。' ],
    		[ 'category_id' => 1 , 'unit_id' => 2 , 'text' => '邪馬台国について述べた文として誤っているものを一つ選びなさい。' , 'image_path' => '' , 'commentary' => '邪馬台国についての記述があるのは「魏志倭人伝」。「後漢書東夷伝」には1世紀半ばごろ、倭の奴国の王が漢に使者を送り、金印を与えられたという記述がある。' ],
    		[ 'category_id' => 1 , 'unit_id' => 2 , 'text' => '大阪府にある日本で最も大きい前方後円墳はどれか。' , 'image_path' => '' , 'commentary' => '稲荷山古墳は埼玉県にあり、ワカタケル大王の名前が刻まれた鉄剣が出土した。五色塚古墳は兵庫県、江田船山古墳は熊本県にある。' ],
    		[ 'category_id' => 1 , 'unit_id' => 2 , 'text' => '古墳から出土したものとして誤っているものを一つ選びなさい。' , 'image_path' => '' , 'commentary' => '石包丁は稲の穂を摘んで収穫する道具。' ],
    		[ 'category_id' => 1 , 'unit_id' => 2 , 'text' => '渡来人が日本に伝えたものとして誤っているものを一つ選びなさい。' , 'image_path' => '' , 'commentary' => '渡来人はこの他にも、金属加工の技術や絹織物などを伝えた。' ],
    		[ 'category_id' => 1 , 'unit_id' => 2 , 'text' => '江戸時代に志賀島で発見された金印を与えた中国の国はどれか。' , 'image_path' => '' , 'commentary' => '金印には「漢委奴国王」という文字が刻まれていた。' ],
    		[ 'category_id' => 1 , 'unit_id' => 2 , 'text' => '広開土王碑には倭の軍とどこの国が戦ったことが記されているか。' , 'image_path' => '' , 'commentary' => '広開土王は高句麗の王。王が倭と戦い、勝利したことが記されている。' ],
    		[ 'category_id' => 1 , 'unit_id' => 2 , 'text' => '稲作を日本に伝えた人々は、どの地域から来たのか。一つ選びなさい。' , 'image_path' => '' , 'commentary' => '稲作を日本に伝えた渡来人は、朝鮮半島から日本に移り住んだ。' ],
        ]);
    }
}
