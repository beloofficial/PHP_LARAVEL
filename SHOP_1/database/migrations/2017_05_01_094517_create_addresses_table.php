<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('provinces', function (Blueprint $table) {
             $table->char('id', 2)->primary();
             $table->string('name',255);
             $table->timestamps();
         });

         Schema::create('regencies', function (Blueprint $table) {
             $table->char('id', 4)->primary();
             $table->char('province_id', 2);
             $table->string('name',255);

             $table->foreign('province_id')->references('id')->on('provinces');
             $table->timestamps();
         });

         Schema::create('addresses', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('user_id')->unsigned();
             $table->string('name',255);
             $table->string('detail',255);
             $table->char('regency_id', 4);
             $table->string('phone',255);

             $table->foreign('regency_id')->references('id')->on('regencies');
             $table->foreign('user_id')->references('id')->on('users');
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
         Schema::dropIfExists('addresses');
         Schema::dropIfExists('regencies');
         Schema::dropIfExists('provinces');
     }
}
