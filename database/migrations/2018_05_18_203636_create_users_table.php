<?php

use Illuminate\Support\Facades\Schema;
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
            $table->increments('user_id');
            $table->string('username');
            $table->string('email');
            $table->string('password')->nullable();
            $table->string('title')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('day')->unsigned()->nullable();
            $table->string('month')->nullable();
            $table->integer('year')->unsigned()->nullable();
            $table->string('nationality')->nullable();
            $table->string('address')->nullable();
            $table->integer('postcode')->unsigned()->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->integer('phone_number')->unsigned()->nullable();
            $table->integer('mobile_number')->unsigned()->nullable();
            $table->integer('passport_number')->unsigned()->nullable();
            $table->string('passport_country')->nullable();
            $table->integer('passport_day')->unsigned()->nullable();
            $table->string('passport_month')->nullable();
            $table->integer('passport_year')->unsigned()->nullable();
            $table->integer('user_role_idFk')->unsigned();
            $table->string('forgot_password_token')->nullable();
            $table->string('referal_code')->nullable();
            $table->integer('referal_count')->unsigned()->default(0);
            $table->enum('first_login_status',array(1,0))->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users', function($table) {
            $table->foreign('user_role_idFk')->references('role_id')->on('user_roles')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
