<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
			$table->integer("category_id")->unsigned();
			$table->string('title', 50)->nullable();
			$table->string('characteristic', 254)->nullable();
			$table->string('desccription', 254)->nullable();
			$table->string('imagen')->nullable();
			$table->float("value_day");
			$table->float("value_extra");
			$table->float("charge_transportation");
			$table->float("charge_operator");
			$table->float("charge_distance");
			$table->string("list_date")->nullable();
			$table->char("status", 1);
            $table->timestamps();
			
			$table->foreign("category_id")->references("id")->on("categories")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
