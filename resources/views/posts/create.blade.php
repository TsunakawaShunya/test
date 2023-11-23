<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>BLOG NAME</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name=post[title] placeholder="タイトル">
            </div>
            <div class="body">
                <h2>body</h2>
                <textarea name=post[body] placeholder="本文"></textarea>
            </div>
            <input type="submit" value="store">
        </form>
        <footer>
            <a href="/">戻る</a>
        </footer>
    </body>
</html>