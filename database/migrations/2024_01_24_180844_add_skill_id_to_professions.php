<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSkillIdToProfessions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('professions', function (Blueprint $table) {
            $table->unsignedBigInteger('skill_id')
            ->nullable()
            ->after('id');

        $table->foreign('skill_id')
            ->references('id')
            ->on('skills');
    
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
            $table->dropForeign(['skill_id']);
            $table->dropColumn('skill_id');
        });
    }
}
