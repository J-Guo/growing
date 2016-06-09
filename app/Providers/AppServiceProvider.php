<?php

namespace App\Providers;

use App\Models\Article;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //create dynamic left side bar


        //get all the sub categories of articles classified as different category
        $php_subcate = Article::where('category_id',1)
                                ->groupBy('sub_category')
                                ->get();

        $js_subcate = Article::where('category_id',2)
                                ->groupBy('sub_category')
                                ->get();
        $db_subcate = Article::where('category_id',3)
                                ->groupBy('sub_category')
                                ->get();

        $laravel_cate = Article::where('category_id',4)
                                ->groupBy('sub_category')
                                ->get();

        $webhosting_cate = Article::where('category_id',5)
                                ->groupBy('sub_category')
                                ->get();

        $frontend_cate = Article::where('category_id',6)
                                ->groupBy('sub_category')
                                ->get();

        $other_cate = Article::where('category_id',7)
                              ->groupBy('sub_category')
                              ->get();

        view()->share([
            'php_subcate' => $php_subcate,
            'js_subcate' => $js_subcate,
            'db_subcate' => $db_subcate,
            'laravel_subcate' => $laravel_cate,
            'webhosting_subcate' => $webhosting_cate,
            'frontend_subcate' => $frontend_cate,
            'other_subcate' => $other_cate
        ]);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
