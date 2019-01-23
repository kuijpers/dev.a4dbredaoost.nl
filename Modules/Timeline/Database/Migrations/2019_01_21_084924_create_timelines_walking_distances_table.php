<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimelinesWalkingDistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timelines_walking_distances', function (Blueprint $table) {
            $table->increments('id');

			$table->unsignedInteger('timeline_id');
			$table->unsignedInteger('walking_distance_id');

			$table->softDeletes();

            $table->timestamps();

			$table->foreign('timeline_id')->references('id')->on('timeline')->onDelete('cascade');
			$table->foreign('walking_distance_id')->references('id')->on('walking_distance')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timelines_walking_distances');
    }
}
