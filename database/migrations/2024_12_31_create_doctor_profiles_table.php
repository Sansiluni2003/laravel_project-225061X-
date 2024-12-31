<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('doctor_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('specialization');
            $table->text('qualifications');
            $table->text('experience');
            $table->text('bio')->nullable();
            $table->string('consultation_fee')->nullable();
            $table->json('available_days')->nullable();
            $table->json('available_hours')->nullable();
            $table->string('phone_number');
            $table->string('profile_photo')->nullable();
            $table->boolean('is_available')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('doctor_profiles');
    }
};
