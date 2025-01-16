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
        Schema::create('vendors', function (Blueprint $table) {
            $table->string('uid', 40)->primary();
            $table->string('idvendor', 30)->uniqid();
            $table->string('nmvendor', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->string('updated_by', 15)->nullable();
            $table->smallInteger('isactive')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
