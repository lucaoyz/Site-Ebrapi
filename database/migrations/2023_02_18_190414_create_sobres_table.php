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
        Schema::create('sobres', function (Blueprint $table) {
            $table->id();
            $table->text('sob_sobre', 1000000)->nullable();
            $table->text('sob_fazemos', 1000000)->nullable();
            $table->text('sob_missao', 1000000)->nullable();
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
        Schema::dropIfExists('sobres');
    }
};
