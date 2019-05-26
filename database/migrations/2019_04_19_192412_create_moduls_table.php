<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moduls', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->string('name');
            $table->string('recibo')->default('0');
            $table->string('solicitud')->nullable();
            $table->string('memorandum')->nullable();
            $table->string('proyecto')->default('0');
            $table->string('informe')->nullable();
            $table->string('asesor')->nullable();
            $table->string('f_supervision')->default('0');
            $table->string('f_evaluacion')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moduls');
    }
}
