<?php

use App\Models\Answer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId(Answer::QUESTION_ID_FIELD)->constrained('questions')->onDelete('cascade');
            $table->foreignId(Answer::IMAGE_ID_FIELD)->nullable()->constrained('images')->onDelete('set null');
            $table->text(Answer::TEXT_FIELD)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
