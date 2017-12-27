<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOrdensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_ordens', function (Blueprint $table) {
            $table->increments('id');
			$table->integer("product_id")->unsigned();
			$table->integer("product_bill_id")->unsigned();
			$table->float("value");
			$table->float("value_extra");
			$table->char("transportation", 1);
			$table->char("operator", 1);
			$table->date("start_date");
			$table->date("end_date");
			$table->char("status", 1);
            $table->timestamps();
			
			$table->foreign("product_id")->references("id")->on("products")->onDelete('cascade');
			$table->foreign("product_bill_id")->references("id")->on("product_bills")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_ordens');
    }
}
