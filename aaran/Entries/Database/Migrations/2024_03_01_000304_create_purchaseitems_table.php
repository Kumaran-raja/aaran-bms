<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        if (Aaran\Aadmin\Src\Customise::hasEntries()) {

            Schema::create('purchaseitems', function (Blueprint $table) {
                $table->id();
                $table->foreignId('purchase_id')->references('id')->on('purchases');
                $table->foreignId('product_id')->references('id')->on('products');
                $table->string('description')->nullable();
                $table->foreignId('colour_id')->references('id')->on('commons');
                $table->foreignId('size_id')->references('id')->on('commons');
                $table->decimal('qty');
                $table->decimal('price');
                $table->string('gst_percent')->nullable();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('purchaseitems');
    }
};
