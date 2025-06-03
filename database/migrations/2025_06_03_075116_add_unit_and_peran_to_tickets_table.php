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
        Schema::table('tickets', function (Blueprint $table) {
            $table->unsignedBigInteger('peran_id')->nullable()->after('unit_id');
            $table->unsignedBigInteger('unit_kerja_id')->nullable()->after('peran_id');
            $table->foreign('peran_id')->references('id')->on('perans')->onDelete('set null');
            $table->foreign('unit_kerja_id')->references('id')->on('unit_kerjas')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropForeign(['peran_id']);
            $table->dropForeign(['unit_kerja_id']);
            $table->dropColumn(['peran_id', 'unit_kerja_id']);
        });
    }
};
