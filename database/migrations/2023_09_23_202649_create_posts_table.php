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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('catagory_id');
            $table->string('name');
            $table->string('slug');
            $table->string('description');
            $table->string('yt_iframe')->nullable();

            $table->string('meta_title');
            $table->mediumText('meta_description')->nullable();
            $table->mediumText('meta_keyword')->nullable();
            
            $table->tinyInteger('status')->default(0);
            $table->integer('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
