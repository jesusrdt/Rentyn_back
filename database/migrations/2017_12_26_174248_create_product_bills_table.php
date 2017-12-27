<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductbillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_bills', function (Blueprint $table) {
            $table->increments('id');
			$table->integer("user_id")->unsigned();
			$table->float("value_total");
			$table->date("start_date");
			$table->date("end_date");
			$table->char("type", 1);
			$table->char("status", 1);
            $table->timestamps();
			
			$table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_bills');
    }
}
