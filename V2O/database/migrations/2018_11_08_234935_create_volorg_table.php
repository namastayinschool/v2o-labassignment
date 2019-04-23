<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolorgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volorgs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
			$table->string('email');
			$table->string('password');
			//$table->string('confirm_password');
			$table->string('phone_number');
			$table->string('vo_description');
			$table->string('required_skills');
			$table->string('work_location');
			$table->string('work_hours');
			$table->string('time_period');
			$table->string('stipend');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volorgs');
    }
}
