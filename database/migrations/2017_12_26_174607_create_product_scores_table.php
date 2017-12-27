<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_scores', function (Blueprint $table) {
            $table->increments('id');
			$table->integer("user_id")->unsigned();
            $table->integer("product_provider_id")->unsigned();
            $table->integer("value")->unsigned();
            $table->timestamps();
			
			$table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');
            $table->foreign("product_provider_id")->references("id")->on("product_providers")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_scores');
    }
}
