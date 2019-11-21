<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('codcliente');
            $table->unsignedBigInteger('codbanco');
            $table->float('saldo', 8,2);
            $table->timestamps();

            $table->foreign('codcliente')
                ->references('id')->on('clientes');

            $table->foreign('codbanco')
                ->references('id')->on('bancos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contas');
    }
}
