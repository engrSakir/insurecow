<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('image')->nullable();
            $table->longText('present_address');
            $table->longText('permanent_address');
            $table->string('dob');
            $table->string('nid');
            $table->string('father_name');
            $table->string('mother_name');

            $table->string('source_of_income');
            $table->string('bank_no');
            $table->string('farm_address');
            $table->string('zila');
            $table->string('thana');
            $table->string('union');
            $table->string('village');
            $table->string('city');
            $table->string('district');
            $table->string('zip_code');
            $table->string('country');
            $table->string('loan_amount');
            $table->string('no_of_livestock')->nullable();
            $table->string('type_of_livestock');
            $table->string('sum_insured')->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('farmer_profiles');
    }
}
