<?php

namespace Tests\Integration;

use App\Models\Image;
use App\Repositories\Image\ImageRepository;
use Tests\TestCase;

abstract class BaseIntegration extends TestCase
{
    protected function createImage(string $url = 'https://www.boredpanda.com/', ?string $alt = null): Image
    {
        $repository = new ImageRepository();

        return $repository->createImage(url: $url, alt: $alt);
    }
}
