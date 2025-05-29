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
            $table->string('title')->comment('Title of the Post.');
            $table->text('content')->comment('Content of the Post.');
            $table->string('slug')->comment('URL identifier of the Post.');
            $table->timestamp('publication_date')->nullable()->comment('Date the Post was published.');
            $table->timestamp('last_modified_date')->nullable()->comment('Date the Post was last modified.');
            $table->string('status')->comment('D - Draft, P - Published, I - Inactive');
            $table->text('featured_img_url')->comment('URL of featured image');
            $table->integer('views_count')->default(0);
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
