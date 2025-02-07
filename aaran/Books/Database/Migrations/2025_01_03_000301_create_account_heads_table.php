<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        if (Aaran\Assets\Features\Customise::hasBooks()) {

            Schema::create('account_heads', function (Blueprint $table) {
                $table->id();
                $table->string('vname')->unique();
                $table->longText('description')->nullable();
                $table->string('opening')->nullable();
                $table->string('opening_date')->nullable();
                $table->string('current')->nullable();
                $table->tinyInteger('active_id')->nullable();
                $table->foreignId('user_id')->references('id')->on('users');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('account_heads');
    }
};
