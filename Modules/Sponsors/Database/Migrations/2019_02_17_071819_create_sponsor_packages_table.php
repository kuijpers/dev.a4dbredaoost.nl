<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsor_packages', function (Blueprint $table) {
            $table->increments('id');

			$table->string('name');

			$table->string('slug')->unique();

			$table->string('description');


			$table->boolean('title_field');

			$table->boolean('text_field');

			$table->boolean('image_field');

			$table->boolean('footer_field');

			$table->boolean('linked_title');

			$table->boolean('linked_footer');

			$table->boolean('linked_image');

			$table->boolean('own_logo');

			$table->integer('max_text_char');


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
        Schema::dropIfExists('sponsor_packages');
    }
}
