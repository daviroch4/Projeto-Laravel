@extends('layouts.crud')

@section('title', 'Dashboard')

@section('content')
<div class="w-full bg-white dark:bg-gray-800 p-6 rounded-lg shadow mx-auto">
    <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Dashboard</h1>
    <p class="text-gray-500 dark:text-gray-400 mb-8">Bem-vindo ao sistema de gerenciamento da loja virtual!</p>

    <div class="flex flex-col gap-6">

        <a href="{{ url('/products') }}" class="block bg-blue-600 hover:bg-blue-700 text-white p-6 rounded-lg shadow transition">
            <h2 class="text-xl font-bold mb-2">Produtos</h2>
            <p class="text-blue-100">Gerencie os produtos da loja.</p>
        </a>

        <a href="{{ url('/types') }}" class="block bg-green-600 hover:bg-green-700 text-white p-6 rounded-lg shadow transition">
            <h2 class="text-xl font-bold mb-2">Tipos</h2>
            <p class="text-green-100">Gerencie os tipos de produtos.</p>
        </a>

        <a href="{{ url('/suppliers') }}" class="block bg-gray-600 hover:bg-gray-700 text-white p-6 rounded-lg shadow transition">
            <h2 class="text-xl font-bold mb-2">Fornecedores</h2>
            <p class="text-gray-100">Gerencie os fornecedores da loja.</p>
        </a>

    </div>
</div>
@endsection