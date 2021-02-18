<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;


class AboutPageController extends Controller
{
    //
    public function index()
    {

        SEOMeta::setTitle('My About Page Controller');
        SEOMeta::setDescription('About page description');
        SEOMeta::setKeywords('About JVV incorporated, lorem ipsum ..........');
        SEOMeta::setCanonical('http://localhost:8080/About');

        OpenGraph::setDescription('This is my page description');
        OpenGraph::setTitle('Home');
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Homepage');
        TwitterCard::setSite('@LuizVinicius73');

        JsonLd::setTitle('Homepage');
        JsonLd::setDescription('This is my page description');
        JsonLd::addImage('https://codecasts.com.br/img/logo.jpg');

        return view('about');
    }
}
