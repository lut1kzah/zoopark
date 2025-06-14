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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('continent');
            $table->timestamps();
            $table->string('photo')->nullable();
        });

            // Поле для хранения пути к фото

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
        Schema::table('animals', function (Blueprint $table) {
            $table->dropColumn('photo');
        });
    }


};
