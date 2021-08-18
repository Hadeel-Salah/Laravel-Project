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
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('phone');
            $table->date('hire_date');
            $table->string('email')->unique();
            $table->string('password');
            $table->double('salary');
            $table->double('commisson_pct');

            $table->unsignedInteger('manager_id');
            $table->unsignedInteger('job_id');
            $table->unsignedInteger('department_id');   
   
            $table->foreign('manager_id')->references('id')->on('users');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('job_id')->references('id')->on('jobs');


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
        Schema::dropIfExists('users');
    }
}
