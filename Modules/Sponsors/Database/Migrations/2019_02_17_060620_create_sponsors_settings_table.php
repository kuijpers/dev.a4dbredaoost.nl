<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorsSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors_settings', function (Blueprint $table) {
			$table->increments('id');

			$table->string('slug')->unique();

			$table->string('name');
			$table->text('description');
			$table->boolean('value_bool')->nullable();
			$table->text('value_text')->nullable();

			$table->softDeletes();

			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sponsors_settings');
    }
}
