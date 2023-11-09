<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            // $table->increments('customer_id');
            // $table->string('customer_username');
            // $table->string('customer_name');
            // $table->string('customer_tel');
            // $table->string('customer_address');
            // $table->string('customer_password');
            // $table->string('customer_email')->unique();
            // $table->date('customer_DOB');
            // $table->string('customer_gender');
            // $table->timestamp('verified_at')->nullable();
            // $table->rememberToken();
            $table->id();
            $table->string('name');
            $table->string('pass');
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
        Schema::dropIfExists('customers');
    }
};
