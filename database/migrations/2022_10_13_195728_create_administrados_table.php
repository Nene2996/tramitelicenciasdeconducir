<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrados', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 30);
            $table->string('apellido_paterno', 50);
            $table->string('apellido_materno', 50);
            $table->string('numero_documento', 20);
            $table->string('numero_licencia', 50);
            $table->unsignedBigInteger('tipo_doc_id');
            $table->foreign('tipo_doc_id')->references('id')->on('tipos_documento');
            $table->unsignedBigInteger('tipo_tramite_id');
            $table->foreign('tipo_tramite_id')->references('id')->on('tipos_tramite');
            $table->unsignedBigInteger('cat_licencia_id');
            $table->foreign('cat_licencia_id')->references('id')->on('categorias_licencia');
            $table->unsignedBigInteger('local_recojo_id');
            $table->foreign('local_recojo_id')->references('id')->on('locales_recojo');
            $table->unsignedBigInteger('estado_tramite_id');
            $table->foreign('estado_tramite_id')->references('id')->on('estados_tramite');
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
        Schema::dropIfExists('administrados');
    }
}
