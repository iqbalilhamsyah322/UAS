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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('subject_id')->unsigned();
            $table->string('hari');
            $table->string('jam_mulai');
            $table->string('jam_selesai');
            $table->string('ruangan');
            $table->string('kode_absensi')->default('255');
            $table->string('tahun_akademik')->default('255');
            $table->string('semester')->default('255');
            $table->string('created_by')->default(fake()->randomNumber());
            $table->string('updated_by')->default(fake()->randomNumber());
            $table->string('deleted_by')->default(fake()->randomNumber());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
