<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListTable extends Migration
{
    public function up()
    {
        Schema::create('list', function (Blueprint $table) {            
            $table->increments('list_id');
            $table->string('name')->nullable(); 
            $table->string('image')->nullable(); 
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
        Schema::dropIfExists('list');
    }
}
