<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //Atributos
            $table->string("nome_personagem");
            $table->string("nome_jogador");

            $table->integer("agi");
            $table->integer("int");
            $table->integer("vig");
            $table->integer("pre");
            $table->integer("for");

            $table->text("lore");

            $table->string("origem");

            $table->string("classe");

            $table->integer("nex");
            $table->integer("maxpe");
            $table->integer("desl");

            $table->integer("pv");
            $table->integer("pe");

            $table->integer("def");
            $table->integer("san");

            $table->string("prot");

            $table->string("res");

            //AtributosAtuais
            $table->integer("pvatual");
            $table->integer("peatual");
            $table->integer("sanatual");
            //ataques
            $table->integer("dt");
            $table->text("ataques");

            //inventario
            $table->integer("espacos");
            $table->text("inv");

            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
