<?php

namespace App\Repositories\Image;

use App\Models\Image;

class ImageRepository implements ImageRepositoryInterface
{
    public function tryFindById(int $id): ?Image
    {
        return Image::find($id);
    }

    public function createImage(string $url, ?string $alt): Image
    {
        $image = new Image();
        $image->url = $url;

        if (!is_null($alt)) {
            $image->alt = $alt;
        }

        $image->save();

        return $image;
    }
}
