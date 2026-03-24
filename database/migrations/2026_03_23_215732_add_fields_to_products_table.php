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
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();

            $table->decimal('price', 10, 2)->default(0)->change();
            $table->decimal('sale_price', 10, 2)->nullable();

            $table->integer('stock')->default(0)->change();

            $table->text('description')->nullable();
            $table->string('image')->nullable();

            $table->boolean('is_active')->default(1);
            $table->boolean('is_delete')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn([
                'category_id',
                'sale_price',
                'description',
                'image',
                'is_active',
                'is_delete'
            ]);
        });
    }
};
