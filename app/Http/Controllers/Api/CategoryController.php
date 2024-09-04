<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class CategoryController extends Controller
{
    public function store(Request $request){
        $store = Category::create(['name' => $request->name]);
        if($store){
            return response()->json([
                'success' => true,
                'data' => $store
            ]);
        }
    }
}
