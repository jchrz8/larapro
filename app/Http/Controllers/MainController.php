<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(){
        return view('main', [
            'products' => Shop::latest()->paginate(6)//ile chcesz wyswietlic (odrazu rozdziela na strony ?page=2), get() - wez wszystkie
        ]);
    }
    public function show(Shop $product){
        return view('components.show_single', [
            'product' => $product
        ]);
    }
}
