<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('phone')->unique();

            $table->string('adress')->nullable();
            $table->string('nid')->unique()->nullable();
            $table->string('dob')->nullable();
            $table->string('agent_employee_id')->unique()->nullable();
            $table->string('company_id')->nullable();
            $table->string('agent_id')->nullable();


            $table->string('role_1')->default('f');
            // $table->string('role_2')->nullable();

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
        Schema::dropIfExists('users');
    }
}
