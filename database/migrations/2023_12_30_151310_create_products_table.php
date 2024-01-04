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

            $table->string('barcode')->unique;
            $table->string('name');
            $table->decimal('buy_price');
            $table->decimal('selling_price');
            $table->integer('quantity');
            $table->date('create_date');
            $table->date('expire_date');

            $table->unsignedBigInteger('suppliers_id')->nullable();
            $table->foreign('suppliers_id')->references('id')->on('suppliers')->onDelete('set null');
            $table->unsignedBigInteger('category_id');
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
