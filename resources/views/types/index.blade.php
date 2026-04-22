@extends('layouts.crud')

@section('title', 'Listar tipos')

@section('content')
<div class="w-full bg-white dark:bg-gray-800 p-6 rounded-lg shadow mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Tipos</h1>
        <a href="{{ url('types/new') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Cadastrar</a>
    </div>

    @if(session('success'))
    <p class="text-green-600 mb-4">{{ session('success') }}</p>
    @endif

    <table class="w-full table-auto border-collapse border border-gray-300 dark:border-gray-600">
        <thead>
            <tr class="bg-gray-100 dark:bg-gray-700">
                <th class="px-4 py-2 text-left text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600">Nome</th>
                <th class="px-4 py-2 text-left text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($types as $type)
            <tr class="border-b border-gray-300 dark:border-gray-600">
                <td class="px-4 py-2 text-gray-900 dark:text-white">{{ $type->name }}</td>
                <td class="px-4 py-2">
                    <div class="flex justify-center space-x-2">
                        <a href="{{ url('/types/update', ['id' => $type->id]) }}" class="bg-gray-600 text-white px-3 py-1 rounded hover:bg-gray-700">Editar</a>
                        <a href="{{ url('/types/delete', ['id' => $type->id]) }}" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Excluir</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection