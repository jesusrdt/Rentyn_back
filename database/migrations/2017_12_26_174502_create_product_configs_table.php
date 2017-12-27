<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("product_provider_id")->unsigned();
			$table->date("start_date");
			$table->date("end_date");
			$table->char("status", 1);
            $table->timestamps();
			
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
        Schema::dropIfExists('product_configs');
    }
}
