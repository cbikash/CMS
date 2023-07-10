<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('title');
            $table->string('coverImage')->nullable(true);
            $table->longText('description')->nullable(true);
            $table->string('slug')->unique();
            $table->integer('deleted')->default('0');
            $table->float('price')->nullable(true);
            $table->float('discountPrice')->nullable(true);
            $table->boolean('isDiscount')->default(false);
            $table->timestamps();
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
