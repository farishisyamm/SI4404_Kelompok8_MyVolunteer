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
        Schema::create('resource_details', function (Blueprint $table) {
            $table->biginteger('resource_detail_id')->unsigned()->autoIncrement();
            $table->biginteger('resource_category_id')->unsigned();
            $table->biginteger('event_id')->unsigned();
            $table->timestamps();

            $table->foreign('resource_category_id')->references('resource_category_id')->on('resource_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('event_id')->references('event_id')->on('events')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resource_details');
    }
};
