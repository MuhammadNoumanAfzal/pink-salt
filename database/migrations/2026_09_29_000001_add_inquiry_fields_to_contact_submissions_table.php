<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->string('product')->nullable()->after('country');
            $table->string('quantity')->nullable()->after('product');
            $table->string('packaging')->nullable()->after('quantity');
            $table->string('private_label')->nullable()->after('packaging');
            $table->string('destination_port')->nullable()->after('private_label');
            $table->string('delivery_timeline')->nullable()->after('destination_port');
        });
    }

    public function down(): void
    {
        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->dropColumn([
                'product',
                'quantity',
                'packaging',
                'private_label',
                'destination_port',
                'delivery_timeline',
            ]);
        });
    }
};
