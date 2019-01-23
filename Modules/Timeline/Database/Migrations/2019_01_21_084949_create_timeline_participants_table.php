<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimelineParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timeline_participants', function (Blueprint $table) {
            $table->increments('id');

			$table->unsignedInteger('timeline_id');
			$table->unsignedInteger('walking_distance_id');

			$table->integer('participants');

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
        Schema::dropIfExists('timeline_participants');
    }
}
