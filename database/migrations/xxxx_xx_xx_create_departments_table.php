<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('department_name');
            $table->string('department_code')->unique();
            $table->foreignId('department_head')->constrained('staff');
            $table->foreignId('parent_department')->nullable()->constrained('departments');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('departments');
    }
}; 