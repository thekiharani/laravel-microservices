<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
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

    public function store(ProductRequest $request)
    {
        $product = Product::create([
            'name' => $request->input('name'),
            'image' => $request->input('image')
        ]);
        return response()->json(['message' => 'created', 'product' => $product], Response::HTTP_CREATED);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update([
            'name' => $request->input('name'),
            'image' => $request->input('image')
        ]);
        return response()->json(['message' => 'updated', 'product' => $product], Response::HTTP_OK);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['message' => 'trashed'], Response::HTTP_OK);
    }
}
