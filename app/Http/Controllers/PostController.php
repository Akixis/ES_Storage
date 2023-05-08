<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Industry;
use App\Models\Type;
use App\Models\Company;
use App\Models\Sheet;
use App\Http\Requests\PostRequest;
use App\Models\Category;

class PostController extends Controller
{
    //各階層画面
    public function index(Industry $inds)//インポートしたPostをインスタンス化して$postとして使用。
    {
        //return $inds->get();//$indsの中身を戻り値にする。
        return view('index/index')->with(['inds' => $inds->get()]);
    }
    public function type(Type $type)
    {
        return view('index/type')->with(['types' => $type->get()]);
    }
    public function company(Company $company)
    {
        return view('index/company')->with(['comps' => $company->get()]);
    }
    public function sheet(Sheet $sheet)
    {
        return view('index/sheet')->with(['sheets' => $sheet->getPaginateByLimit()]);
    }
    //詳細画面
    public function show(Sheet $sheet)
    {
        return view('index/show')->with(['sheet' => $sheet]);
    }
    
    //投稿用
    public function create(Category $category)
    {
        return view('index/escreate')->with(['categories' => $category->get()]);
    }
    public function estore(PostRequest $request, Sheet $sheet)
    {
        $input = $request['epost'];
        $sheet->fill($input)->save();
        return redirect('/posts/' . $sheet->id);
    }
    //編集用
    public function edit(Sheet $sheet)
    {
        return view('index/edit')->with(['sheet' => $sheet]);
    }
    
    public function update(PostRequest $request, Sheet $sheet)
    {
        $input_post = $request['epost'];
        $sheet->fill($input_post)->save();

        return redirect('/posts/' . $sheet->id);
    }
}
