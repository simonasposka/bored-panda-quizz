<?php

namespace App\Repositories\Image;

use App\Models\Image;

interface ImageRepositoryInterface
{
    public function tryFindById(int $id): ?Image;

    public function createImage(string $url, ?string $alt): Image;
}
