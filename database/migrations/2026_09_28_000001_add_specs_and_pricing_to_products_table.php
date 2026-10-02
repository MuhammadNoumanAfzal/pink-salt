<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->nullable()->after('packaging');
            $table->string('price_unit')->nullable()->after('price');
            $table->string('package_weight')->nullable()->after('price_unit');
            $table->string('packaging_type')->nullable()->after('package_weight');
            $table->string('grain_size')->nullable()->after('packaging_type');
            $table->string('product_type')->nullable()->after('grain_size'); // pure_salt, lamp_craft, packaged_retail, tile_brick, animal_lick
            $table->string('moq')->nullable()->after('product_type');
            $table->string('origin')->nullable()->default('Khewra Salt Range, Pakistan')->after('moq');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'price',
                'price_unit',
                'package_weight',
                'packaging_type',
                'grain_size',
                'product_type',
                'moq',
                'origin'
            ]);
        });
    }
};
