<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmerIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer_incomes', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('amount');
            $table->integer('cattle_id');
            $table->integer('user_id');
            $table->string('invoice');
            $table->string('earning_category');
            $table->string('comment');
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
        Schema::dropIfExists('farmer_incomes');
    }
}
