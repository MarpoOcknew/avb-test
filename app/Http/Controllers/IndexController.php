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
    public function index()
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

        // $url = 'http://mcallister.cms.avbdev.com/storage/'.$images[0]->attributes->image;
        // $palette = Palette::fromFilename($url);
        // $extractor = new ColorExtractor($palette);
        // $exColors = $extractor->extract(5);

        // $colors = array();
        // foreach ($exColors as $color) {
        //     $hexValueColor = Color::fromIntToHex($color);
        //     $colors[] = $hexValueColor;
        // }

        $colors = [
            '#124578',
            '#987654',
            '#ff0000',
            '#00ff00',
            '#0000ff'
        ];

        return view('index', ['data' => $data, 'images' => $images, 'colors' => $colors]);
    }

    public function getColors($image)
    {
        $url = 'http://mcallister.cms.avbdev.com/storage/'.$image;
        $palette = Palette::fromFilename($url);
        $extractor = new ColorExtractor($palette);
        $exColors = $extractor->extract(5);

        $colors = array();
        foreach ($exColors as $color) {
            $hexValueColor = Color::fromIntToHex($color);
            $colors[] = $hexValueColor;
        }
        return $colors;
    }
}
