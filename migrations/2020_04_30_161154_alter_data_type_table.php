<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterDataTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('data_types', function (Blueprint $table) {
            $table->string('table_name')->after('name');
        });
		
		\DB::statement('UPDATE data_types SET table_name = name');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('data_types', function (Blueprint $table) {
            $table->dropColumn('table_name');
        });
    }
}
