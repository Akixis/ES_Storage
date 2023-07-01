<?php

namespace App\Http\Controllers;
use App\Models\Post;
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
        //return $inds->get();//$indsの中身を戻り値にする。
        return view('category/maincate')->with(['categories' => $category->get()]);
        
    }
    //メインルート
      public function index(Industry $inds)//インポートしたPostをインスタンス化して$postとして使用。
    {
        
        return view('index/index')->with(['inds' => $inds->get()]);
    }
    public function industry(Industry $industry)
    {
        return view('index/type')->with(['types' => $industry->getByCategory()]);
    }
    public function type(Type $type,Company $company)
    {
        return view('index/company')->with(['types' => $type,'companies' => $company->getPaginateByLimit()]);
    }
    public function company(Company $company,Sheet $sheet)
    {
        return view('index/sheet')->with(['company'=>$company,'sheets' => $sheet->getPaginateByLimit()]);
    }
    public function cates(Category $category)
    {
        return view('category.category')->with(['sheets' => $category->getByCategory()]);
    }
    
    //詳細画面
    public function show(Company $company,Sheet $sheet)
    {
        return view('index/show')->with(['company'=>$company,'sheet' => $sheet]);
    }
    
    //es投稿用
    public function create(Category $category,Company $company)
    {
        return view('index/escreate')->with(['categories' => $category->get(),'company'=>$company]);
    }
    public function estore(PostRequest $request, Sheet $sheet)//保存
    {
        $input = $request['epost'];
        $sheet->fill($input)->save();
        return redirect('/posts/' . $sheet->id);
    }
    
    //企業追加用
     public function ccreate(Type $type)
    {
        return view('index/cmcreate')->with(['type' => $type]);
    }
     public function cstore(Request $request, Company $company)
    {
        $input = $request['cpost'];
        $company->fill($input)->save();
        return redirect('/types/'. $company->type_id);
        
    }
    public function cdelete(Company $company)
    {
        $company->delete();
        return redirect('/types/'.$company->type_id);
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
        return redirect('/companies/'.$sheet->company_id);
    }
}
