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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('website_name')->nullable();
            $table->string('site_title')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->text('address')->nullable();
            $table->text('mmeta_description')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->text('meta_viewport')->nullable();
            $table->string('mobile1')->nullable();
            $table->string('mobile2')->nullable();
           
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
        Schema::dropIfExists('general_settings');
    }
};
