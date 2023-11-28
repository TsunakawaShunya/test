<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">{{ $post->title }} </h1>
        <a href="/categolies/{{ $post->categoly->id }}">{{ $post->categoly->name }}</a>
        <div class='content'>
            <div class='content-post'>
                <h3>本文</h3>
                <p class='body'>{{ $post->body }}</p>
            </div>
        </div>
        
        <footer>
            <a href="/posts/{{ $post->id }}/edit">編集</a>
            <a href="/">戻る</a>
        </footer>
    </body>
</html>