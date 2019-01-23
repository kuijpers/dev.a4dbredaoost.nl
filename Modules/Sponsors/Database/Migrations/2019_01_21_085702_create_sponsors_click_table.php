<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorsClickTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors_click', function (Blueprint $table) {
            $table->increments('id');

			$table->unsignedInteger('sponsor_id');

			$table->string('ip');

			$table->datetime('click_datetime');

			$table->softDeletes();

			$table->timestamps();


			$table->foreign('sponsor_id')->references('id')->on('sponsor')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sponsors_click');
    }
}
