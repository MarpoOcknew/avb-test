<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\ColorExtractor\Color;
use League\ColorExtractor\Palette;
use League\ColorExtractor\ColorExtractor;

class IndexController extends Controller
{
    /**
     * Show the index.
     */
    public function index(Request $request)
    {
        // return view('welcome');
        $url = "http://mcallister.cms.avbdev.com/api/pages/about-us";
        $response = \Httpful\Request::get($url)
                    ->expectsJson()
                    ->send();

        $data =  $response->body->data;

        // $images = $data->content[0]->attributes->block[2]->attributes->images;

        $images = array();
        foreach ($data->content as $content) {
            foreach ($content->attributes->block as $block) {
                if($block->layout == 'image-collection'){
                    foreach ($block->attributes->images as $image) {
                       $images[] = $image;
                    }
                }
            }
        }

        $currentImage = 'none';
        $colors = array();
        if($request->input('image') != 'none') {
            $currentImage = $request->input('image');
            $url = 'http://mcallister.cms.avbdev.com/storage/'.$images[$currentImage]->attributes->image;
            $palette = Palette::fromFilename($url);
            $extractor = new ColorExtractor($palette);
            $exColors = $extractor->extract(5);

            foreach ($exColors as $color) {
                $hexValueColor = Color::fromIntToHex($color);
                $colors[] = $hexValueColor;
            }
            // $colors = [
            //     '#197346',
            //     '#829137',
            //     '#f0000f',
            //     '#0f00f0',
            //     '#0ff0ff'
            // ];
        } else {
            $colors = [
                '#00ffff',
                '#0100ff',
                '#acacac',
                '#707070',
                '#343434'
            ];
        }

        return view('index', ['data' => $data, 'images' => $images, 'colors' => $colors, 'currentImage' => $currentImage]);
    }
}
