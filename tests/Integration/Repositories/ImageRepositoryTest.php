<?php

namespace Tests\Integration\Repositories;

use App\Models\Image;
use App\Repositories\Image\ImageRepository;
use App\Repositories\Image\ImageRepositoryInterface;
use Tests\Integration\BaseIntegration;

class ImageRepositoryTest extends BaseIntegration
{
    private ImageRepositoryInterface $imageRepository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->imageRepository = new ImageRepository();
    }

    public function test_tryFindById_imageIsFound(): void
    {
        $image = $this->createImage();

        $result = $this->imageRepository->tryFindById($image->id);

        $this->assertEquals($image->id, $result->id);
    }

    public function test_tryFindById_imageIsNotFound(): void
    {
        $result = $this->imageRepository->tryFindById(1);

        $this->assertEquals(null, $result);
    }

    public function test_createImage(): void
    {
        $result = $this->imageRepository->createImage('url', 'alt');
        $foundImage = $this->imageRepository->tryFindById($result->id);

        $this->assertInstanceOf(Image::class, $result);
        $this->assertEquals($result->id, $foundImage->id);
    }
}
