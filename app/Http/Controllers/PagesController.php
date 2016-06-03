<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

    /**
     * show main page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showMainPage(){

        return view('main');

    }

    /**
     * show post article page
     * user can post an article through this page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPostArticle(){

        return view('post-article');
    }


    public function createArticle(Request $request){

        dd($request->input());

    }
}
