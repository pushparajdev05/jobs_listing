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
        Schema::create('jobs_lists', function (Blueprint $table) {
            $table->id();
            $table->string("cmp_name");
            $table->string("position");
            $table->string("salary");
            $table->string("email");
            $table->string("about");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs_lists');
    }
};
