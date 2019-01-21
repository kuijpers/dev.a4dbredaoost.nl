<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTyParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ty_participants', function (Blueprint $table) {
            $table->increments('id');

			$table->string('title');

			$table->string('slug')->unique();

			$table->string('description');

			$table->text('content');

			$table->integer('web_order')->unique();

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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ty_participants');
    }
}
