<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('atividades', function (Blueprint $table) {
        $table->increments('id');           //código identificador
        $table->string('titulo');           //título da atividade
        $table->string('texto');            //texto da atividade
        $table->string('autor');            //autor da atividade
        $table->dateTime('Created_at');     //agendado para
        $table->dateTime('updated_at');     //agendado
        $table->timestamps();               //registro created_at e updated_at
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
