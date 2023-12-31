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
        Schema::create('insan', function (Blueprint $table) {
            $table->id();
            $table->string('Ad_Soyad');
            $table->string('irtibat');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('usertype')->nullable();
            $table->string('sahip_olunan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insan');
    }
};
