<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialmediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socialmedia', function (Blueprint $table) {
            $table->increments('id');

			$table->string('name');

			$table->string('slug')->unique();

			$table->string('description')->nullable();

			$table->string('direct_link')->nullable();

			$table->string('img')->nullable();
			$table->string('fa_class')->nullable();

			$table->string('username')->nullable();
			$table->text('secret')->nullable();


			$table->string('email_owner')->nullable();


			$table->integer('web_order')->unique()->nullable();


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
        Schema::dropIfExists('socialmedia');
    }
}
