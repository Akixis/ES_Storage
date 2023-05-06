<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Industry;

class EsController extends Controller
{
    public function index(Post $post)
    {
        //return view('menu/menu')->with(['posts' => $post->get()]);  
       //$～がテーブル、blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。menuを返す
       return $post->get();
    }
    public function industry(Industry $industry)
    {
        return view('index.type')->with(['types' => $industry->getByCategory()]);
    }
}
