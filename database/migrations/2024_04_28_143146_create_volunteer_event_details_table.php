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
        Schema::create('volunteer_event_details', function (Blueprint $table) {
            $table->unsignedBigInteger('Event_id')->required();
            $table->foreign('Event_id')->references('id')->on('volunteer_events')->onDelete('restrict');
            $table->string('Criteria')->required();
            $table->string('Benefit')->required();
            $table->string('Short_Description')->required();
            $table->string('Location')->required();
            $table->integer('Seat')->required();
            $table->string('Whatsapp_Link')->required();
            $table->string('Zoom_Link')->required();
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
        Schema::dropIfExists('volunteer_event_details');
    }
};
