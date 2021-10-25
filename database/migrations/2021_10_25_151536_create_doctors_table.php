<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('rut')->nullable()->default('text')->unique();
            $table->string('doctor_name')->nullable()->default('text');
            $table->string('doctor_lastname')->nullable()->default('text');
            $table->string('email')->nullable()->default('text')->unique();
            $table->string('direccion')->nullable()->default('text');
            $table->enum('especialidad', [ 'cerebro','gripas','corazon'])->nullable()->default('corazon');
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
        Schema::dropIfExists('doctors');
    }
}
