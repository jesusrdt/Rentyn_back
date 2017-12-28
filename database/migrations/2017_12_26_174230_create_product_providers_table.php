<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_providers', function (Blueprint $table) {
            $table->increments('id');
			$table->integer("user_id")->unsigned();
			$table->integer("product_id")->unsigned();
			$table->float("value_day");
			$table->float("value_extra");
			$table->float("charge_transportation");
			$table->float("charge_operator");
			$table->float("charge_distance");
			$table->string("list_date")->nullable();
			$table->char("status", 1);
            $table->timestamps();
			
			$table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');
			$table->foreign("product_id")->references("id")->on("products")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_providers');
    }
}
