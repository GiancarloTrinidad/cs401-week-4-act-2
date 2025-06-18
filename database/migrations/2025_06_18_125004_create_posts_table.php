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
            $table->string('title')->comment('Post Title');
            $table->text('content')->comment('Post Content');
            $table->string('slug');
            $table->timestamp('publication_date')->nullable();
            $table->timestamp('last_modified_date')->nullable();
            $table->string('status')->comment('D - Draft, P - Published, I - Inactive')->max(1);
            $table->text('featured_image_url')->comment('url of image');
            $table->integer('views_count')->comment('number of views')->default(0);
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
