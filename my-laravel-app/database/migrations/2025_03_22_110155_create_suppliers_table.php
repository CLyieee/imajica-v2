<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('suppliers', function (Blueprint $table) {
                     $table->id();
            $table->string('supplier_name');
            $table->string('email');
            $table->string('contactNumber');
            $table->string('supplier_type');
            $table->string('address');
            $table->text('product_offered');
            $table->text('notes');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
