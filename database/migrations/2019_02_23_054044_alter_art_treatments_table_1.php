<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AlterArtTreatmentsTable1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('art_treatments', function(Blueprint $table)
        {
            $table->string('first_line_first_substitution');
            $table->string('first_line_first_substitute_reason');
            $table->date('first_line_first_substitute_date');
            $table->string('second_line_regimen')->nullable();
            $table->string('second_line_reason')->nullable();
            $table->date('second_line_date')->nullable();
            $table->string('second_line_second_substituted')->nullable();
            $table->string('second_line_second_substitude_reason')->nullable();
            $table->date('second_line_second_substitute_date')->nullable();
            $table->dropColumn('1st_line_first_substitution');
            $table->dropColumn('1st_linefirst_substitute_reason');
            $table->dropColumn('1st_line_first_substitute_date');
            $table->dropColumn('2nd_line_regimen');
            $table->dropColumn('2nd_line_reason');
            $table->dropColumn('2nd_line_date');
            $table->dropColumn('2nd_line_second_substituted');
            $table->dropColumn('2nd_line_second_substitude_reason');
            $table->dropColumn('2nd_line_second_substitute_date');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('art_treatments', function(Blueprint $table)
        {
            $table->dropColumn('first_line_first_substitution');
            $table->dropColumn('first_line_first_substitute_reason');
            $table->dropColumn('first_line_first_substitute_date');
            $table->dropColumn('second_line_regimen');
            $table->dropColumn('second_line_reason');
            $table->dropColumn('second_line_date');
            $table->dropColumn('second_line_second_substituted');
            $table->dropColumn('second_line_second_substitude_reason');
            $table->dropColumn('second_line_second_substitute_date');
            $table->string('1st_line_first_substitution')->nullable();
            $table->string('1st_linefirst_substitute_reason')->nullable();
            $table->date('1st_line_first_substitute_date')->nullable();
            $table->string('2nd_line_regimen')->nullable();
            $table->string('2nd_line_reason')->nullable();
            $table->date('2nd_line_date')->nullable();
            $table->string('2nd_line_second_substituted')->nullable();
            $table->string('2nd_line_second_substitude_reason')->nullable();
            $table->date('2nd_line_second_substitute_date')->nullable();

        });
    }
}
