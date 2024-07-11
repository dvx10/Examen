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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 35)->notnull();
            $table->string('curso', 35)->notnull();
            $table->float('nota1')->notnull();
            $table->float('nota2')->notnull();
            $table->float('promedio')->notnull();
            $table->string('condicion', 30)->notnull();
            $table->date('fechareg')->notnull();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
