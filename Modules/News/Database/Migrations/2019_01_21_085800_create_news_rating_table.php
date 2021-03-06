<?php

	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class CreateNewsRatingTable extends Migration
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('news_rating', function (Blueprint $table) {

				$table->increments('id');

				$table->string('news_id');

				$table->string('user_id')->unique();

				$table->integer('rating');

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
			Schema::dropIfExists('news_rating');
		}
	}
