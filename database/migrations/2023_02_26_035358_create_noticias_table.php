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
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ca_id')->nullable()->constrained('categorias');
            $table->string('no_titulo', 500)->nullable();
            $table->string('no_autor', 500)->nullable();
            $table->text('no_corpo', 1000000)->nullable();
            $table->string('no_img')->nullable();
            $table->date('no_data');
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
        Schema::dropIfExists('noticias');
    }
};
