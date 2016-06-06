<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\PostArticleRequest;
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

        //get all article categories
        $categories = Category::all();

        return view('post-article')->with('categories',$categories);
    }


    public function createArticle(PostArticleRequest $request){

        $title  = $request->input('articleName');
        $category = $request->input('articleCategory');
        $subcate = $request->input('articleSubCate');
        $content = $request->input('article-editor');

        $article = new Article();
        $article->category_id = $category;
        $article->sub_category = $subcate;
        $article->title = $title;
        $article->content = $content;

        //save article
        $article->save();

        return redirect('articles')->with('message','Article has been posted successfully');

    }

    /**
     * show all posted articles
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showArticlesList(){

        $articles = Article::all();

        return view('articles')->with('articles',$articles);
    }
}
