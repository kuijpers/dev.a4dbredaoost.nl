<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardmembersRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('boardmembers_roles', function (Blueprint $table) {
			$table->unsignedInteger('boardmembers_id');
			$table->unsignedInteger('role_id');

			$table->softDeletes();

			$table->timestamps();

			$table->unique(['boardmembers_id','role_id']);

			$table->foreign('boardmembers_id')->references('id')->on('boardmembers')->onDelete('cascade');
			$table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//		Schema::dropIfExists('boardmembers_roles');
    }
}
