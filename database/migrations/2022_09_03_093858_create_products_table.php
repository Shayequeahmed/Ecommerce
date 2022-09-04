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
            $table->string('code')->unique();
            $table->string('title');
            $table->string('summary');
            $table->text('description');
            $table->integer('price_mp');
            $table->integer('price_sp');
            $table->unsignedBigInteger('sub_category_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');
            $table->tinyInteger('is_returnable')->default(0); // is_returnable => 0 = non-returnable, 1 = returnable
            $table->timestamps();
            $table->index(['code','sub_category_id','category_id','title']);
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('brand_id')->references('id')->on('brands');
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
