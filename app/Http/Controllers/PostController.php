<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    // 一覧
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(5)]);
    }
    
    // 詳細画面
    public function show(Post $post)
    {
        return view('posts.show')->with(['post'=>$post]);
    }
    
    // 新規作成
    public function create()
    {
        return view('posts.create');
    }
    
    // 保存
   public function store(PostRequest $request, Post $post)
   {
       $input = $request['post'];
       $post->fill($input)->save();
       
       return redirect('/posts/' . $post->id);
   }

    // 編集
   public function edit(Post $post)
   {
        return view('posts.edit')->with(['post'=>$post]);
   }
   
   // 更新
   public function update(PostRequest $request, Post $post)
   {
       $input_post = $request['post'];
       $post->fill($input_post)->save();
       
       return redirect('/posts/' . $post->id);
   }
}