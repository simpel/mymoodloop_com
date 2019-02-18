<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameMoodsColumunsToMood extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('moods', function (Blueprint $table) {
            $table->renameColumn('valuation_types_id', 'mood_types_id');
            $table->renameColumn('valuation_comment_id', 'mood_comment_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mood', function (Blueprint $table) {
            //
        });
    }
}
