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
        Schema::create('wp_clientauth', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable(); // VARCHAR(100) (name is nullable as it's not NOT NULL in your SQL)
            $table->string('email', 255)->unique(); // VARCHAR(255) NOT NULL and unique constraint
            $table->string('password', 255); // VARCHAR(255) NOT NULL
            $table->string('profile')->nullable();
            $table->string('Access')->default('1');
            $table->timestamps();
            $table->string('ip_address');
            $table->string('country_code');
            $table->string('state');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wp_clientauth');
    }
};
