<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'excerpt',
        'img',
        'published',
        'category_id'
    ];

    protected $dates = ['deleted_at'];

    public function categories() {
        return $this->belongsToMany('App\Category');
    }
}
