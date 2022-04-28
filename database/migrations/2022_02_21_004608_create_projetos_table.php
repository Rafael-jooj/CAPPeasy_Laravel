<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('titulo', 160);
            $table->string('instituicao', 160);
            $table->string('grupo', 160);
            $table->string('grande_area', 160);
            $table->string('area_sec', 160);
            $table->string('palavras_chave');
            $table->date('inicio');
            $table->date('termino');
            $table->string('pesq_humanos', 5);
            $table->string('pesq_animais', 5);
            $table->string('local', 160);
            $table->string('financiamento', 5);
            $table->integer('valor');
            $table->string('instituicao_fomento', 160);
            $table->text('objetivos');
            $table->string('file');
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
        Schema::dropIfExists('projetos');
    }
};
