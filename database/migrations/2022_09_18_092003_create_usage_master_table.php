<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsageMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usage_master', function (Blueprint $table) {
            $table->increments('id');
            $table->string('material_id'); 
            $table->string('no_of_units'); 
            $table->string('branch_id'); 
            $table->string('Requiredfor_id'); 
            $table->string('Purpose_id'); 
            $table->string('customer_id'); 
            $table->string('engineer_id'); 
            $table->string('responsible_person_id'); 
            $table->string('Receiptno'); 
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
        Schema::dropIfExists('usage_master');
    }
}
