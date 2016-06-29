<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoriesController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return back()->with('message', '��������� ���������');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return back()->with(['message' => "��������� " . $category->title . " �������"]);
    }

    public function edit($id)
    {
        $category=Category::find($id);
        return view('admin.categories.edit',['category'=>$category]);
    }

}
