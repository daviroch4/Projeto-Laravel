<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use App\Models\Type;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create()
    {
        return view('products.create', [
            'types' => Type::all(),
            'suppliers' => Supplier::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:50',
            'quantity' => 'required|gt:0',
            'price' => 'required|gt:0'
        ]);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'type_id' => $request->type_id,
            'supplier_id' => $request->supplier_id
        ]);

        return redirect('/products')->with('success', 'Produto salvo com sucesso!');
    }

    public function index()
    {
        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', [
            'product' => $product,
            'types' => Type::all(),
            'suppliers' => Supplier::all()
        ]);
    }

    public function update(Request $request)
    {
        $product = Product::find($request->id);
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'type_id' => $request->type_id,
            'supplier_id' => $request->supplier_id
        ]);
        return redirect('/products')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products')->with('success', 'Produto excluído com sucesso!');
    }
}