<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fb_id')->index();
            $table->longText('link');
            $table->longText('desc')->nullable();
            $table->longText('title')->nullable();
            $table->integer('approved')->default(0);
            $table->integer('category_id')->nullable();
            $table->longText('dh_desc')->nullable();
            $table->longText('dh_title')->nullable();
            $table->longText('en_desc')->nullable();
            $table->longText('en_title')->nullable();
            $table->bigInteger('likes')->nullable();
            $table->dateTime('fb_created')->nullable();
            $table->bigInteger('sort')->unique()->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('store_videos');
    }
}
