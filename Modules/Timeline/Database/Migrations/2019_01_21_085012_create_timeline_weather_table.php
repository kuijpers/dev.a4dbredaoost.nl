<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimelineWeatherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timeline_weather', function (Blueprint $table) {
            $table->increments('id');

			$table->unsignedInteger('timeline_id');

			$table->integer('temperature');

			$table->text('condition');

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
        Schema::dropIfExists('timeline_weather');
    }
}
