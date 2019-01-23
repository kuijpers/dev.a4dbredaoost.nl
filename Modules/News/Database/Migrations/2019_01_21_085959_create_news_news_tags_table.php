<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsNewsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_news_tags', function (Blueprint $table) {
            $table->increments('id');

			$table->unsignedInteger('news_id');

			$table->unsignedInteger('news_tag_id');

			$table->softDeletes();

            $table->timestamps();

			$table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
			$table->foreign('news_tag_id')->references('id')->on('news_tag')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_news_tags');
    }
}
