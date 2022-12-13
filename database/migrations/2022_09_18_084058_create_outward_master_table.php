<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutwardMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outward_master', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('material_id'); 
            $table->string('material_description'); 
            $table->string('opening_stock')->nullable(); 
            $table->string('issued'); 
            $table->string('closing_stock')->nullable();  
            $table->string('unit_id')->nullable();  
            $table->string('status')->default('0');
            $table->timestamp('issuedon');

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
        Schema::dropIfExists('outward_master');
    }
}
