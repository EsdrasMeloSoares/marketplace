<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Storage;

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
            'imagens.*'     => 'image|mimes:jpeg,png,jpg|', 
            'checkboxes'    => 'required|array|min:1',
            'checkboxes.*'  => 'string',
            'comment'       => 'string',

            'image_1' => 'nullable|image|mimes:jpeg,png,jpg,svg|',
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,svg|',
            'image_3' => 'nullable|image|mimes:jpeg,png,jpg,svg|',
            'image_4' => 'nullable|image|mimes:jpeg,png,jpg,svg|',
            'image_5' => 'nullable|image|mimes:jpeg,png,jpg,svg|',
        ], [
            'product_name.required'  => 'O nome do produto é obrigatório',
        ]);

        $product =Product::create([
            'name' => $validatedData['product_name'],
            'category_id' => $validatedData['categories'],
            'tamanhos' => json_encode($validatedData['checkboxes']),
            'stock' => $validatedData['stock'],
            'price' => $validatedData['price'],
            'description' => $validatedData['comment'],
        ]);

            $directory = "products/{$product->id}";

            $imagePaths = [];

            for ($i = 1; $i <= 5; $i++) {
                $imageKey = "image_{$i}";

                if ($request->hasFile($imageKey) && $request->file($imageKey)->isValid()) {
                    $imagePath = $request->file($imageKey)->store($directory, 'public');

                    $imagePaths[] = [
                        'product_id' => $product->id,
                        'image_path' => str_replace('public/', '', $imagePath),
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
            }

            if (!empty($imagePaths)) {
                DB::table('product_images')->insert($imagePaths);
            }


            return redirect()->route('stock')->with('success', 'Produto criado com sucesso!');

        }   

    public function destroy($id)
    {
        // Encontre o produto
        $product = Product::findOrFail($id);

        // Obtenha os caminhos das imagens do banco de dados (exemplo)
        $imagePaths = $product->images->pluck('image_path')->toArray();

        // Excluir os arquivos das imagens (se existirem)
        foreach ($imagePaths as $imagePath) {
            // Use o Storage para deletar os arquivos
            if (Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }
        }

        // Se precisar excluir a pasta, verifique se ela está vazia
        $directory = 'public/images/product/' . $product->id;  // Ajuste conforme a estrutura do seu storage
        if (Storage::exists($directory) && count(Storage::files($directory)) == 0) {
            Storage::deleteDirectory($directory);
        }

        // Agora, exclua o produto
        $product->delete();

        // Redirecionar com sucesso
        return redirect()->route('stock')->with('success', 'Produto deletado com sucesso!');
    }


}
