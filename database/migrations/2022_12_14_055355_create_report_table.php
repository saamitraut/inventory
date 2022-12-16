<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTable extends Migration
{
    public function up()
    {
        Schema::create('report', function (Blueprint $table) {
        $table->increments('id');
        $table->string('credit'); 
        $table->string('debit'); 
        $table->string('availableStock'); 
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
        Schema::dropIfExists('report');
    }
}
