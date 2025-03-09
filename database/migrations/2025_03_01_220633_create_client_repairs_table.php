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
        Schema::create('client_repairs', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('contact_number');
            $table->string('company_name');
            $table->string('model_name');
            $table->text('problem_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_repairs');
    }
};
