<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockTable extends Migration
{
    public function up()
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('material_id'); 
            $table->string('credit'); 
             $table->timestamp('credited_on')->nullable();
            $table->string('debit'); 
            $table->timestamp('debited_on')->nullable();
            $table->string('status')->default(0);
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
        Schema::dropIfExists('stock');
    }
}
