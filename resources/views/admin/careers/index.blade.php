@extends('layouts.admin')

@section('header_title', 'Vagas de Emprego')

@section('content')
    <div class="bg-white p-6 shadow-sm">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6 pb-4 border-b border-gray-100">
            <h2 class="font-primary font-bold text-lg text-[#1a2c42]">Lista de Vagas</h2>
            <a href="{{ route('admin.careers.create') }}" 
               class="bg-[#1a2c42] hover:bg-[#e51718] text-white px-5 py-2.5 text-xs font-bold uppercase tracking-wider transition-colors inline-flex items-center gap-1.5 shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M12 4v16m8-8H4"/>
                </svg>
                Criar Vaga
            </a>
        </div>

        @if($careers->isEmpty())
            <p class="text-sm text-gray-400 py-12 text-center">Nenhuma vaga de emprego aberta.</p>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-sm">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-200 text-xs font-bold uppercase tracking-wider text-gray-500">
                            <th class="p-4">Título da Vaga</th>
                            <th class="p-4">Empresa</th>
                            <th class="p-4">Localização</th>
                            <th class="p-4 text-center">Estado</th>
                            <th class="p-4 text-right">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-150">
                        @foreach($careers as $career)
                            <tr class="hover:bg-gray-50/50">
                                <td class="p-4 font-semibold text-[#1a2c42] truncate">
                                    {{ $career->title }}
                                </td>
                                <td class="p-4 text-gray-700 font-medium">
                                    {{ $career->company }}
                                </td>
                                <td class="p-4 text-gray-500">
                                    {{ $career->location }}
                                </td>
                                <td class="p-4 text-center">
                                    @if($career->is_active)
                                        <span class="inline-flex items-center gap-1 px-2.5 py-0.5 text-xs font-semibold text-green-700 bg-green-50 uppercase">Ativa</span>
                                    @else
                                        <span class="inline-flex items-center gap-1 px-2.5 py-0.5 text-xs font-semibold text-gray-500 bg-gray-100 uppercase">Inativa</span>
                                    @endif
                                </td>
                                <td class="p-4 text-right space-x-2">
                                    <a href="{{ route('admin.careers.edit', $career) }}" 
                                       class="inline-block text-xs font-bold text-blue-600 hover:text-blue-800 uppercase tracking-wider transition-colors">Editar</a>
                                    
                                    <form action="{{ route('admin.careers.destroy', $career) }}" method="POST" class="inline-block" onsubmit="return confirm('Tem a certeza que deseja eliminar esta vaga?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-xs font-bold text-[#e51718] hover:text-red-800 uppercase tracking-wider transition-colors">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="mt-6">
                {{ $careers->links() }}
            </div>
        @endif
    </div>
@endsection
