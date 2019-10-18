<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->bigIncrements('em_id');
            $table->string('em_account');
            $table->string('em_password');
            $table->string('remember_token', 100)->nullable();
            $table->string('d_name');
            $table->string('em_name');
            $table->string('em_email');
            $table->string('em_tel');
            $table->string('em_address');
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
        Schema::dropIfExists('users');
    }
}
