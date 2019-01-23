<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditsCreditsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credits_credits_categories', function (Blueprint $table) {
            $table->increments('id');

			$table->unsignedInteger('credits_id');

			$table->unsignedInteger('credits_categorie_id');

			$table->softDeletes();

			$table->timestamps();

			$table->foreign('credits_id')->references('id')->on('credits')->onDelete('cascade');
			$table->foreign('credits_categorie_id')->references('id')->on('credits_categorie')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credits_credits_categories');
    }
}
