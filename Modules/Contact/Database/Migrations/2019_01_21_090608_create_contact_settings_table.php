<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_settings', function (Blueprint $table) {
            $table->increments('id');

			$table->string('description');

			$table->string('contactform_email')->nullable();

			$table->unsignedInteger('boardmembers_id')->nullable();

			$table->string('map_latitude')->nullable();
			$table->string('map_longitude')->nullable();
			$table->integer('zoom')->nullable();

			$table->boolean('active')->default(1);


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
        Schema::dropIfExists('contact_settings');
    }
}
