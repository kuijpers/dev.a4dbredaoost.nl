<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactCategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_categorie', function (Blueprint $table) {
            $table->increments('id');

			$table->string('name');
			$table->string('slug');

			$table->string('description')->nullable();

			$table->integer('web_order')->unique()->nullable();

			// active
			$table->boolean('publisher_approve')->default(0);

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
        Schema::dropIfExists('contact_categorie');
    }
}
