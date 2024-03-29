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
            $table->string('name', 128);
            $table->string('slug', 200);
            $table->string('img', 128)->nullable();
            $table->float('price');
            $table->integer('year');
            $table->integer('odometr');
            $table->string('engine', 128);
            $table->string('transmission', 128);
            $table->text('description')->nullable();
            $table->boolean('recommended')->default(0);

            $table->unsignedBigInteger('category_id')->nullable(); // такой же как id в категории
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
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
