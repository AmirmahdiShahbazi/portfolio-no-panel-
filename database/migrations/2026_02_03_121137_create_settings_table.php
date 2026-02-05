<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('lang', 5)->default('en');
            $table->string('key', '191'); // e.g., 'bio', 'seo_title'
            $table->text('value')->nullable();
            $table->timestamps();

            // Ensure a key is unique per language
            $table->unique(['lang', 'key']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
};