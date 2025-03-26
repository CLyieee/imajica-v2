<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('booking_id');
            $table->string('service_id');
            $table->string('status');
            $table->date('start_date');
            $table->date('end_date');
            $table->string(column: 'assigned_staff');
            $table->string(column: 'branch_code');
            $table->string(column: 'patient_id');
            $table->string(column: 'useReward');
            $table->string(column: 'remarks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
