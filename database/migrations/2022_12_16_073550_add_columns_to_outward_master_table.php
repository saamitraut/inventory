<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToOutwardMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('outward_master', function (Blueprint $table) {
            //
            $table->integer('branch_id');
             $table->integer('required_for');
             $table->integer('purpose');
             $table->string('aa');
             $table->string('customer_name');
             $table->string('mobile');
             $table->string('area');
             $table->string('issued_to_staff');
             $table->string('responsible_person');
             $table->string('receipt_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('outward_master', function (Blueprint $table) {
            $table->dropColumn('branch_id');
             $table->dropColumn('required_for');
             $table->dropColumn('purpose');
             $table->dropColumn('aa');
             $table->dropColumn('customer_name');
             $table->dropColumn('mobile');
             $table->dropColumn('area');
             $table->dropColumn('issued_to_staff');
             $table->dropColumn('responsible_person');
             $table->dropColumn('receipt_no');
        });
    }
}
