<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinichistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinichistory', function (Blueprint $table) {
            $table->id();
            $table->string('medical_background',75);
            $table->date('creation_date');
            $table->string('current_prescription',75);
            $table->geometry('current_x-ray');
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
        Schema::dropIfExists('clinichistory');
    }
}
