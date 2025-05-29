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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('file_name')->comment('Name of uploaded file.');
            $table->string('file_type')->comment('Type of uploaded file.');
            $table->integer('file_size')->comment('Size of uploaded file.');
            $table->string('url')->comment('URL of uploaded file.');
            $table->timestamp('upload_date')->comment('Date of file upload.');
            $table->string('description')->comment('Describes the uploaded file.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
