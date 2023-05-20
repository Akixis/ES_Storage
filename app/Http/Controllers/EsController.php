<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Industry;
use App\Models\Type;
use App\Models\Company;
use App\Models\Sheet;
use App\Models\Category;

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
    public function type(Type $type)
    {
        return view('index.company')->with(['companies' => $type->getByCategory(),'type'=>$type]);
    }
    public function company(Type $type,Company $company)
    {
        return view('index.sheet')->with(['sheets' => $company->getByCategory(),'company'=>$company,'type'=>$type]);
    }
    public function cates(Category $category)
    {
        return view('category.category')->with(['sheets' => $category->getByCategory()]);
    }
}
