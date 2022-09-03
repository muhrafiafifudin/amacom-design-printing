<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('users_id');
            $table->string('products_images');
            $table->string('phone_number');
            $table->integer('products_id');
            $table->integer('products_qty');
            $table->decimal('total', 15, 2);
            $table->string('order_number');
            $table->tinyInteger('process')->default(0)->comment('0 = Order, 1 = Process, 2 = Finish');
            $table->string('note')->nullable();
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
