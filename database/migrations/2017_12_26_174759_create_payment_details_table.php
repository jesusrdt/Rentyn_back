<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_details', function (Blueprint $table) {
            $table->increments('id');
			$table->integer("user_id")->unsigned();
			$table->integer("product_bill_id")->unsigned();
			$table->integer("payment_method_id")->unsigned();
			$table->float("value");
			$table->date("date");
            $table->timestamps();
			
			$table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');
            $table->foreign("product_bill_id")->references("id")->on("product_bills")->onDelete('cascade');
            $table->foreign("payment_method_id")->references("id")->on("payment_methods")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_details');
    }
}
