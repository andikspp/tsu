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
        Schema::create('tuk_form', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('competence_id');
            $table->foreign('competence_id')->references('id')->on('competence');
            $table->string('full_name');
            $table->string('organization_name')->nullable();
            $table->string('city')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->string('address')->nullable();
            $table->string('contact_phone_number')->unique()->nullable();
            $table->string('contact_email')->unique()->nullable();
            $table->string('education_title')->nullable();
            $table->string('education_school_university')->nullable();
            $table->string('education_major')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_position')->nullable();
            $table->string('company_email')->nullable();
            $table->string('photo')->nullable();
            $table->string('identification_card')->nullable();
            $table->string('education_certificate')->nullable();
            $table->string('curriculum_vitae')->nullable();
            $table->string('additional_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuk_form');
    }
};
