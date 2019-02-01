<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar', function (Blueprint $table) {
            $table->increments('id');

			$table->string('title');

			$table->string('slug')->unique();

			$table->string('description');

			$table->text('content');

			$table->boolean('all_day')->default(1);

			$table->datetime('start');

			$table->datetime('end')->nullable();

			$table->string('color')->nullable();

			$table->string('author')->nullable();
			$table->string('author_group')->nullable();
			$table->boolean('author_approve')->default(0);

			$table->boolean('show_main')->default(1);

			$table->string('publisher')->nullable();
			$table->string('publisher_group')->nullable();
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
        Schema::dropIfExists('calendar');
    }
}
