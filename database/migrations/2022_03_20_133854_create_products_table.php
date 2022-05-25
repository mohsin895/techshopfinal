<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->integer('cat_id')->nullable();
            $table->integer('subcat_id')->nullable();
            $table->string('product_name')->nullable();
            $table->integer('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('models_no')->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->string('summery')->nullable();
            $table->integer('document')->nullable();
            $table->string('supplier')->nullable();
            $table->string('specification')->nullable();
            $table->enum('status',['1','0'])->default('1');
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
};
