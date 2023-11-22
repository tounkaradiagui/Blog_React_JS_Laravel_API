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
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('username')->nullable();
            $table->string('password');
            $table->string('adresse')->nullable();
            $table->date('date_de_naissance')->nullable();
            $table->string('lieu_de_naissance')->nullable();
            $table->string('phone')->nullable();
            $table->string('profile_image')->default('avatar.jpg');
            $table->integer('role_id')->default(0)->comment('1=Admin, 0=User');
            $table->tinyInteger('status')->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->softDeletes();
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
