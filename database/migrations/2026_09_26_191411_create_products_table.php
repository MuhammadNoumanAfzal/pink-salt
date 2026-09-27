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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('category')->default('Edible Salt');
            $table->string('badge')->nullable();
            $table->string('grade')->nullable();
            $table->string('mesh_size')->nullable();
            $table->string('purity')->nullable();
            $table->string('packaging')->nullable();
            $table->string('image_url')->default('/product1.jpg');
            $table->text('short_desc')->nullable();
            $table->text('full_desc')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
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
