<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;

class HomePageController extends Controller
{
    //
    public function index()
    {
        SEOMeta::setTitle('HomePage');
        SEOMeta::setDescription('Home page description');

        return view('home');
    }
}
