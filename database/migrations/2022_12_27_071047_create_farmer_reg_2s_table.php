<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmerReg2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer_reg_2s', function (Blueprint $table) {
            $table->id();
            $table->string('farmname')->nullable();
            $table->string('farmername');
            $table->string('division');
            $table->string('district');
            $table->string('thana');
            $table->string('post');
            $table->string('nid');
            $table->string('contact');

            $table->string('cattle_name');
            $table->string('cattle_color');
            $table->string('cattle_breed');
            $table->string('age');
            $table->string('weight');
            $table->string('gender');
            $table->string('cattle_unique_id');

            $table->string('face_of_cow');
            $table->string('left_side');
            $table->string('right_side');
            $table->string('special_mark')->nullable();
            $table->string('cow_with_owner');

            $table->string('health')->default('f');
            $table->string('price')->default('f');
            $table->string('pregnant')->default('not_pregnant');
            $table->string('calve')->default('not_calve');
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
        Schema::dropIfExists('farmer_reg_2s');
    }
}
