@extends('layouts.crud')

@section('title', 'Atualizar fornecedor')

@section('content')
<form class="w-full bg-white dark:bg-gray-800 p-6 rounded-lg shadow" action="{{ url('suppliers/update') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $supplier->id }}">

    <h1 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Atualizar Fornecedor</h1>

    <label class="block mb-1 text-gray-700 dark:text-gray-300">Nome:</label>
    <input class="w-full p-2 mb-4 rounded border dark:bg-gray-700 dark:text-white" name="name" type="text" value="{{ $supplier->name }}" />

    <label class="block mb-1 text-gray-700 dark:text-gray-300">Email:</label>
    <input class="w-full p-2 mb-4 rounded border dark:bg-gray-700 dark:text-white" name="email" type="email" value="{{ $supplier->email }}" />

    <label class="block mb-1 text-gray-700 dark:text-gray-300">Telefone:</label>
    <input class="w-full p-2 mb-4 rounded border dark:bg-gray-700 dark:text-white" name="phone" type="text" value="{{ $supplier->phone }}" />

    <x-meu-button>
        Salvar
    </x-meu-button>

</form>
@endsection