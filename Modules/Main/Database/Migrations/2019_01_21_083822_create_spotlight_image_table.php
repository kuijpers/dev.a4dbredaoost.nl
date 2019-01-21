<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpotlightImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spotlight_image', function (Blueprint $table) {
            $table->increments('id');

			$table->string('name');

			$table->string('slug')->unique();

			$table->string('description');

			$table->text('content');

			$table->string('photographer');

			$table->unsignedInteger('spotlight_id');

			$table->softDeletes();

            $table->timestamps();


			$table->foreign('spotlight_id')->references('id')->on('spotlight')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spotlight_image');
    }
}
