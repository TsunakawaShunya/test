<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <a href="/posts/create">ブログ作成</a>
        <div class='posts'>
            @forEach($posts as $post)
                <div class='post'>
                    <a href="/posts/{{ $post->id }}">
                        <h2 class='title'>{{ $post->title }}</h2>
                    </a>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforEach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>