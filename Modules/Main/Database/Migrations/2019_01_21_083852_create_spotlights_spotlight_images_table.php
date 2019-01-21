<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpotlightsSpotlightImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spotlights_spotlight_images', function (Blueprint $table) {
            $table->increments('id');

			$table->unsignedInteger('spotlight_id');
			$table->unsignedInteger('spotlight_image_id');

			$table->softDeletes();

			$table->timestamps();

			$table->unique(['spotlight_id','spotlight_image_id']);
			$table->foreign('spotlight_id')->references('id')->on('spotlight')->onDelete('cascade');
			$table->foreign('spotlight_image_id')->references('id')->on('spotlight_image')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spotlights_spotlight_images');
    }
}
