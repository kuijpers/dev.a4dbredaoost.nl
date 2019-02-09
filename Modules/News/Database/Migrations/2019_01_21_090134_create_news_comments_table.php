<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_comments', function (Blueprint $table) {
            $table->increments('id');

			$table->integer('comments_id');

			$table->unsignedInteger('news_id')->nullable();

			$table->text('comment');

			$table->string('author');
			$table->string('author_group')->default('User');

			$table->string('publisher')->nullable();
			$table->string('publisher_group')->default('Boardmember');
			$table->boolean('publisher_approve')->default(0);

			$table->softDeletes();

            $table->timestamps();

			$table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_comments');
    }
}
