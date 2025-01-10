<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index() {
        $title = 'Estoque';
        $products = Product::paginate(10);
        return view('dashboard.stock.index', compact('title', 'products'));
    }
    
    public function create(){
        $title = "Adicionar produto";

        $categories = Category::all();
        return view('dashboard.stock.create', compact('title', 'categories'));
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'product_name'  => 'required|string|max:255',
        'categories'    => 'required|exists:categories,id',
        'price'         => 'required|numeric',
        'stock'         => 'required|numeric',
        'imagens.*'     => 'image|mimes:jpeg,png,jpg|max:2048', 
        'checkboxes'    => 'required|array|min:1',
        'checkboxes.*'  => 'string',
        'comment'       => 'string',
    ]);

    Product::create([
        'name' => $validatedData['product_name'],
        'category_id' => $validatedData['categories'],
        'tamanhos' => json_encode($validatedData['checkboxes']),
        'stock' => $validatedData['stock'],
        'price' => $validatedData['price'],
        'description' => $validatedData['comment'],
    ]);


    return redirect()->route('dashboard.stock')->with('success', 'Produto criado com sucesso!');

}


}
