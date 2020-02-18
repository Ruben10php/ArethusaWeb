<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use Vinkla\Instagram\InstagramException;
use Vinkla\Instagram\Instagram;

class SocialMediaController extends Controller
{
    Const INSTATOKEN = '7874841041.1677ed0.217d81eded6e464697da110233b871b5';

    public function getInstagram($amount)
    {
        $instagram = new Instagram(self::INSTATOKEN);
        $posts = $instagram->media(['count' => $amount]);
        return $posts;
    }

}
