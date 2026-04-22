@extends('layouts.crud')

@section('title', 'Cadastrar tipo')

@section('content')
<form class="w-full bg-white dark:bg-gray-800 p-6 rounded-lg shadow" action="{{ url('types/new') }}" method="POST">
    @csrf

    <h1 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Cadastrar Tipo</h1>

    <x-meu-input name="name" label="Nome:" />

    @error('name')
    <p class="text-red-600 mb-4 text-sm">{{ $message }}</p>
    @enderror

    <x-meu-button>
        Salvar
    </x-meu-button>

</form>
@endsection