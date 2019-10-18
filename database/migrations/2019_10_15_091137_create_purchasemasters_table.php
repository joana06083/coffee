<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasemastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('purchasemasters', function (Blueprint $table) {
            $table->string('pur_id');
            $table->string('pur_date');
            $table->string('pur_demand');
            $table->string('pur_shipped');
            $table->string('pur_shipmentnumber');
            $table->string('sup_id');
            $table->string('pur_address');
            $table->string('em_id');
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
        Schema::dropIfExists('purchasemasters');
    }
}
