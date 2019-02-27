<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyStringsToTextForDischargeSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('discharge_summaries', function (Blueprint $table) {
            $table->text('diagnosis_at_discharge')->change();
            $table->text('operation_and_procedures')->change();
            $table->text('reasons_for_admission_and_presenting_complaint')->change();
            $table->text('clinical_narrative')->change();
            $table->text('relevant_investigation_and_result')->change();
            $table->text('relevant_legal_information')->change();
            $table->text('information_given_to_patient')->change();
            $table->text('GP_actions')->change();
            $table->text('GP_details')->change();
            $table->text('strategies_for_potential_problems')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('discharge_summaries', function (Blueprint $table) {
            //
        });
    }
}
