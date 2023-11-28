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
            <div class="category">
                <h2>Category</h2>
                <select name="post[categoly_id]">
                    @foreach($categolies as $categoly)
                        <option value="{{ $categoly->id }}">{{ $categoly->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="title">
                <h2>Title</h2>
                <input type="text" name=post[title] placeholder="タイトル" value="{{ old('post.title') }}">
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>body</h2>
                <textarea name=post[body] placeholder="本文">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="保存">
        </form>
        <footer>
            <a href="/">戻る</a>
        </footer>
    </body>
</html>