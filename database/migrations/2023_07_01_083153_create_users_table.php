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
            $table->id()->from(1001);
            $table->timestamps();
            $table->foreignId('form_id')->nullable();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name')->nullable();
            $table->string('passport_seria');
            $table->string('passport_number')->unique();
            $table->string('sex');
            $table->date('born_date');
            $table->string('email')->unique();
            $table->string('avatar')->nullable();
            $table->boolean('active')->default(true);
            $table->boolean('admin')->default(false);

            $table->string('password');
            $table->rememberToken();

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
