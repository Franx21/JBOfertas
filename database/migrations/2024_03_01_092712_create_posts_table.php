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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('link')->nullable();
            $table->string('precio_oferta');
            $table->string('precio_regular')->nullable();
            $table->string('envio')->nullable();
            $table->string('tienda');
            $table->string('cupon')->nullable();
            $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
            $table->date('primer_dia');
            $table->date('ultimo_dia')->nullable();
            $table->text('descripcion');
            $table->string('imagen_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
