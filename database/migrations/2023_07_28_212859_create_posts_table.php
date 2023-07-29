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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('title', 500);
            $table->string('slug', 500);
            $table->string('thumbnail', 1000)->nullable();
            $table->longText('text', 1000)->nullable();

            $table->boolean('active');
            $table->string('status', 20);
            $table->datetime('published_at');

            $table->foreignIdFor(\App\Models\User::class, 'user_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
