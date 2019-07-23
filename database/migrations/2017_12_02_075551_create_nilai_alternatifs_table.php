<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatenilaialternatifsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_alternatifs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_alternatif');
            $table->string('Absensi');
            $table->string('eskul');
            $table->string('sikap');
            $table->string('rapot');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('nilai_alternatifs');
    }
}
