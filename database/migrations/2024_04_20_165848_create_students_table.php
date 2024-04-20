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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('student_id')->nullable();
            $table->bigInteger('roll')->nullable();
            $table->integer('department_id')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_mobile')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_nid')->nullable();
            $table->string('father_nid_pdf')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_nid')->nullable();
            $table->string('mother_mobile')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_nid_pdf')->nullable();
            $table->string('mobile')->nullable();
            $table->integer('class_id')->nullable();
            $table->string('date')->nullable();
            $table->string('image')->nullable();
            $table->string('nid_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('transfer_letter')->nullable();
            $table->string('marksheet')->nullable();

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->string('is_deleted')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
