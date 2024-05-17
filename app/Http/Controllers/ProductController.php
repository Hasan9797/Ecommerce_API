<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProductController extends Controller
{

    public function index(): AnonymousResourceCollection
    {
        return ProductResource::collection(Product::with('stock')->cursorPaginate(20));
    }


    public function store(StoreProductRequest $request): JsonResponse
    {
        $newProduct = Product::create($request->all());
        return response()->json(['success' => true, 'message' => 'Product added successfully', $newProduct]);
    }

    public function show($product): JsonResponse
    {
        $product = Product::find($product);
        if ($product) {
            return response()->json(['success' => true, 'data' => new ProductResource($product)]);
        }
        return response()->json(['success' => false, 'message' => 'Product not found']);
    }


    public function update(UpdateProductRequest $request, Product $product): JsonResponse
    {
        $currentProduct = $product;
        $currentProduct->update($request->all());
        $currentProduct->refresh();

        return response()->json(['success' => true, 'message' => 'Product updated successfully', $currentProduct]);
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['success' => true, 'message' => 'Product deleted successfully']);
    }
}
