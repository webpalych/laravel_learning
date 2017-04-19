<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;
use App\Post;

use App\Http\Requests;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::select(['id', 'title', 'excerpt', 'slug', 'published_at'])
            ->with('categories')
            ->where('published','=','1')
            ->paginate(2);

        $data = [
            'title' => 'Все посты',
            'posts' => $posts
        ];

        return view('posts.index', $data);

    }

    public function getPost($slug)
    {

        $post = Post::select(['title','content'])
            ->where('published','=','1')
            ->where('slug','=',$slug)
            ->firstOrFail();

            return view('posts.single', ['post' =>$post]);


    }

    public function getPostsByCategory($slug)
    {
        $category = Category::select(['id','title'])
            ->where('slug', $slug)
            ->first();
        $posts = $category->posts()
            ->with('categories')
            ->where('published','=','1')
            ->paginate(6);


//        foreach ( $posts as &$post )
//        {
//            $categories = $post->categories()->select(['title','slug'])->get();
//            $post->categories = $categories;
//        }

        $data = [
            'title' => $category->title,
            'posts' => $posts
        ];

        return view('posts.index', $data);
    }

}
