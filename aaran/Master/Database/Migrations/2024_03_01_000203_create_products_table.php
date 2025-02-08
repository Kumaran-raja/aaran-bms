<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (Aaran\Assets\Features\Customise::hasMaster()) {

            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('vname')->unique();
                $table->foreignId('producttype_id')->nullable();
                $table->foreignId('hsncode_id')->references('id')->on('hsncodes');
                $table->foreignId('unit_id')->references('id')->on('units');
                $table->foreignId('gstpercent_id')->references('id')->on('gst_percents');
                $table->decimal('initial_quantity',12,2)->nullable();
                $table->decimal('initial_price',12,2)->nullable();
                $table->tinyInteger('active_id')->nullable();
                $table->foreignId('user_id')->references('id')->on('users');
                $table->foreignId('company_id')->references('id')->on('companies');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
