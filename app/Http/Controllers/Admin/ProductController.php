<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Product_photo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function productList()
    {

        $productlist = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
            ->where('product_photos.isPrimary', 1)
            ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')
            ->paginate(10);
       
        return view('admin.productList', compact('productlist'));
    }
    public function addProduct()
    {
        $categories = DB::table('categories')
            ->select('categories.*')->get();

        $staffs = DB::table('staff')
            ->select('staff.*')->get();
        return view('admin.product', compact('categories', 'staffs'));
    }
    public function addProductProcess(Request $request)
    {

        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category;
        $product->staff_id = Auth::guard('admin')->user()->id;
        $product->detail = '';
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->description = $request->description;
        $product->feature = '';
        $product->additioninfo = '';
        $uuid = Str::uuid()->toString();
        $product->uuid = $uuid;
        $product->status = "Active";
        $product->save();


        if ($request->hasFile('images')) {
            $images = $request->images;

            $i = 0;
            foreach ($images as $image) {
                $path = $image->store('images/products', 'public');
                $url = Storage::url($path);
                $product_photo = new Product_photo();
                $product_photo->name = $product->name;
                $product_photo->product_id = $product->id;
                $product_photo->image = $url;
                $uuid = Str::uuid()->toString();
                $product_photo->uuid = $uuid;
                $product_photo->status = "test";
                $product_photo->isPrimary = $i == 0 ? 1 : 0;
                $i++;
                $product_photo->save();
            }
            return redirect()->to('/admin/productList');
        }
    }


    public function editProduct($id)
    {


        $categories = DB::table('categories')
            ->select('categories.*')->get();

        $staffs = DB::table('staff')
            ->select('staff.*')->get();
        $product = DB::table('products')
            ->select('products.*')
            ->where('id', '=', $id)
            // ->where('products.id', $id)
            ->first();

        return view('./admin/product', compact('categories', 'staffs', 'product'));
    }
    public function editProductProcess(Request $request)
    {
        DB::table('product_photos')->where('product_id', $request->id)->delete();
        if ($request->hasFile('images')) {
            $images = $request->images;
            $i = 0;
            foreach ($images as $image) {
                $path = $image->store('images', 'public');
                $url = Storage::url($path);
                $product_photo = new Product_photo();
                $product_photo->name = $request->name;
                $product_photo->product_id = $request->id;
                $product_photo->image = $url;
                $uuid = Str::uuid()->toString();
                $product_photo->uuid = $uuid;
                $product_photo->status = "test";
                $product_photo->isPrimary = $i == 0 ? 1 : 0;
                $i++;
                $product_photo->save();
            }
            Product::where('id', $request->id)->update([
                'name' => $request->name,
                'category_id' => $request->category,
                'staff_id' => Auth::guard('admin')->user()->id,
                'detail' => '',
                'price' => $request->price,
                'stock' => $request->stock,
                'description' => $request->description,
                'feature' => '',
                'additioninfo' => '',
            ]);
            return redirect()->to('/admin/productList');
        } else {
          
            return back()->with('error', 'No file uploaded');
        }
    }

    public function deleteProductProcess($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect()->to('/admin/productList');
    }
    public function searchProduct(Request $request)
    {
        $search = $request->input('search');

        $productlist = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
            ->where('product_photos.isPrimary', 1)
            ->where(function ($query) use ($search) {
                $query->where('products.name', 'like', "%$search%")
                    ->orWhere('products.price', 'like', "%$search%")
                    ->orWhere('products.description', 'like', "%$search%")
                    ->orWhere('categories.name', 'like', "%$search%");
            })
            ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')
            ->paginate(10);
        return view('admin.productList', compact('productlist'));
    }
}
