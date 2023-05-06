<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Industry;
use App\Models\Type;
use App\Models\Sheet;

class PostController extends Controller
{
    public function index(Industry $inds)//インポートしたPostをインスタンス化して$postとして使用。
    {
        //return $inds->get();//$indsの中身を戻り値にする。
        return view('index/index')->with(['inds' => $inds->get()]);
    }
    public function type(Type $type)
    {
        return view('index/type')->with(['types' => $type->get()]);
    }
    public function comp(Company $comps)
    {
        return view('index/company')->with(['comps' => $comps->get()]);
    }
    public function sheet(Sheet $sheets)
    {
        return view('index/sheet')->with(['sheets' => $sheets->get()]);
    }
    public function create()
    {
        return view('index/escreate');
    }
    public function estore(Request $request, Sheet $sheet)
    {
        $input = $request['epost'];
        $sheet->fill($input)->save();
        return redirect('/posts/' . $sheet->id);
    }
}
