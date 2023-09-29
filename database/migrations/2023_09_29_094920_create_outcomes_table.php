<?php

use App\Models\Outcome;
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
        Schema::create('outcomes', function (Blueprint $table) {
            $table->id();
            $table->foreignId(Outcome::QUIZZ_ID_FIELD)->constrained('quizzes')->onDelete('cascade');
            $table->foreignId(Outcome::IMAGE_ID_FIELD)->nullable()->constrained('images')->onDelete('set null');
            $table->string(Outcome::TITLE_FIELD);
            $table->text(Outcome::DESCRIPTION_FIELD);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outcomes');
    }
};
