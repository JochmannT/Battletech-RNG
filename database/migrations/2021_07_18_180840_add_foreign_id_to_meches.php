<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignIdToMeches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('meches', function (Blueprint $table) {
            $table->foreignId('mech_classes_id')->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('meches', function (Blueprint $table) {
            $table->dropForeign('mech_classes_id');
        });
    }
}
