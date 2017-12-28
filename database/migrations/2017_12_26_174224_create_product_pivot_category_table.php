<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPivotCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('product_pivot_category', function (Blueprint $table) {
            $table->increments('id');
			$table->integer("product_id")->unsigned();
			$table->integer("category_id")->unsigned();
			$table->char("status", 1);
            $table->timestamps();
			
			$table->foreign("product_id")->references("id")->on("products")->onDelete('cascade');
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
        Schema::dropIfExists('product_pivot_category');
    }
}
