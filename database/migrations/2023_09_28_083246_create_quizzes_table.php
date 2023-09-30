<?php

use App\Enums\QuizzType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Quizz;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string(Quizz::TITLE_FIELD);
            $table->string(Quizz::SLUG_FIELD)->unique();
            $table->foreignId(Quizz::IMAGE_ID_FIELD)->nullable()->constrained('images')->onDelete('set null');
            $table->text(Quizz::DESCRIPTION_FIELD);
            $table->enum(Quizz::TYPE_FIELD, [
                QuizzType::OUTCOME->value,
                QuizzType::PICK_CORRECT->value,
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
