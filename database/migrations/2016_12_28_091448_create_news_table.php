<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *ㄉ
     * @return void
     */
    public function up()
    {
       Schema::create('newsContent', function (Blueprint $table) {
            $table->increments('postid')->unique();
            $table->integer('hasCover');
            $table->integer('hasHead');
            $table->integer('replyCoount');
            $table->integer('hasImg');
            $table->string('docid');
            $table->string('title');
            $table->integer('order');
            $table->integer('priority');
            $table->timestamps('lmodify');
            $table->integer('boardid')->unique();
            $table->integer('ads');
            $table->string('photoset');
            $table->integer('imgsum');
            $table->string('topic_background');
            $table->string('template');
            $table->integer('votecount');
            $table->string('skipID');
            $table->integer('alias');
            $table->integer('skiptype');
            $table->string('cid');
            $table->integer('hasAD');
            $table->integer('imgextra');
            $table->integer('skiptype');
            $table->string('source');
            $table->string('ename');
            $table->string('tname');
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
