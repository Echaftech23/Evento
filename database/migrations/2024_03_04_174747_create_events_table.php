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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('address');
            $table->date('registerEndDate');
            $table->date('startDate');
            $table->date('endDate');
            $table->integer('capacity');
            $table->double('price');
            $table->enum('isAuto', ['0', '1'])->default('0'); // confirm reservation automatically or manually
            $table->enum('status', ['0', '1', '2'])->default('0');
            $table->timestamps();
            $table->foreignId('city_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('organizer_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
