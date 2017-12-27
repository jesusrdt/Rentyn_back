<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_gallery', function (Blueprint $table) {
            $table->increments('id');
			$table->integer("product_id")->unsigned();
			$table->string('imagen');
			$table->char('status', 1);
            $table->timestamps();
			
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
        Schema::dropIfExists('product_gallery');
    }
}
