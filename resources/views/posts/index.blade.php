<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Все посты</title>
</head>
<body>
<h1>Все посты</h1>
@foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    <span>{{ $post->published_at }}</span>
    <p>{{ $post->excerpt }}</p>
    <a href="{{ route('get_post', ['slug'=> $post->slug]) }}">Читать далее</a>
    <hr>
@endforeach

{{ $posts->links() }}
</body>
</html>