<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function addCategory(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            $this->validate($request,[
                'name' => 'required',
                'parent_category' => 'required',
                'url' => 'required',
                'status' => 'required',
            ]);
    
            $category = new Category;
            $category->name = $data['name'];
            $category->parent_category = $data['parent_category'];
            $category->url = $data['url'];
            $category->status = $data['status'];
            $category->save();
        }
    }
}
