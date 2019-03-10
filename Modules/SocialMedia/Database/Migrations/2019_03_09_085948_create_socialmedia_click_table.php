<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialmediaClickTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socialmedia_click', function (Blueprint $table) {
			$table->increments('id');

			$table->unsignedInteger('socialmedia_id');

			$table->string('ip');

			$table->datetime('click_datetime');

			$table->softDeletes();

			$table->timestamps();


			$table->foreign('socialmedia_id')->references('id')->on('socialmedia')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socialmedia_click');
    }
}
