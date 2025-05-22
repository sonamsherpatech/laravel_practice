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
        Schema::create('books', function(Blueprint $table) {
            $table->bigIncrements('book_id');
            $table->string('title',255);
            $table->string('author',255);
            $table->string('isbn',20)->unique();
            $table->string('publisher',255)->nullable();
            $table->string('genre', 100)->nullable();
            $table->year('publication_year')->nullable();
            $table->integer('quantity')->default(1);
            $table->unsignedBigInteger('added_by');
            $table->timestamps();

            $table->foreign('added_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
