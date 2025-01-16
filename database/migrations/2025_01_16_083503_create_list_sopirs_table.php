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
        Schema::create('list_sopirs', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 15)->unique();
            $table->string('notelpon', 40)->nullable();
            $table->string('alamat')->nullable();
            $table->date('tglpkwt')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->string('updated_by', 15)->nullable();
            $table->string('uid', 40)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_sopirs');
    }
};
