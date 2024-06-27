<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use function Laravel\Prompts\form;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function categoryList(){
        $categories = DB::table('categories')
        ->select('categories.*')
        ->paginate(10);
        // ->get();
        return view('./admin/categoryList',compact('categories'));
    }
    public function addCategory(){
        return view('./admin/addCategory');
    }
    public function addCategoryProcess(Request $request){
        $path = $request->file('image')->store('images', 'public');
        $url = Storage::url($path);
        $uuid=Str::uuid()->toString();
        $category= new Category();
        $category->name=$request->name;
        $category->image=$url;
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
    public function searchCategory(Request $request)
    {
        $search = $request->input('search');
        $categories = DB::table('categories')
        // ->join('roles', 'roles.id', '=', 'staff.role_id')
        ->select('categories.*')
        ->where('categories.name', 'like', "%$search%")
        ->paginate(10);
        return view('admin.categoryList', compact('categories'));
    }
}
