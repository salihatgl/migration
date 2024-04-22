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
        Schema::create('stock', function (Blueprint $table) {
            $table->id();
            $table->string('stockcode', length: 50);
            $table->string('stockname', length: 100)->index();
            $table->string('alternativestockcode', length: 50)->index()->nullable();
            $table->string('alternativestockname', length: 100)->index()->nullable();
            $table->string('stockgroup', length: 30)->index()->nullable();
            $table->string('barcode', length: 50)->index()->nullable();
            $table->string('stockbrand', length: 50)->index()->nullable();
            $table->string('stockmodelcode', length: 30)->nullable();
            $table->string('stockmodelname', length: 50)->nullable();
            $table->string('stockdescription', length: 200)->nullable();
            $table->string('webdescription', length: 200)->nullable();
            $table->string('isactive', length: 10)->index()->nullable();
            $table->date('savedate')->nullable();
            $table->string('istranfertoweb', length: 10)->default('Hayır');
            $table->string('isdeleted', length: 10)->default('Hayır')->index();
            $table->date('updatedate')->nullable();
            $table->string('producercode', length: 50)->nullable();
            $table->integer('stockbrandid')->nullable()->index();
            $table->integer('stockmodelid')->nullable()->index();
            $table->integer('stockgroupid')->nullable()->index();
            $table->string('isaddedcart', length: 50)->nullable()->default('Evet')->index();
            $table->string('keyword', length: 1000)->nullable();
            $table->string('wastagestockcode', length: 200)->nullable();
            $table->text('webcontent')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock');
    }
};
