<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){

$category = Category::all();
    return view (('admin.categories.index'),compact('categories'));
    }



    public function store(Request $request){

$request->validate([
    'name'=>'required|string|max:100|unique:categories,name',
    'serial_no'=> 'nullable|numeric|unique:categories,serial_no',
    'status'=>'required|string|in:active,inactive'
]);

$category = new Category();
$category->name =$request->name;
$category->slug = Str::slug($request->name);
$category->serial_no =$request->serial_no;
$category->status =$request->status;
$category->save();
return back()->with('success','Category added successfully');
}
}
