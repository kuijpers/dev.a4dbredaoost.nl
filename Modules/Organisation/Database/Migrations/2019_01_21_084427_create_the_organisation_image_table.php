<?php

//	Because of the length the organisation is shortened to org.

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTheOrganisationImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('the_organisation_image', function (Blueprint $table) {
            $table->increments('id');

			$table->string('name');

			$table->string('slug')->unique();

			$table->string('description');

			$table->text('content');

			$table->string('photographer');

			$table->unsignedInteger('the_organisations_id');

			$table->softDeletes();

            $table->timestamps();

			$table->foreign('the_organisations_id')->references('id')->on('the_organisations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('the_organisation_image');
    }
}
