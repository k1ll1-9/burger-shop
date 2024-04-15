<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('title');
            $table->integer('sort')->nullable();
            $table->string('description')->nullable();
            $table->binary('image')->nullable();
            $table->decimal('price')->nullable()->unsigned();
            $table->boolean('special')->default(false);
            $table->boolean('active')->default(true);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
