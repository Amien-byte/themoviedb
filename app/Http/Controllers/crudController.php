<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class crudController extends Controller
{
    //
    public function index(){
        $categories = Category::get();
        
        return view('crud', ['categories' => $categories]);
    }

    public function show(Request $request){

        return $request->id."asdas";
    }

    public function toggle(Request $request){
        $categories = Category::get();
        $id = $request->id;

        if(Category::toggle($id))
            return redirect('crud')->with(['categories' => $categories, 'status' => 'success']);
            
        return redirect('crud')->with(['categories' => $categories, 'status' => 'failed']);
    }
}
