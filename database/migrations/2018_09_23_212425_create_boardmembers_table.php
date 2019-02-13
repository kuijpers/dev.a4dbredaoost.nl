<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardmembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boardmembers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
			$table->string('slug')->unique();
            $table->string('email')->unique();
            $table->string('secondary_email')->nullable();
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('postcode')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->default('Nederland');
            $table->string('phone')->nullable();
            $table->string('boardmember_title')->default('member');
            $table->string('group')->default('board');

            $table->date('dob')->nullable();
			$table->string('profile_img')->nullable();

			$table->text('about_me')->nullable(); // IN SEEDER AANVULLEN!!!!!!!!!!!!

			$table->string('show_email')->default(1);
			$table->string('show_sec_email')->default(1);
			$table->string('show_address')->default(1);
			$table->string('show_phone')->default(1);
			$table->string('show_wallet')->default(1);
			$table->string('show_dob')->default(1);
			$table->string('show_img')->default(1);
			$table->string('show_about_me')->default(1);

            $table->rememberToken();

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
        Schema::dropIfExists('boardmembers');
    }
}
