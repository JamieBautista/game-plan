<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){

        $seo = [];

        $seo['title'] = 'Game Plan';
        $seo['description'] = 'Game Plan';

        // dd($seo);
        return view('login')
                ->with('url', 'login')
                ->with('seo', @$seo);
    }

    public function signup(){

        $seo = [];

        $seo['title'] = 'Game Plan';
        $seo['description'] = 'Game Plan';

        // dd($seo);
        return view('signup')
                ->with('url', 'login')
                ->with('seo', @$seo);
    }

    public function add_user(Request $request){

        $input = $request->input();
        dd($input);

        $response = [];

        // dd($seo);
        return response()->json($response);
    }
}
