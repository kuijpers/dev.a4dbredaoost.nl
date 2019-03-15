<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('web_settings', function (Blueprint $table) {
			$table->increments('id');

			$table->string('name');

			$table->string('slug')->unique();

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
		Schema::dropIfExists('web_settings');
    }
}
