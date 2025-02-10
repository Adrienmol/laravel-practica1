<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 'id' => 1,
     *'titulo' => 'Teoría de PHP para dormir',
     *  'director' => 'Ricardo',
     *   'sinapsis
     */
    public function up(): void
    {
        Schema::create('cortos', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('sinapsis');
            $table->timestamps();

            // Referencias al usuario
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Referencia al director
            $table->unsignedBigInteger('director_id');
            $table->foreign('director_id')
                ->references('id')
                ->on('directors')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cortos');
    }
};
