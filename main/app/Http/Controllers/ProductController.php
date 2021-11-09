<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()->get();
        return response()->json($products, Response::HTTP_OK);
    }

    public function show(Product $product)
    {
        return response()->json($product, Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
