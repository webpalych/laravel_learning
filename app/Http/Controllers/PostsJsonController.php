<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

use App\Http\Requests;

class PostsJsonController extends Controller
{
    public function index()
    {

        $posts = Post::select(['id', 'title', 'excerpt', 'slug', 'published_at'])
            ->with('categories')
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
