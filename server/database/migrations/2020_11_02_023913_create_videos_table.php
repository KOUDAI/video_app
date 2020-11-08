<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')
                ->unsigned()
                ->foreign('user_id')              // user_idに外部キーを設定する
                ->references('id')->on('users')    // categoriesテーブルのidカラムを外部キーにする
                ->onDelete('cascade');                 // 参照先の削除を禁止する
            $table->string('name');
            $table->text('description');
            $table->integer('price');
            $table->string('email');
            $table->text('image_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
