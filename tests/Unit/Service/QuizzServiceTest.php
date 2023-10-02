<?php

namespace Tests\Unit\Service;

use App\Constants\CacheKeys;
use App\Models\Quizz;
use App\Repositories\Quizz\QuizzRepositoryInterface;
use App\Services\Cache\CacheServiceInterface;
use App\Services\QuizzRelationshipLoader;
use App\Services\QuizzService;
use App\Services\Transformers\Quizz\BaseTransformedQuizz;
use App\Services\Transformers\Quizz\Outcome\OutcomeQuizz;
use App\Services\Transformers\Quizz\QuizzTransformer;
use PHPUnit\Framework\MockObject\Exception;
use Tests\TestCase;

class QuizzServiceTest extends TestCase
{
    private CacheServiceInterface $cacheService;
    private QuizzRepositoryInterface $quizzRepository;
    private QuizzRelationshipLoader $quizzRelationshipLoader;
    private QuizzTransformer $quizzTransformer;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->cacheService            = $this->createMock(CacheServiceInterface::class);
        $this->quizzRepository         = $this->createMock(QuizzRepositoryInterface::class);
        $this->quizzRelationshipLoader = $this->createMock(QuizzRelationshipLoader::class);
        $this->quizzTransformer        = $this->createMock(QuizzTransformer::class);
    }

    public function test_getAllWithImages_returnsCachedResult()
    {
        $cachedResult = $this->getAllCachedQuizzes();
        $this->cacheService->method('tryGetByKey')
            ->with(CacheKeys::ALL_QUIZZES_WITH_IMAGES)
            ->willReturn($cachedResult);


        $quizzService = new QuizzService(
            $this->quizzRepository,
            $this->quizzRelationshipLoader,
            $this->cacheService,
            $this->quizzTransformer,
        );

        $result = $quizzService->getAllWithImages();

        $this->assertEquals($cachedResult, $result);
    }

    public function test_getAllWithImages_returnsNotCachedResult()
    {
        $mockedResult = $this->getAllQuizzes();
        $this->cacheService->method('tryGetByKey')->willReturn(null);
        $this->quizzRepository->method('getAllWithImages')->willReturn($mockedResult);


        $quizzService = new QuizzService(
            $this->quizzRepository,
            $this->quizzRelationshipLoader,
            $this->cacheService,
            $this->quizzTransformer,
        );

        $result = $quizzService->getAllWithImages();

        $this->assertEquals($mockedResult, $result);
    }

    public function test_tryFindBySlug_returnsCachedResult()
    {
        $cachedResult = $this->getCachedQuizz();

        $this->cacheService->method('tryGetByKey')->willReturn($cachedResult);

        $quizzService = new QuizzService(
            $this->quizzRepository,
            $this->quizzRelationshipLoader,
            $this->cacheService,
            $this->quizzTransformer,
        );

        $result = $quizzService->tryFindBySlug('any-slug-will-work');

        $this->assertEquals($cachedResult, $result);
    }

    public function test_tryFindBySlug_returnsNotResult()
    {
        $mockedResult = $this->createMockQuizz(1);
        $transformedMockedResult = $this->getTransformedOutcomeResult($mockedResult);

        $this->cacheService->method('tryGetByKey')->willReturn(null);
        $this->quizzRepository->method('tryFindBySlugWithImageAndQuestions')->willReturn($mockedResult);
        $this->quizzTransformer->method('transform')->with($mockedResult)->willReturn($transformedMockedResult);

        $quizzService = new QuizzService(
            $this->quizzRepository,
            $this->quizzRelationshipLoader,
            $this->cacheService,
            $this->quizzTransformer,
        );

        $result = $quizzService->tryFindBySlug('any-slug-will-work');

        $this->assertEquals($transformedMockedResult->toArray(), $result);
    }

    private function getCachedQuizz(): array
    {
        return [
            'cached' => $this->createMockQuizz(1),
        ];
    }

    private function getAllQuizzes(): array
    {
        return [
            $this->createMockQuizz(1),
            $this->createMockQuizz(2),
        ];
    }

    private function getAllCachedQuizzes(): array
    {
        return [
            'cached' => $this->getAllQuizzes(),
        ];
    }

    private function getTransformedOutcomeResult(Quizz $quizz): BaseTransformedQuizz
    {
        return new OutcomeQuizz(
            id: $quizz->id,
            title: $quizz->title,
            slug: $quizz->slug,
            description: $quizz->description,
            type: $quizz->type,
            createdAt: $quizz->created_at,
            updatedAt: $quizz->updated_at,
            image: null,
            questions: [],
            outcomes: [],
        );
    }
}
