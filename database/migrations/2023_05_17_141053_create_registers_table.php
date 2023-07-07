<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name', 50)->nullable();
    $table->string('username', 50)->nullable();
    $table->string('email', 50)->unique();
    $table->string('register_id');
    $table->string('referral_id', 50)->default('Null');
     $table->string('typeOfUser')->default('user');
    $table->string('password');
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
        Schema::dropIfExists('registers');
    }
}
