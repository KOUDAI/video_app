<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\video;
use Faker\Generator as Faker;

$factory->define(video::class, function (Faker $faker) {
    $name = $faker->word();
    // $holiday = ['不定休','月曜定休','年中無休'];
    $price = [ 3000 , 4000 , 5000 ];
    $category = [
        '初心者向け', '中級者向け', '上級者向け', '女性向け', 'キッズ向け', 'j-pop', '洋楽', 'ロック', 'オペラ', '演歌'
    ];
    return [
        'name' => $name,
        // 'name_kana' => $name,
        // 'address' => $faker->address,
        'price' => $price[array_rand($price)],
        'category' => $category[array_rand($category)],
        // 'email' => $email
        // 'note' => 'オンライン講座 ' . rand('可', '不可') . '現金でのお支払いは出来ません。',
        // 'pr_short' => 'あなたの秘めた才能を一緒に開花させましょう！',
        // 'pr_long' => '初心者の方でも安心のレッスン内容！ご要望やレベルにあわせたレッスンを進めながら、講師が丁寧にアドバイス♪',
        // 'img_path' => 'storage/video_image/' . rand(1, 17) . '.jpg',
    ];
});