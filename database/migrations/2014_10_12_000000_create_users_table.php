<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('last_name',50);
            $table->string('first_name',50);
            $table->string('designation');
            $table->string('primary_contact',11);
            $table->string('secondary_contact',11)->nullable();
            $table->string('email');
            $table->string('username',50);
            $table->string('password');
            $table->date('date_of_birth');
            $table->date('date_of_hired');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
