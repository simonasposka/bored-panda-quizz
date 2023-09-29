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
        // For Quizzes: 1-3
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1.7777777777777777,c_fill/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694973374/dcdgcb90aixs9ssfvbio.png', alt: 'Barbie and Ken driving a pink car');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1.7777777777777777,c_fill/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1693508531/ibqdejjyvhrd4sccuhgg.png', alt: 'Ash Ketchum with Pikachu flying on Charizard\'s back');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1.7777777777777777,c_fill/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1693347209/aswowcniohkbhg69tasf.png', alt: 'Disney villain');

        // For Questions: 4-13
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1.7777777777777777,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694708814/llv8j4ablpbpodr6f9nw.jpg', alt: 'Barbie in a car');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1.7777777777777777,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694709220/dvjn4xe2dmoe5xhruyp7.jpg', alt: 'Barbie breakfast');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1.7777777777777777,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694709943/wg9k8py80sytctlo2xee.jpg', alt: 'Ken with fur coat');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1.7777777777777777,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694710032/ebpdbtxtb7zejfpsp1vf.jpg', alt: 'Barbie smiling in a car');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1.7777777777777777,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694711109/pvyxozkbggsb0dnujimw.jpg', alt: 'Group of barbies');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1.7777777777777777,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694713947/jot9kef8x2i2by5ew6nv.jpg', alt: 'Barbie and Ken campfire');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1.7777777777777777,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694714383/rabmalvlrewkvqdghoyl.jpg', alt: 'Barbie and Ken dolls on a beach');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1.7777777777777777,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694714310/vua5ry40fjt8fjjfk73k.jpg', alt: 'Late night date barbie and Ken');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1.7777777777777777,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694715395/wrebfnzyf2utsymi7ahf.png', alt: 'Barbie outfit');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1.7777777777777777,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694711976/dicnghx0useks3hdszhl.jpg', alt: 'Barbie shoe');

        // For Outcomes: 14-15
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1.7777777777777777,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_1/v1694707296/s8sq9h5kpeh9hovwhb8j.jpg', alt: 'Barbie');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1.7777777777777777,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_1/v1694707333/dugsygnsegrrb5e33tzi.jpg', alt: 'Ken');

        // For Answers: 16-36
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694708877/sffq7xtdy14jqqwa1skv.jpg', alt: 'Barbie car');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694708940/cdavx9luqemq4ha12tme.jpg', alt: 'Rollerblades');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694709066/bdokvapuqhmoves0rdas.jpg', alt: 'Toast with Butter');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694709337/pm5ndsjrzyjcg0aiaddr.jpg', alt: 'Coffee and donut');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_1/v1694709417/nk7nekxu0ighcsrs9mox.jpg', alt: 'Western Ken');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694709606/bxrm0lhjzphqixkw6rhq.jpg', alt: 'Surfboard Ken');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694709862/kv4e0zkfxcbtjzljc4cx.jpg', alt: 'Fashionista Ken');

        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694710099/syi1okgxhuk79ke7okmx.jpg', alt: 'Original Barbie');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694710180/gm0k2zv6y0fkpbihxmax.jpg', alt: 'Totally Hair Barbie');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694710754/zzszyvunljbrjfypbq2e.jpg', alt: 'Mermaid Barbie');

        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694711273/tzqll6fycq0x9zduiz1k.jpg', alt: 'President Barbie');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694711343/sihnhrbd4cupuho1ybo5.jpg', alt: 'Weird Barbie');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694711617/npx4aw8bqpwvx7kkds4x.jpg', alt: 'Mermaid Barbie');

        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694711720/qyrq6h1a36zm5pmkkt6v.jpg', alt: 'Barbie heels');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694711797/u4mjigl58en2rjbw5y7j.jpg', alt: 'Barbie platforms');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694711884/bcqhjfkbzs3vlcweiidh.jpg', alt: 'Barbie Ugs');


        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694714478/qls1opesuqogacotrsqb.png', alt: 'Color pink');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694714486/ujqyh5uyl9ei3kjmjknz.png', alt: 'Color blue');

        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694714841/uszxw98vcjxm6hqlkham.jpg', alt: 'Barbie Athletic Outfit');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694714986/c0ttgqhcadvetaqlcnka.jpg', alt: 'Barbie Movie Outfit');
        $this->imageRepository->createImage(url: 'https://img.ex.co/image/upload/ar_1,c_crop/q_auto:good,f_auto,fl_lossy,w_640,c_limit,dpr_2/v1694715215/eshqc1qmcm3he5gebxkw.jpg', alt: 'Roller Blade Outfit');
    }
}
