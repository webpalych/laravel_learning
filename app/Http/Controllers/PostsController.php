<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class PostsController extends Controller
{
    public function index()
    {

        $posts = DB::table('posts')
            ->select(['title', 'excerpt', 'slug', 'published_at'])
            ->where('published','=','1')
            ->paginate(2);

        $data = [
            'posts' => $posts
        ];

        return view('posts.index', $data);

    }

    public function getPost($slug)
    {

        //$post = DB::select("SELECT * FROM `posts` WHERE (`published` = ?) AND (`slug` = ?)",['1', $slug]);
        $post = DB::table('posts')
            ->select(['title','content'])
            ->where('published','=','1')
            ->where('slug','=',$slug)
            ->get();

        if ($post)
        {
            return view('posts.single', ['post' =>$post[0]]);
        }

        abort(404);

    }
}
