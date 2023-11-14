<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;        // Postモデルクラスのuse宣言を追加

class PostController extends Controller
{
    public function index(Post $post)
    {
        return $post->get();
    }
}
