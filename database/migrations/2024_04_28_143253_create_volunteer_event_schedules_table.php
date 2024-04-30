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
        Schema::create('volunteer_event_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Volunteer_Eventsid')->required();
            $table->foreign('Volunteer_Eventsid')->references('id')->on('volunteer_events')->onDelete('restrict');
            $table->date('Date_Start')->required();
            $table->date('Date_End')->required();
            $table->time('Time_Start')->required();
            $table->time('Time_End')->required();
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
        Schema::dropIfExists('volunteer_event_schedules');
    }
};
