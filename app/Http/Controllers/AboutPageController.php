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

        SEOMeta::setTitle('About-us');
        SEOMeta::setDescription('About page description');
        SEOMeta::setKeywords('About JVV incorporated, lorem ipsum ..........');
        SEOMeta::setCanonical('http://localhost:8080/about');

        OpenGraph::setDescription('This is my about page description');
        OpenGraph::setTitle('Home');
        OpenGraph::setUrl('hhttp://localhost:8080/about');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('about-us');
        TwitterCard::setSite('@twitterusername');

        JsonLd::setTitle('about-us');
        JsonLd::setDescription('This is my about page description');
        JsonLd::addImage('https://jvv/img/logo.jpg');

        return view('about');
    }
}
