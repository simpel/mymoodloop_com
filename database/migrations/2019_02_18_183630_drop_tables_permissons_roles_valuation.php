<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropTablesPermissonsRolesValuation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::dropIfExists('role_has_permissions');

        Schema::dropIfExists('model_has_permissions');
        Schema::dropIfExists('model_has_roles');

        Schema::dropIfExists('role_user');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('roles');

        Schema::dropIfExists('valuation_values');

        Schema::table('valuations', function (Blueprint $table) {
            $table->renameColumn('valuation_value_id', 'value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
