<?php


use App\Transaction;
use Illuminate\Support\Facades\Schema;
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
          $table->increments('id');
          $table->integer('invoice');
          $table->tinyInteger('status')->default(Transaction::STATUS_PENDING);
          $table->string('transaction_number');
          $table->string('transaction_time');
          $table->float('amount');
          $table->string('short_code');
          $table->string('bill_reference');
          $table->string('mobile_number');
          $table->string('payer_first_name')->nullable();
          $table->string('payer_middle_name')->nullable();
          $table->string('payer_last_name')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
