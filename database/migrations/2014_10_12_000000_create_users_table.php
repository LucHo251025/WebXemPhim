<?php

use App\Models\Subscription;
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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('role')->default('user');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('sex',['male','female'])->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('phone')->nullable();
            $table->string('avatar')->nullable();
            $table->rememberToken();
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
