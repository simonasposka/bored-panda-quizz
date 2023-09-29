<?php

use App\Models\Question;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId(Question::QUIZZ_ID_FIELD)->constrained('quizzes')->onDelete('cascade');
            $table->foreignId(Question::IMAGE_ID_FIELD)->nullable()->constrained('images')->onDelete('set null');
            $table->text(Question::TEXT_FIELD);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
