<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsulanbelanjamodalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usulanbelanjamodals', function (Blueprint $table) {
            $table->id();
            $table->string('namaunit');
            $table->string('usulan');
            $table->string('volume');
            $table->string('peruntukan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usulanbelanjamodals');
    }
}
