<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             // カテゴリーテーブルにデータが入っていなかった場合に実行する。
        if (!DB::table('categories')->first()) {
            DB::table('categories')->insert([
                ['id' => '1', 'name' => '初心者向け'],
                ['id' => '2', 'name' => '中級者向け'],
                ['id' => '3', 'name' => '上級者向け'],
                ['id' => '4', 'name' => '女性向け'],
                ['id' => '5', 'name' => 'キッズ向け'],
                ['id' => '6', 'name' => 'j-pop'],
                ['id' => '7', 'name' => '洋楽'],
                ['id' => '8', 'name' => 'ロック'],
                ['id' => '9', 'name' => 'オペラ'],
                ['id' => '10', 'name' => '演歌'],
            ]);
        }
    }
}
