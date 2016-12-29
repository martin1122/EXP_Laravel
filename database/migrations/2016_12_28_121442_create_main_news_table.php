<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('main_news', function (Blueprint $table) {
            $table->increments('postid')->unique();
            $table->integer('hasCover')->nullable();
            $table->integer('hasHead')->nullable();
            $table->integer('replyCoount')->nullable();
            $table->integer('hasImg')->nullable();
            $table->string('docid')->nullable();
            $table->string('title')->nullable();
            $table->longText('content')->nullable();
            $table->integer('order')->nullable();
            $table->integer('priority')->nullable();
            $table->timestamps();
            $table->integer('boardid')->unique()->nullable();
            $table->integer('ads')->nullable();
            $table->string('photoset')->nullable();
            $table->integer('imgsum')->nullable();
            $table->string('topic_background')->nullable();
            $table->string('template')->nullable();
            $table->integer('votecount')->nullable();
            $table->string('skipID')->nullable();
            $table->integer('alias')->nullable();
            $table->integer('skiptype')->nullable();
            $table->string('cid')->nullable()->nullable();
            $table->integer('hasAD')->nullable();
            $table->integer('imgextra')->nullable();
            $table->string('source')->nullable();
            $table->string('ename')->nullable();
            $table->string('tname')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
