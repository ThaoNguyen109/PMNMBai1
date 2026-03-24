<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Http\Middleware\checkTimeAccess;
// use Illuminate\Routing\Controllers\HasMiddleware;
use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    // public function middleware(){
    //     return[
    //         checkTimeAccess::class,
    //     ];
    // }
    // public function index()
    // {
    //     $title = "Product List";
    //     return view("product.index", ['title' => $title,
    //         'products' =>[
    //             ['id' => 1, 'name' => 'Product A', 'price' => 100],
    //             ['id' => 2, 'name' => 'Product B', 'price' => 200],
    //             ['id' => 3, 'name' => 'Product C', 'price' => 300],
    //         ]
    //     ]);
    // }
    // public function getDetail(string $id = "123")
    // {
    //    return view("product.productDetail", ['id' => $id]);
    // }
    // public function create()
    // {
    //    return view("product.add");
    // }
    // public function store(Request $request)
    // {
    //    return $request->all();
    // }
    public function index()
    {

        $product = Product::all();
        return view('admin.product.index', ['products' => $product]);
    }
    public function create()
    {
        $categories = Category::where('is_delete', 0)->get();

        return view("admin.product.add", [
            'categories' => $categories
        ]);
     }
    public function store(Request $request)
    {
        $data = $this->validateProduct($request);

        $data['is_active'] = $request->is_active ?? 0;

        Product::create($data);

        return redirect('/admin/products')->with('success', 'Thêm thành công');
    }

    public function edit(string $id)
    {
        $product = Product::find($id);
        $categories = Category::where('is_delete', 0)->get();

        return view("admin.product.edit", [
            'product' => $product,
            'categories' => $categories
        ]);
    }
    public function update(Request $request, string $id)
    {
        $data = $this->validateProduct($request);

        $data['is_active'] = $request->is_active ?? 0;

        $product = Product::findOrFail($id);
        $product->update($data);

        return redirect('/admin/products')->with('success', 'Cập nhật thành công');
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->is_delete = 1;
        $product->save();
        return redirect('/admin/products');
    }

    private function validateProduct(Request $request)
{
    return $request->validate([
        'name' => 'required',
        'price' => 'required|numeric|min:0',
        'sale_price' => 'nullable|numeric|min:0|lte:price',
        'stock' => 'required|integer|min:0',
        'category_id' => 'nullable|exists:categories,id',
        'description' => 'nullable',
        'image' => 'nullable|string',
        'is_active' => 'nullable|boolean'
    ]);
}
}
