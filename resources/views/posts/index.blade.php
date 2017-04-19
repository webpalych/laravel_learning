<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
<h1>{{ $title }}</h1>
@foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    <span>Категории:
        @foreach($post->categories as $category)
            <a href="{{ route('get_posts_by_cat' , ['slug' => $category->slug]) }}">{{ $category->title }}</a>
        @endforeach
    </span> | <span>{{ $post->published_at }}</span>
    <p>{{ $post->excerpt }}</p>
    <a href="{{ route('get_post', ['slug'=> $post->slug]) }}">Читать далее</a>
    <hr>
@endforeach

{{ $posts->links() }}
</body>
</html>