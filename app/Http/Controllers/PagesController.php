<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\View\View;
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


    /**
     * handle create article method
     * @param PostArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
     * show article edit page
     * @param Request $request
     * @return View
     */
    public function showEditArticle(Request $request,$id){

        //get all article categories
        $categories = Category::all();

        $article = Article::find($id);

        return view('edit-article')->with('categories',$categories)->with('article',$article);

    }

    public function editArticle(PostArticleRequest $request){

        dd($request->input());
    }

    /**
     * show all posted articles
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showArticlesList(){

        $articles = Article::all();

        return view('articles')->with('articles',$articles);
    }

    /**
     * show articles list based on category or sub category
     * @param $category
     * @param $sub_cate
     * @return $this
     */
    public function showArticlesListByCategory($category,$sub_cate){

        $cate = 1;
        $articles = null;

        switch ($category) {
            case 'php':
                $cate = 1;
                break;
            case 'javascript':
                $cate = 2;
                break;
            case 'database':
                $cate = 3;
                break;
            case 'laravel':
                $cate = 4;
                break;
            case 'web-hosting':
                $cate = 5;
                break;
            case 'front-end':
                $cate = 6;
                break;
            case 'other':
                $cate = 7;
                break;
        }


        if($sub_cate == 'all'){
            $articles = Article::where('category_id',$cate)->get();
        }
        else{
            $articles = Article::where('category_id',$cate)
                                ->where('sub_category',$sub_cate)->get();
        }

        return view('articles')->with('articles',$articles);

    }

    /**
     * show specific article based on article id
     * @param $id
     * @return View
     */
    public function showArticle($id){

        $article = Article::find($id);


        return view('article')->with('article',$article);
    }
}
