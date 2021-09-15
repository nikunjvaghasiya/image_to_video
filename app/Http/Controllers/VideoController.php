<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
use FFMpeg;
class VideoController extends Controller
{
    public function index(){
        return view('make_video');
    }

    // convert image to video

    public function get_image(Request $request){
        FFMpeg::fromFilesystem('Downloads')
                ->open('IMG_7066.JPG', 'milford.jpg')
                ->export()
                ->toDisk('converted_video')
                ->inFormat(new \FFMpeg\Format\Video\Aac)
                ->save('new.aac');

        $media = FFMpeg::fromFilesystem($filesystem)->open('IMG_7066.JPG', 'milford.jpg');

        return view('gene_video');
    }
}
