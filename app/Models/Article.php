<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";

    protected $fillable = [
        'category_id','sub_category','title','content'
    ];

    //an article belongs to a category
    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }
}
