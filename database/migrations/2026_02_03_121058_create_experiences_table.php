<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            // Using UUID to link the 'en' version to the 'fa' version of the same job
            $table->uuid('common_id')->index(); 
            $table->string('lang', 5)->default('en');
            $table->string('company');
            $table->string('role');
            $table->text('description')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable(); // Nullable because it might be the current job
            $table->boolean('is_current')->default(false);
            $table->timestamps();

            // Compound index for faster lookups
            $table->index(['lang', 'is_current']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('experiences');
    }
};