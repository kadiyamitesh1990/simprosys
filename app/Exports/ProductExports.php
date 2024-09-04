<?php 
namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Product;

class ProductExports implements FromView{
    
    public function view(): View{
        $products = Product::with(['category'])->get();

        return view('exports.products', [
            'products' => $products
        ]);
    }
}
