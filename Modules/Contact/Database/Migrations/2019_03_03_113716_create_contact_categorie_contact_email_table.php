<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactCategorieContactEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_categorie_contact_email', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('c_categorie_id');
            $table->foreign('c_categorie_id')->references('id')->on('contact_categorie')->onDelete('cascade');

            $table->unsignedInteger('c_email_id');
			$table->foreign('c_email_id')->references('id')->on('contact_email')->onDelete('cascade');

            $table->boolean('main_email')->default(0);
            $table->boolean('blind_email')->default(0);

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
        Schema::dropIfExists('contact_categorie_contact_email');
    }
}
