<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdermatersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordermaters', function (Blueprint $table) {
            $table->string('ordermater_id');
            $table->string('ordermater_date');
            $table->string('ordermater_demand');
            $table->string('ordermater_shipped');
            $table->string('ordermater_shipmentnumber');
            $table->string('cust_id');
            $table->string('ordermater_address');
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
        Schema::dropIfExists('ordermaters');
    }
}
