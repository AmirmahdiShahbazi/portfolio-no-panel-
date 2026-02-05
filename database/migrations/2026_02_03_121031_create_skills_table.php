<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('lang', 5)->default('en')->index(); // 'en', 'fa'
            $table->string('name');
            $table->string('icon_class')->nullable(); // Nullable in case an icon isn't ready
            $table->integer('proficiency')->default(0); // Assuming 0-100 scale
            $table->string('category'); // e.g., 'Backend', 'Frontend'
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('skills');
    }
};