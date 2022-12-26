<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
       
        return view('admin.category.index',compact('category'));
    }

    public function add()
    {
        return view('admin.category.add');
    }

    public function create(Request $request)
    {
        
        // dd(gettype($status));
        Category::create([
            'name'=>$request->name,
            'status'=>(int)($request->status)
        ]);
    }
}
