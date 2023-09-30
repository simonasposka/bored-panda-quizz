<?php

use App\Models\CorrectAnswer;
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
        Schema::create('correct_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId(CorrectAnswer::QUESTION_ID_FIELD)->constrained('questions')->onDelete('cascade');
            $table->foreignId(CorrectAnswer::ANSWER_ID_FIELD)->constrained('answers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('correct_answers');
    }
};
