<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;

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
    public function editCategory(Request $request){
        $category = DB::table('categories')
        ->select('categories.*')
        ->where('categories.id', $request->id)
        ->first();
        return view('./admin/addCategory',compact('category'));
    }
    public function editCategoryProcess(Request $request){
        Category::where('id', $request->id)->update([
            'name' => $request->name,
        ]);
        return redirect()->to('/categoryList');
    }
    public function deleteCategoryProcess($id){
        DB::table('categories')->where('id', $id)->delete();
        return redirect()->to('/categoryList');
    }
}
