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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment_content')->comment('Content of the Comment');
            $table->timestamp('comment_date')->comment('Date the Comment was made.');
            $table->string('reviewer_name')->comment('Name of reviewer.');
            $table->string('reviewer_email')->comment('Email of reviewer.');
            $table->boolean('is_hidden')->default(FALSE)->comment('If comment is hidden.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
