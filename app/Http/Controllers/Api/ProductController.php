<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request){
        $store = Product::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
        ]);
        if($store){
            return response()->json([
                'status' => true,
                'msg' => 'Product has been created successfully',
                'data' => $store
            ]);
        }
    }

    public function getAllProducts(){
        $products = Product::with(['category'])->get();
        return response()->json([
            'status' => true,
            'msg' => 'Product has been fetched successfully',
            'data' => $products
        ]);
    }

    public function delete($id){
        $product = Product::find($id);
        if($product){
            $product->delete();
            return response()->json([
                'status' => true,
                'msg' => 'Product has been deleted successfully',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'msg' => 'Product not found',
            ]);
        }
    }

    public function update(Request $request){
        $product = Product::find($request->id);
        if($product){
            $updateData = [
                'category_id' => $request->category_id,
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'status' => $request->status
            ];
            $product->update($updateData);
            return response()->json([
                'status' => true,
                'msg' => 'Product has been updated successfully',
                'data' => $product
            ]);
        } else {
            return response()->json([
                'status' => false,
                'msg' => 'Product not found',
            ]);
        }
    }
}
