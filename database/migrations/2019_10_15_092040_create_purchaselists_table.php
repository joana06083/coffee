<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaselistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchaselists', function (Blueprint $table) {
            $table->string('pur_id');
            $table->string('pro_id');
            $table->string('prime_costs');
            $table->string('purlist_amount');
            $table->string('prime_unit');
            $table->float('purlist_discount');
            $table->string('purlist_total');
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
        Schema::dropIfExists('purchaselists');
    }
}
