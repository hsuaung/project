<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\form;
class CategoryController extends Controller
{
    public function categoryList(){
        $categories = DB::table('categories')
        ->select('categories.*')->get();
        return view('./admin/categoryList',compact('categories'));
    }
    public function addCategory(){
        return view('./admin/addCategory');
    }
    public function addCategoryProcess(Request $request){
        $uuid=Str::uuid()->toString();
        $category= new Category();
        $category->name=$request->name;
        $category->uuid=$uuid;
        $category->status="Active";
        $category->save();
        return redirect()->to('/categoryList');
    }
    public function editCategory(){
        dd("edit category");
    }
    public function deleteCategoryProcess($id){
        DB::table('categories')->where('id', $id)->delete();
        return redirect()->to('/categoryList');
    }
}
