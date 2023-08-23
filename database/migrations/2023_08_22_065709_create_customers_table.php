<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cif_id')->unique();
            $table->string('name')->unique();
            $table->string('idtype1')->nullable();
            $table->string('id1')->nullable();
            $table->string('idtype2')->nullable();
            $table->string('id2')->nullable();
            $table->string('add_line1')->nullable();
            $table->string('add_line2')->nullable();
            $table->string('add_line3')->nullable();
            $table->string('add_line4')->nullable();
            $table->string('add_postcode')->nullable();
            $table->string('add_state')->nullable();
            $table->string('add_country')->nullable();
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
}
