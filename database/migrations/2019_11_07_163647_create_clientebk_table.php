<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientebkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientebks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 35);
            $table->date('data');
            $table->float('saldo_anterior', 9,2);
            $table->float('saldo_atual', 9, 2);
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
        Schema::dropIfExists('clientebks');
    }
}
