<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->longText('contents');
            $table->string('risk')->nullable();
            $table->string('rate')->nullable();
            $table->string('bdt')->nullable();

            $table->string('net_premium')->nullable();
            $table->string('vat')->nullable();
            $table->string('stamp_duty')->nullable();
            $table->string('total');




            $table->string('signature');
            $table->string('user_id');
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
        Schema::dropIfExists('quotations');
    }
}
