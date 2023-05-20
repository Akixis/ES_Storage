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
    //名前付け
      public function maincate(Category $category)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('category/maincate')->with(['categories' => $category->get()]);
        //return $category->get();
    }
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
    public function company(Type $type,Company $company)
    {
        return view('index/company')->with(['comps' => $company->get(),'type'=>$type]);
    }
    public function sheet(Sheet $sheet,Company $company)
    {
        return view('index/sheet')->with(['sheets' => $sheet->getPaginateByLimit()]);
    }
    //詳細画面
    public function show(Sheet $sheet)
    {
        return view('index/show')->with(['sheet' => $sheet]);
    }
    
    //es投稿用
    public function create(Category $category,Company $company)
    {
        return view('index/escreate')->with(['categories' => $category->get(),'company'=>$company]);
    }
    public function estore(PostRequest $request, Sheet $sheet)//保存
    {
        $input = $request['epost'];
        $sheet->favo=$request['favo'];
        $isChecked=$request->has('checkbox');
        $sheet->favo=$isChecked ? 1:0;
        $sheet->fill($input);
        $sheet->save();
        return redirect('/posts/' . $sheet->id);
    }
    
    //企業追加用
     public function ccreate(Type $type)
    {
        return view('index/cmcreate')->with(['type' => $type]);
    }
     public function cstore(PostRequest $request, Company $company)
    {
        $input = $request['cpost'];
        $company->fill($input)->save();
        return redirect('/posts/' . $company->id);
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
    //削除
    public function delete(Sheet $sheet)
    {
        $sheet->delete();
        return redirect('/dashboard');
    }
}
