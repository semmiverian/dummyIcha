<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('product_id');
            $table->enum('status',['booked','pending'])->default('pending');
            $table->timestamps();

            // $table->foreign('user_id')
            //       ->references('id')
            //       ->on('users');
            // $table->foreign('product_id')
            //       ->references('id')
            //       ->on('products');
            // $table->foreign('company_id')
            //       ->references('id')
            //       ->on('companies');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('carts');
    }
}
