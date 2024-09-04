<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\GenerateProducts;
use App\Exports\ProductExports;
use Excel;

class ProductController extends Controller
{
    public function create(){
        return view('product_create');
    }

    public function store(Request $request){
        dispatch(new GenerateProducts($request->numbers));
    }

    public function export(){
        return Excel::download(new ProductExports, 'products.csv',\Maatwebsite\Excel\Excel::CSV);
    }
}
