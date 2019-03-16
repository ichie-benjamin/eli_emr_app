<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNurseNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurse_notes', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('patient_id')->unsigned()->nullable()->index();
            $table->string('surname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('parent_lives')->nullable();
            $table->string('change_in_medication')->nullable();
            $table->string('allergies')->nullable();
            $table->string('vital_signs')->nullable();
            $table->string('respiratory')->nullable();
            $table->text('skin_assessment')->nullable();
            $table->text('cardiovascular_car_assessment')->nullable();
            $table->text('musculoskeletal_assessment')->nullable();
            $table->text('digestive_assessment')->nullable();
            $table->text('pain_assessment')->nullable();
            $table->string('pain_assessment_scale')->nullable();
            $table->text('intervention')->nullable();
            $table->text('goal')->nullable();
            $table->text('supervisor_assessment')->nullable();
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
        Schema::drop('nurse_notes');
    }
}
