<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $title = "Product List";
        return view("product.index", ['title' => $title,
            'products' =>[
                ['id' => 1, 'name' => 'Product A', 'price' => 100],
                ['id' => 2, 'name' => 'Product B', 'price' => 200],
                ['id' => 3, 'name' => 'Product C', 'price' => 300],
            ]
        ]);
    }
    public function getDetail(string $id = "123")
    {
       return view("product.productDetail", ['id' => $id]);
    }
    public function create()
    {
       return view("product.add");
    }
    public function store(Request $request)
    {
       return $request->all();
    }

}
