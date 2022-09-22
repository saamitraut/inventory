<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReturnMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('return_master', function (Blueprint $table) {
            $table->increments('id');
            $table->string('material_id'); 
            $table->string('qty'); 
            $table->string('unit_id'); 
            $table->string('return_date'); 
            $table->string('rate'); 
            $table->string('amount')->default('0'); 
            $table->string('status')->default('0');
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
        Schema::dropIfExists('return_master');
    }
}
