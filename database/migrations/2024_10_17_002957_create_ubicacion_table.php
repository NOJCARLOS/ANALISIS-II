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
        Schema::create('ubicacion', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_oficina')->require();
            $table->foreignId('id_municipio')->constrained('municipio');
            $table->string('address',250);
            $table->boolean('is_auxiliatura')->default(false);
            $table->string('state',100)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ubicacions');
    }
};
