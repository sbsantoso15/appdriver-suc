<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::dropIfExists('kendaraans');
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->string('noplat', 15)->nullable();
            $table->string('nik', 15);
            $table->date('masasewa1')->nullable();
            $table->date('masasewa2')->nullable();
            $table->date('tglpajak')->nullable();
            $table->string('idvendor', 30)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->string('updated_by', 15)->nullable();
            $table->string('uid', 40)->unique()->primary();
            $table->smallInteger('isonsite')->default('1');
            $table->smallInteger('isactive')->default('1');

            // $table->foreign('nik')->references('nik')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
