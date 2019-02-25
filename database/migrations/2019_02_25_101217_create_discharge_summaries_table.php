<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDischargeSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discharge_summaries', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('patient_id')->unsigned()->nullable()->index();
            $table->string('surname')->nullable();
            $table->string('forname')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('NHS')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('discharging_consultant')->nullable();
            $table->string('discharging_specialty')->nullable();
            $table->string('method_of_admission')->nullable();
            $table->date('date_of_discharge')->nullable();
            $table->string('GP_details')->nullable();
            $table->string('diagnosis_at_discharge')->nullable();
            $table->string('operation_and_procedures')->nullable();
            $table->string('reasons_for_admission_and_presenting_complaint')->nullable();
            $table->string('clinical_narrative')->nullable();
            $table->string('relevant_investigation_and_result')->nullable();
            $table->string('discharge_destination')->nullable();
            $table->string('relevant_legal_information')->nullable();
            $table->string('information_given_to_patient')->nullable();
            $table->string('GP_actions')->nullable();
            $table->string('strategies_for_potential_problems')->nullable();
            $table->string('medication_stopped')->nullable();
            $table->string('discharging_doctor_name')->nullable();
            $table->string('bleep_no')->nullable();
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
        Schema::drop('discharge_summaries');
    }
}
