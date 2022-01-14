<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

        $seo = [];

        $seo['title'] = 'Game Plan';
        $seo['description'] = 'Game Plan';

        // dd($seo);
        return view('index')
                ->with('seo', @$seo);
    }
    
    public function games(){

        $seo = [];

        $seo['title'] = 'Games';
        $seo['description'] = 'Games';

        // dd($seo);
        return view('games')
                ->with('seo', @$seo);
    }
}
