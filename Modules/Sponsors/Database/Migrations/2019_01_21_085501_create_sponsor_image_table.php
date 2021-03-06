<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsor_image', function (Blueprint $table) {
            $table->increments('id');

			$table->string('name');

			$table->string('slug')->unique();

			$table->string('description');

			$table->text('content');

			$table->string('photographer');

			$table->unsignedInteger('sponsor_id');

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
        Schema::dropIfExists('sponsor_image');
    }
}
