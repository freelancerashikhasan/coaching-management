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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('nid')->nullable();
            $table->string('email')->unique();
            $table->integer('phone')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('show_password')->nullable();
            $table->string('password');
            $table->string('birth_certificate')->nullable();
            $table->string('father_nid')->nullable();
            $table->string('father_name')->nullable();
            $table->integer('father_phone')->nullable();
            $table->string('mother_nid')->nullable();
            $table->string('mother_name')->nullable();
            $table->integer('mother_phone')->nullable();
            $table->string('ocassion')->nullable();
            $table->unsignedBigInteger('class_id')->nullable();
            $table->unsignedBigInteger('section_id')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('discipline')->nullable();
            $table->string('fee')->nullable();
            $table->string('type')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
