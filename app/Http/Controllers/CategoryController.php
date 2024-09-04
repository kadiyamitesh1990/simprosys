<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\GenerateCategory;
use App\Exports\CategoryExports;
use Excel;

class CategoryController extends Controller
{
    public function create(){
        return view('category_create');
    }

    public function store(Request $request){
        dispatch(new GenerateCategory($request->numbers));
    }

    public function export(){
        return Excel::download(new CategoryExports, 'categories.csv',\Maatwebsite\Excel\Excel::CSV);
    }
}
