<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop foreign key and column if they exist before dropping the table
        if (Schema::hasTable('mahasiswas')) {
            try {
                Schema::table('mahasiswas', function (Blueprint $table) {
                    $table->dropForeign('mahasiswas_id_dosen_foreign');
                    $table->dropColumn('id_dosen');
                });
            } catch (\Exception $e) {
                // Ignore if foreign key/column do not exist
            }
        }
        Schema::dropIfExists('mahasiswas');
    }
};