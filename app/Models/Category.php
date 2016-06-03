<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name'];

    //every category has many articles
    public function article(){

        $this->hasMany('App\Models\Article','category_id');

    }
}
