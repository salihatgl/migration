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
        Schema::create('presenttrans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('presentid')->index();
            $table->string('presentcode', length: 50)->index();
            $table->string('presenttitle', length:100);
            $table->date('transdate')->nullable();
            $table->date('duedate')->nullable();
            $table->double('debtamount');
            $table->double('creditamount');
            $table->string('transkind', length: 30)->nullable();
            $table->string('barcode', length: 30)->index()->nullable();
            $table->string('foreignmoneyunit', length: 30);
            $table->double('foreigncreditamount');
            $table->double('foreignexchangerate');
            $table->string('marketercode', length:30);
            $table->string('marketername', length:50);
            $table->string('description', length:200);
            $table->string('accountcode', length:50);
            $table->string('projectcode', length:30);
            $table->string('isdeleted', length: 10)->default('Hayır')->index();
            $table->string('transferpresent', length:30);
            $table->string('tridno', length:20);
            $table->string('branchname', length:50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presenttrans');
    }
};
