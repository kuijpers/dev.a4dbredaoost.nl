<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorsSpotlightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors_spotlight', function (Blueprint $table) {
            $table->increments('id');

			$table->unsignedInteger('sponsor_id');

			$table->string('author');
			$table->string('author_group');
			$table->boolean('author_approve')->default(0);

			$table->string('publisher')->nullable();
			$table->string('publisher_group')->nullable();
			$table->boolean('publisher_approve')->default(0);

			$table->datetime('publish_date_start')->nullable();
			$table->datetime('publish_date_end')->nullable();

			$table->boolean('payment_received')->default(0);

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
        Schema::dropIfExists('sponsors_spotlight');
    }
}
