<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\AnswerOutcome;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('answer_outcomes', function (Blueprint $table) {
            $table->id();
            $table->foreignId(AnswerOutcome::ANSWER_ID_FIELD)->constrained('answers')->onDelete('cascade');
            $table->foreignId(AnswerOutcome::OUTCOME_ID_FIELD)->constrained('outcomes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_outcomes');
    }
};
