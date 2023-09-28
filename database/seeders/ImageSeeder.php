<?php

namespace Database\Seeders;

use App\Repositories\Image\ImageRepositoryInterface;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    public function __construct(readonly ImageRepositoryInterface $imageRepository)
    {
    }

    public function run(): void
    {
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1.7777777777777777,c_fill/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694973374/dcdgcb90aixs9ssfvbio.png', alt: 'Barbie and Ken driving a pink car');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1.7777777777777777,c_fill/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1693508531/ibqdejjyvhrd4sccuhgg.png', alt: 'Ash Ketchum with Pikachu flying on Charizard\'s back');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1.7777777777777777,c_fill/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1693347209/aswowcniohkbhg69tasf.png', alt: 'Disney villain');
    }
}
