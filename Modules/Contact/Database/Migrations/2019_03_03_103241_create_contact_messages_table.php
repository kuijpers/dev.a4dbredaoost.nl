<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->increments('id');


			$table->string('senders_name');

			$table->string('senders_email');

			$table->ipAddress('senders_ip');

			$table->unsignedInteger('c_categorie_id');
			$table->foreign('c_categorie_id')->references('id')->on('contact_categorie')->onDelete('cascade');

			$table->text('senders_question');

			$table->string('web_id')->unique()->nullable();

			$table->dateTime('send_on');

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
        Schema::dropIfExists('contact_messages');
    }
}
