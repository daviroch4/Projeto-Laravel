@extends('layouts.crud')

@section('title', 'Atualizar tipo')

@section('content')
<form class="w-full bg-white dark:bg-gray-800 p-6 rounded-lg shadow" action="{{ url('types/update') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $type->id }}">

    <h1 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Atualizar Tipo</h1>

    <label class="block mb-1 text-gray-700 dark:text-gray-300">Nome:</label>
    <input class="w-full p-2 mb-4 rounded border dark:bg-gray-700 dark:text-white" name="name" type="text" value="{{ $type->name }}" />

    <x-meu-button>
        Salvar
    </x-meu-button>

</form>
@endsection