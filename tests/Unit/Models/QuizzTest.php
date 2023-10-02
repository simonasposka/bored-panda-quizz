<?php

namespace Tests\Unit\Models;

use App\Enums\QuizzType;
use App\Models\Quizz;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\SlugOptions;
use Tests\TestCase;

class QuizzTest extends TestCase
{
    public function test_image()
    {
        $quizz = new Quizz();
        $this->assertInstanceOf(BelongsTo::class, $quizz->image());
    }

    public function test_questions()
    {
        $quizz = new Quizz();
        $this->assertInstanceOf(HasMany::class, $quizz->questions());
    }

    public function test_outcomes()
    {
        $quizz = new Quizz();
        $this->assertInstanceOf(HasMany::class, $quizz->outcomes());
    }

    public function test_getSlugOptions()
    {
        $quizz = new Quizz();
        $slugOptions = $quizz->getSlugOptions();
        $this->assertInstanceOf(SlugOptions::class, $slugOptions);
        $this->assertTrue(in_array(Quizz::TITLE_FIELD, $slugOptions->generateSlugFrom));
        $this->assertEquals(Quizz::SLUG_FIELD, $slugOptions->slugField);
    }

    public function test_isQuizzTypeOutcome_returnsTrue()
    {
        $quizz = new Quizz();
        $quizz->type = QuizzType::OUTCOME->value;
        $this->assertTrue($quizz->isQuizzTypeOutcome());
    }

    public function test_isQuizzTypeOutcome_returnsFalse()
    {
        $quizz = new Quizz();
        $quizz->type = QuizzType::PICK_CORRECT->value;
        $this->assertFalse($quizz->isQuizzTypeOutcome());
    }
}
