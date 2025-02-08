<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (Aaran\Assets\Features\Customise::hasMaster()) {
            Schema::create('styles', function (Blueprint $table) {
                $table->id();
                $table->string('vname')->unique();
                $table->longText('desc')->nullable();
                $table->longText('image')->nullable();
                $table->foreignId('company_id')->references('id')->on('companies');
                $table->tinyInteger('active_id')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('styles');
    }
};
