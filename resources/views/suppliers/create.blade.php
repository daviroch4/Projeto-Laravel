@extends('layouts.crud')

@section('title', 'Cadastrar fornecedor')

@section('content')
<form class="w-full bg-white dark:bg-gray-800 p-6 rounded-lg shadow" action="{{ url('suppliers/new') }}" method="POST">
    @csrf

    <h1 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Cadastrar Fornecedor</h1>

    <x-meu-input name="name" label="Nome:" />

    @error('name')
    <p class="text-red-600 mb-4 text-sm">{{ $message }}</p>
    @enderror

    <x-meu-input name="email" label="Email:" type="email" />

    @error('email')
    <p class="text-red-600 mb-4 text-sm">{{ $message }}</p>
    @enderror

    <x-meu-input name="phone" label="Telefone:" type="text" />

    @error('phone')
    <p class="text-red-600 mb-4 text-sm">{{ $message }}</p>
    @enderror

    <x-meu-button>
        Salvar
    </x-meu-button>

</form>
@endsection