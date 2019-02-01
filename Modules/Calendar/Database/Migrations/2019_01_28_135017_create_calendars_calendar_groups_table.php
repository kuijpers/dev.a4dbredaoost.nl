<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarsCalendarGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_calendar_group', function (Blueprint $table) {
				$table->increments('id');

				$table->unsignedInteger('calendar_id');

				$table->unsignedInteger('calendar_group_id');

				$table->softDeletes();

				$table->timestamps();

				$table->foreign('calendar_id')->references('id')->on('calendar')->onDelete('cascade');
				$table->foreign('calendar_group_id')->references('id')->on('calendar_group')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendar_calendar_group');
    }
}
