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
        Schema::create('event_resources', function (Blueprint $table) {
            $table->biginteger('event_resource_id')->unsigned()->autoIncrement();
            $table->biginteger('event_id')->unsigned();
            $table->biginteger('user_id')->unsigned();
            $table->dateTime('apply_date');
            $table->char('er_status', 1);
            $table->timestamps();

            $table->foreign('event_id')->references('event_id')->on('events')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_resources');
    }
};
