<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatereceivedMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('received_master', function (Blueprint $table) {
            $table->increments('id');
            $table->string('material_id'); 
            $table->string('qty'); 
            $table->string('unit_id'); 
            $table->string('received_on'); 
            $table->string('rate'); 
            $table->string('amount'); 
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
        Schema::dropIfExists('received_master');
    }
}
