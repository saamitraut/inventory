<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInwardMasterTable extends Migration
{
    public function up()
    {
        Schema::create('inward_master', function (Blueprint $table) {
            $table->increments('id');
            $table->string('material_id')->nullable(); 
            $table->string('material_description')->nullable(); 
            $table->string('supplier')->nullable();
            $table->string('received')->nullable(); 
            // $table->string('unit')->nullable(); 
            $table->string('return')->nullable(); 
            $table->string('rate')->nullable(); 
            // $table->string('amount')->nullable(); 
            $table->date('receivedon')->nullable(); 
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
        Schema::dropIfExists('inward_master');
    }
}
