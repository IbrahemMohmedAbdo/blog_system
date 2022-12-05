<?php

namespace App\Http\Controllers\Admin;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCotegoreyRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $category=category::all();
        return view('admin.category.index',[
            'data'=>$category
        ]);
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(StoreCotegoreyRequest $request)
    {
        $data=$request->all();

                // to uplode image right and easy way..
            $filename= time().$request->file('image')->getClientOriginalName();
            $path=$request->file('image')->storeAs('images',$filename,'public');
            $data["image"]='/storage/'.$path;




        Category::create($data);
        return redirect('admin/category')->with('mess','added succsessfully');

    }
}
