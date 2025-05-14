<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('skim_pages', function (Blueprint $table) {
            $table->id();

            $table->foreignId('skim_website_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->json('content')->nullable();

            $table->timestamps();
        });
    }
};
