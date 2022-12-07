<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';

    public function existingCat(){
        $category = Category::where('status', 1)->get();

        return $category;
    }

    public function toggle($id){
        $category = Category::where('id', $id)->first();

        $category->status = !$category->status;
        return $category->save();
    }
}
