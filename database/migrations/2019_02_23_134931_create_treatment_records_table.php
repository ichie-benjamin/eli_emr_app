<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTreatmentRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatment_records', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('hiv_patient_id')->unsigned()->index();
            $table->foreign('hiv_patient_id')->references('id')->on('hiv_patients')->onDelete('cascade');
            $table->date('date');
            $table->string('scheduled');
            $table->string('clinician');
            $table->string('reason_for_visit')->nullable();
            $table->string('observed_symptoms')->nullable();
            $table->string('adherence')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->string('LMB')->nullable();
            $table->string('TB_status')->nullable();
            $table->string('aids_associated_conditions')->nullable();
            $table->string('functional_status')->nullable();
            $table->string('WHO_stage')->nullable();
            $table->string('CD_count')->nullable();
            $table->string('ALT')->nullable();
            $table->string('HB')->nullable();
            $table->string('creatinine')->nullable();
            $table->string('CTX_dose')->nullable();
            $table->string('ART_Regimen')->nullable();
            $table->date('date_of_next_visit')->nullable();
            $table->string('comments')->nullable();
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
        Schema::drop('treatment_records');
    }
}
