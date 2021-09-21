<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('index', ['data' => $data, 'images' => $images]);
    }
}
