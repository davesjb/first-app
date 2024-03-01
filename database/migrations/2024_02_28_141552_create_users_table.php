<?php

use Illuminate\Database\Migrations\Migration; //Send create migration
use Illuminate\Database\Schema\Blueprint; // Tables 
use Illuminate\Support\Facades\Schema; //Design of table 

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("username", 32);
            $table->string("password", 255);
            $table->string("email", 255);
            // $table->timestamps();
            // $table->dateTime("updated_at");
            // $table->dateTime("created_at");
            $table->timestamp("updated_at")->useCurrent();
            $table->timestamp("created_at")->useCurrent();
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
