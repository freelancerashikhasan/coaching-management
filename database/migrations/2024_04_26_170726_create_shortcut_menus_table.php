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
        Schema::create('shortcut_menus', function (Blueprint $table) {
            $table->id();
            $table->string('group')->nullable();
            $table->string('btn_text')->nullable();
            $table->string('btn_id')->nullable();
            $table->string('modal_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shortcut_menus');
    }
};
