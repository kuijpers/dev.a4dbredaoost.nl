<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDidyouknowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('didyouknow', function (Blueprint $table) {
            $table->increments('id');

            $table->string('slug')->unique();

			$table->string('question');
			$table->text('answer');

			$table->boolean('draft')->default(1);

			$table->string('author');
			$table->string('author_group');
			$table->boolean('author_approve')->default(0);

			$table->string('editor')->nullable();
			$table->string('editor_group')->nullable();
			$table->boolean('editor_approve')->default(0);

			$table->string('publisher')->nullable();
			$table->string('publisher_group')->nullable();
			$table->boolean('publisher_approve')->default(0);

			$table->datetime('publish_date_start')->nullable();
			$table->datetime('publish_date_end')->nullable();

			$table->softDeletes();

            $table->timestamps();
        });

		Schema::create('didyouknow_information', function (Blueprint $table) {
			$table->increments('id');

			$table->string('slug')->unique();

			$table->string('title');
			$table->text('body');

			$table->boolean('draft')->default(1);

			$table->string('author');
			$table->string('author_group');
			$table->boolean('author_approve')->default(0);

			$table->string('editor')->nullable();
			$table->string('editor_group')->nullable();
			$table->boolean('editor_approve')->default(0);

			$table->string('publisher')->nullable();
			$table->string('publisher_group')->nullable();
			$table->boolean('publisher_approve')->default(0);

			$table->datetime('publish_date_start')->nullable();
			$table->datetime('publish_date_end')->nullable();

			$table->softDeletes();

			$table->timestamps();
		});


		Schema::create('didyouknow_settings', function (Blueprint $table) {
			$table->increments('id');

			$table->string('slug')->unique();

			$table->string('name');
			$table->text('description');
			$table->boolean('value_bool')->nullable();
			$table->text('value_text')->nullable();

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
        Schema::dropIfExists('didyouknow');
        Schema::dropIfExists('didyouknow_information');
        Schema::dropIfExists('didyouknow_settings');
    }
}
