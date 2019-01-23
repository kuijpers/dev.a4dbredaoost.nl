<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimelineImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timeline_image', function (Blueprint $table) {
            $table->increments('id');

			$table->string('name');
			$table->string('slug');
			$table->string('content');

			$table->string('photographer');


            $table->unsignedInteger('timeline_id');

			$table->softDeletes();

			$table->timestamps();

			$table->foreign('timeline_id')->references('id')->on('timeline')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timeline_image');
    }
}
