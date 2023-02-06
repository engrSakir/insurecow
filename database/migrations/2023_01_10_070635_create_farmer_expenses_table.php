<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmerExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer_expenses', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('amount');
            $table->integer('cattle_id');
            $table->string('category');
            $table->string('invoice')->nullable();
            $table->longText('comment');
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
        Schema::dropIfExists('farmer_expenses');
    }
}
