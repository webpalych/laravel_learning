<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class PostsJsonController extends Controller
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

        return response()->json($data);

    }

    public function getPost($slug)
    {

        $post = DB::table('posts')
            ->select(['title','content'])
            ->where('published','=','1')
            ->where('slug','=',$slug)
            ->get();

        if ($post)
        {
            return response()->json($post);
        }

        abort(404);

    }
}
