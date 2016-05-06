<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNacionalidadeColumnToJogadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jogadores', function (Blueprint $table) {
            $table->string('nacionalidade', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jogadores', function (Blueprint $table) {
            $table->dropColumn('nacionalidade');
        });
    }
}
