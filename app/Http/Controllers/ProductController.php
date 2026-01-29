<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Http\Middleware\checkTimeAccess;
// use Illuminate\Routing\Controllers\HasMiddleware;
use App\Models\Product;


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
        return view('product.index', ['products' => $product]);
    }
    public function create()
    {
        return view("product.add");
     }
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        return redirect('/product');
    }
    public function edit(string $id)
    {
        $product = Product::find(11);
        return view("product.edit",['product'=> $product]);
    }
    public function update(Request $request, string $id)
    {
        $product = Product::find(11);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        return redirect('/product');
    }
}
