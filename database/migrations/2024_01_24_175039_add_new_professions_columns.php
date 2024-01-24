<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewProfessionsColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('professions', function (Blueprint $table) {
        $table->text('description')->nullable()->after('id');
        $table->string('education_level')->after('description');
        $table->integer('salary')->after('education_level');
        $table->string('sector')->after('salary');
        $table->integer('experience_required')->after('sector');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
{
    Schema::table('professions', function (Blueprint $table) {
        $table->dropColumn('description');
        $table->dropColumn('education_level');
        $table->dropColumn('salary');
        $table->dropColumn('sector');
        $table->dropColumn('experience_required');
    });
}
}
