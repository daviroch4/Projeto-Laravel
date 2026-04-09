@extends('layouts.crud')

@section('title', 'Cadastrar produto')

@section('content')
<form class="w-full bg-white dark:bg-gray-800 p-6 rounded-lg
shadow" action="{{ url('products/new') }}" method="POST">
    @csrf

    <h1 class="text-2xl font-bold mb-6 text-gray-900
dark:text-white">Cadastrar Produto</h1>

    <x-meu-input name="name" label="Nome:" />

    @error('name')
    <p class="text-red-600 mb-4 text-sm">{{ $message }}</p>
    @enderror

    <x-meu-input name="quantity" label="Quantidade:" type="number" />

    @error('quantity')
    <p class="text-red-600 mb-4 text-sm">{{ $message }}</p>
    @enderror

    <x-meu-input name="description" label="Descrição:" type="text" />

    <x-meu-input name="price" label="Preço:" type="number" />

    @error('price')
    <p class="text-red-600 mb-4 text-sm">{{ $message }}</p>
    @enderror


    <select class="w-full p-2 mb-4 rounded border dark:bg-gray-700 dark:text-white" name="type_id">
        <option value="">Selecione</option>

        @foreach($types as $type)
        <option value="{{ $type->id }}">
            {{ $type->name }}
        </option>
        @endforeach
    </select>

    <x-meu-button>
        Salvar
    </x-meu-button>


</form>
@endsection