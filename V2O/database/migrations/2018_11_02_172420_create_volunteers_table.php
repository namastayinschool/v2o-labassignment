<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->string('firstName');
			$table->string('lastName');
			$table->string('homeAddress');
			$table->string('cellNumber');
			$table->string('homeNumber');
			$table->string('idNumber');
			$table->string('examNumber');
			$table->string('emailAddress');
			$table->string('password');
			$table->enum('interest1',['Animal Care','Senior Citizen Care','Child Care','Sports', 'Beach Cleanup', 'Teaching']);
			$table->enum('interest2',['Animal Care','Senior Citizen Care','Child Care','Sports', 'Beach Cleanup', 'Teaching']);
			$table->enum('interest3',['Animal Care','Senior Citizen Care','Child Care','Sports', 'Beach Cleanup', 'Teaching']);
			$table->enum('interest4',['Animal Care','Senior Citizen Care','Child Care','Sports', 'Beach Cleanup', 'Teaching']);
			$table->enum('interest5',['Animal Care','Senior Citizen Care','Child Care','Sports', 'Beach Cleanup', 'Teaching']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volonteers');
    }
}
