<?php

use App\Models\User;
use App\Models\Customer;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            //add foreign key to customer and user
            // $table->unsignedBigInteger('customer_id');
            // $table->unsignedBigInteger('user_id');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Customer::class);

            $table->string('trx_type');
            $table->string('fund_id');
            $table->string('account_id');
            $table->dateTime('order_date');
            $table->double('trx_amount')->nullable;
            $table->double('trx_unit')->nullable;
            $table->dateTime('trx_date');
            $table->string('trx_status');
            $table->timestamps();

            //defining foreign key references
            // $table->foreign('customer_id')->references('id')->on('customers')
            //       -> onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')
            //       -> onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
