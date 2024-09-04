<?php 
namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Category;

class CategoryExports implements FromView{
    
    public function view(): View{
        $categories = Category::all();

        return view('exports.categories', [
            'categories' => $categories
        ]);
    }
}
