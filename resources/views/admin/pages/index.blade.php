@extends('layouts.admin')

@section('header_title', 'Gestão de Conteúdos das Páginas')

@section('content')
    <div class="bg-white p-6 shadow-sm max-w-4xl mx-auto">
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-100">
            <h2 class="font-primary font-bold text-lg text-[#1a2c42]">Páginas Estáticas do Website</h2>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-sm">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200 text-xs font-bold uppercase tracking-wider text-gray-500">
                        <th class="p-4">Nome da Página</th>
                        <th class="p-4">Identificador (page_key)</th>
                        <th class="p-4 text-right">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-150">
                    @foreach($pages as $key => $name)
                        <tr class="hover:bg-gray-50/50">
                            <td class="p-4 font-semibold text-[#1a2c42]">
                                {{ $name }}
                            </td>
                            <td class="p-4 text-gray-500 font-mono text-xs">
                                /{{ $key === 'home' ? '' : $key }}
                            </td>
                            <td class="p-4 text-right">
                                <a href="{{ route('admin.pages.edit', $key) }}" 
                                   class="inline-block bg-[#1a2c42] hover:bg-[#e51718] text-white px-4 py-2 text-xs font-bold uppercase tracking-wider transition-colors shadow-sm">
                                    Editar Secções
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
