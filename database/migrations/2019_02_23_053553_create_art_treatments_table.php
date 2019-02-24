<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArtTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art_treatments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('hiv_patient_id')->unsigned()->index();
            $table->foreign('hiv_patient_id')->references('id')->on('hiv_patients')->onDelete('cascade');
            $table->date('date_started');
            $table->string('initial_regimen');
            $table->string('1st_line_first_substitution');
            $table->string('1st_linefirst_substitute_reason');
            $table->date('1st_line_first_substitute_date');
            $table->string('2nd_line_regimen')->nullable();
            $table->string('2nd_line_reason')->nullable();
            $table->date('2nd_line_date')->nullable();
            $table->string('2nd_line_second_substituted')->nullable();
            $table->string('2nd_line_second_substitude_reason')->nullable();
            $table->date('2nd_line_second_substitute_date')->nullable();
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
        Schema::drop('art_treatments');
    }
}
