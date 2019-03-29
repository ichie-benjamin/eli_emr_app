<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNursingVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nursing_visits', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('patient_id')->unsigned()->nullable()->index();
            $table->string('patient_name')->nullable();
            $table->text('patient_case')->nullable();
            $table->text('nurse_report')->nullable();
            $table->string('time_in')->nullable();
            $table->string('time_out')->nullable();
            $table->string('patient_status')->nullable();
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
        Schema::drop('nursing_visits');
    }
}
