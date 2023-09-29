<?php

use App\Enums\QuizzType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->foreignId('image_id')->nullable()->constrained('images')->onDelete('set null');
            $table->text('description');
            $table->enum('type', [
                QuizzType::POLL->value,
                QuizzType::ANSWER->value,
                QuizzType::OUTCOME->value
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
