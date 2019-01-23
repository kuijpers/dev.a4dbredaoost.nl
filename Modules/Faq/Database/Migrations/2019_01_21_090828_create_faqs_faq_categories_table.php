<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqsFaqCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs_faq_categories', function (Blueprint $table) {
            $table->increments('id');

			$table->unsignedInteger('faq_id');

			$table->unsignedInteger('faq_categorie_id');

			$table->softDeletes();

			$table->timestamps();

			$table->foreign('faq_id')->references('id')->on('faq')->onDelete('cascade');
			$table->foreign('faq_categorie_id')->references('id')->on('faq_categorie')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs_faq_categories');
    }
}
