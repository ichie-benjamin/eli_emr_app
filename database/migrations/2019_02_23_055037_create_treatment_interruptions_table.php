<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTreatmentInterruptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatment_interruptions', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('hiv_patient_id')->unsigned()->index();
            $table->foreign('hiv_patient_id')->references('id')->on('hiv_patients')->onDelete('cascade');
            $table->string('first_interruption_reasonfirst_interruption_data')->nullable();
            $table->string('second_interruption_reason')->nullable();
            $table->string('second_interruption_data')->nullable();
            $table->string('departure_from_treatment_reason')->nullable();
            $table->string('departure_from_treatment_data')->nullable();
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
        Schema::drop('treatment_interruptions');
    }
}
