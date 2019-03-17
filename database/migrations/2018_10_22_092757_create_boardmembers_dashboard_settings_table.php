<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardmembersDashboardSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boardmembers_dashboard_settings', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('boardmembers_id');
			$table->string('boardmembers_theme')->default('light');
			$table->string('boardmembers_language')->default('nl');

			$table->softDeletes();

			$table->timestamps();

			$table->foreign('boardmembers_id')->references('id')->on('boardmembers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boardmembers_dashboard_settings');
    }
}
