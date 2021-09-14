<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Validator;

class CategoryController extends Controller
{
    public function addCategory(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            $rules = [
    			'name' => 'required',
                'parent_category' => 'required',
                'url' => 'required',
                'status' => 'required',
    		];
    		$customMessage = [
    			'name.required' => 'Name is required',
    			'parent_category.required' => 'Parent Category is required',
    			'url.required' => 'Url is required',
    			'status.required' => 'Status is required',
    		];
    		$validator = Validator::make($data,$rules,$customMessage);
            if($validator->fails()){
                return response()->json($validator->errors(),422);
            }
    
            $category = new Category;
            $category->name = $data['name'];
            $category->parent_category = $data['parent_category'];
            $category->url = $data['url'];
            $category->status = $data['status'];
            $category->save();
        }
    }
}
