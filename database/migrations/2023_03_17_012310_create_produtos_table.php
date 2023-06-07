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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_id')->nullable()->constrained('sub_categorias');
            $table->foreignId('pa_id')->nullable()->constrained('parceiros');
            $table->string('pro_foto')->nullable();
            $table->string('pro_nome');
            $table->string('pro_subtitulo')->nullable();
            $table->text('pro_descricao', 1000000)->nullable();
            $table->string('pro_logo')->nullable();
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
        Schema::dropIfExists('produtos');
    }
};
