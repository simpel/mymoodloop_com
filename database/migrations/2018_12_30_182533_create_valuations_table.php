<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValuationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valuations', function (Blueprint $table) {
            $table->increments('id');
			$table->timestamps();
            $table->integer('valuation_types_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->integer('valuation_value_id')->unsigned();
            $table->integer('valuation_comment_id')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valuations');
    }
}
