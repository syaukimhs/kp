<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsulaninovasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usulaninovasis', function (Blueprint $table) {
            $table->id();
            $table->string('namapanti');
            $table->string('namainovasi');
            $table->bigInteger('paguanggaran');
            $table->bigInteger('tahunpelaksanaan');
            $table->string('latarbelakang');
            $table->string('tujuan');
            $table->string('deskripsiinovasi');
            $table->string('proposal');
            $table->string('rab');
            $table->date('tanggalusulan');
            $table->string('catatankeuangan');
            $table->string('statususulan');
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
        Schema::dropIfExists('usulaninovasis');
    }
}
