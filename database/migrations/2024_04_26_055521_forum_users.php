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
        Schema::table('forum_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_id')->constrained('forums');
            $table->foreignId('user_id')->constrained('users');
            $table->string('level')->default('member');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forum_users');
    }
};
