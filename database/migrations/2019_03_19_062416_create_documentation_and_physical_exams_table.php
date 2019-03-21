<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentationAndPhysicalExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentation_and_physical_exams', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('patient_name')->nullable();
            $table->date('date_examined')->nullable();
            $table->string('preceptor_name')->nullable();
            $table->string('chief_complaint')->nullable();
            $table->string('history_of_illnes')->nullable();
            $table->string('past_medical_history')->nullable();
            $table->string('immunization')->nullable();
            $table->string('phemonia')->nullable();
            $table->string('t_dap')->nullable();
            $table->string('zoster')->nullable();
            $table->string('family_history')->nullable();
            $table->string('social_history')->nullable();
            $table->string('h_t')->nullable();
            $table->string('w_t')->nullable();
            $table->string('b_m_i')->nullable();
            $table->string('temp')->nullable();
            $table->string('pulse')->nullable();
            $table->string('b_p')->nullable();
            $table->string('r_r')->nullable();
            $table->string('pain')->nullable();
            $table->string('head', 255)->nullable();
            $table->string('eyes')->nullable();
            $table->string('ears_nose_throat')->nullable();
            $table->string('mouth')->nullable();
            $table->string('neck')->nullable();
            $table->string('respiratory')->nullable();
            $table->string('cadio_vascular')->nullable();
            $table->string('gastrointestinal')->nullable();
            $table->string('lymphatic')->nullable();
            $table->string('skin_and_subcutaneus_tissue')->nullable();
            $table->string('back_musculoskeletal')->nullable();
            $table->string('neurological')->nullable();
            $table->string('psychiatric')->nullable();
            $table->string('observations')->nullable();
            $table->string('sign')->nullable();
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
        Schema::drop('documentation_and_physical_exams');
    }
}
