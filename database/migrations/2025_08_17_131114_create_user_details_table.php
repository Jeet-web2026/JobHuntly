<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(User::class);
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('profile')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('contact_no')->unique()->nullable();
            $table->string('gender')->nullable();
            $table->string('last_qualification')->nullable();
            $table->text('last_qualification_organisation')->nullable();
            $table->string('current_city')->nullable();
            $table->date('birth_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
