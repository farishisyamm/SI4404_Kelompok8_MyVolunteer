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
        Schema::create('events', function (Blueprint $table) {
            $table->biginteger('event_id')->unsigned()->autoIncrement();
            $table->biginteger('user_id')->unsigned();
            $table->string('event_name', 64);
            $table->string('event_location', 254);
            $table->string('longitude', 32);
            $table->string('latitude', 32);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->biginteger('resource_need');
            $table->text('event_description');
            $table->char('event_status', 1);
            $table->string('reward', 128);
            $table->timestamps();

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
        Schema::dropIfExists('events');
    }
};
