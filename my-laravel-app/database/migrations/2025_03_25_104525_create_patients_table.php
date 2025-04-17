<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id('patient_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('contact_number', 20);
            $table->date('birthdate');
            $table->enum('gender', ['male', 'female']);
            $table->foreignId('patient_tier_id')->constrained('tiers');
            $table->string('occupation')->nullable();
            $table->text('address');
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_number', 20)->nullable();
            $table->text('medical_concerns')->nullable();
            $table->text('current_medications')->nullable();
            $table->text('note_from_admin')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patients');
    }
}