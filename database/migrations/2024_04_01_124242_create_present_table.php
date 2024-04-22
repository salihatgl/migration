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
        Schema::create('present', function (Blueprint $table) {
            $table->id();
            $table->string('presentcode', length: 50)->index();
            $table->string('presenttitle', length: 200);
            $table->string('taxoffice', length: 50)->nullable();
            $table->string('taxno', length: 20)->nullable();
            $table->string('adress', length: 200)->nullable();
            $table->string('county', length: 50)->nullable();
            $table->string('city', length: 50)->nullable();
            $table->string('country', length: 50)->nullable();
            $table->string('presentgroup', length: 30)->nullable();
            $table->string('presenttype', length: 30)->nullable();
            $table->string('webusername', length: 20)->nullable();
            $table->string('webpassword', length: 20)->nullable();
            $table->string('isactive', length: 10)->nullable();
            $table->date('savedate')->nullable();
            $table->string('istranfertoweb', length: 10)->default('Hayır');
            $table->string('isdeleted', length: 10)->default('Hayır')->index();
            $table->string('countrycode', length: 20)->nullable();
            $table->string('fathername', length: 50)->nullable();
            $table->string('birthplace', length: 50)->nullable();
            $table->string('isseller', length: 10)->nullable();
            $table->string('mothername', length: 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('present');
    }
};
