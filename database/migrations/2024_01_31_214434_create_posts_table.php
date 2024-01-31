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
            $table->string('name',120);
            $table->string('slug',200);
            $table->text('content');
            $table->string('image');
            $table->enum('posted',['yes', 'not']);
            $table->foreignId('category_id')
            ->constrained()# Se establece una restricción de clave foránea
            ->onDelete('cascade');# Se especifica la acción 'onDelete' para la cascada de eliminación
            $table->text("description");
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
