<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return view('suppliers.index', [
            'suppliers' => Supplier::all()
        ]);
    }

    public function create()
    {
        return view('suppliers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:50',
            'email' => 'required|email',
            'phone' => 'required|min:8'
        ]);

        Supplier::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return redirect('/suppliers')->with('success', 'Fornecedor cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('suppliers.edit', ['supplier' => $supplier]);
    }

    public function update(Request $request)
    {
        $supplier = Supplier::find($request->id);
        $supplier->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        return redirect('/suppliers')->with('success', 'Fornecedor atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect('/suppliers')->with('success', 'Fornecedor excluído com sucesso!');
    }
}