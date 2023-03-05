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
        Schema::create('foto_noticias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('no_id')->nullable()->constrained('noticias');
            $table->string('fn_ordem')->nullable();
            $table->string('fn_imagem')->nullable();
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
        Schema::dropIfExists('foto_noticias');
    }
};
