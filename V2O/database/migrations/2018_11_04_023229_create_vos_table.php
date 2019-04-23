<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
			$table->string('email');
			$table->string('password');
			$table->string('confirm_password');
			$table->string('phone_number');
			$table->string('vo_description');
			$table->string('required_skills');
			$table->string('work_location');
			$table->string('work_hours');
			$table->string('time_period');
			$table->string('stipend');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vos');
    }
}
