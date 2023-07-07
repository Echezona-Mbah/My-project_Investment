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

            $table->increments('id');
            $table->string('name', 50)->nullable();
            $table->string('username', 50)->nullable();
            $table->string('email', 50)->unique();
            $table->string('reference');
            $table->string('referral_id', 50)->default('Null');
             $table->string('typeOfUser')->default('user');
            $table->string('password');
            $table->timestamps();
            // $table->id();
            // $table->string('name');
            // $table->string('subaccount_code')->unique();
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
            // $table->timestamps();
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
