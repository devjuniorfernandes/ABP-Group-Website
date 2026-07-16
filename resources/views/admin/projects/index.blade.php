@extends('layouts.admin')

@section('header_title', 'Projetos (Portefólio)')

@section('content')
    <div class="bg-white p-6 shadow-sm">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6 pb-4 border-b border-gray-100">
            <h2 class="font-primary font-bold text-lg text-[#1a2c42]">Lista de Projetos</h2>
            <a href="{{ route('admin.projects.create') }}" 
               class="bg-[#1a2c42] hover:bg-[#e51718] text-white px-5 py-2.5 text-xs font-bold uppercase tracking-wider transition-colors inline-flex items-center gap-1.5 shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M12 4v16m8-8H4"/>
                </svg>
                Adicionar Projeto
            </a>
        </div>

        @if($projects->isEmpty())
            <p class="text-sm text-gray-400 py-12 text-center">Nenhum projeto registado.</p>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-sm">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-200 text-xs font-bold uppercase tracking-wider text-gray-500">
                            <th class="p-4 w-20">Imagem</th>
                            <th class="p-4">Título</th>
                            <th class="p-4">Área/Empresa</th>
                            <th class="p-4">Localização/Ano</th>
                            <th class="p-4 text-center">Destaque</th>
                            <th class="p-4 text-right">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-150">
                        @foreach($projects as $project)
                            <tr class="hover:bg-gray-50/50">
                                <td class="p-4">
                                    @if($project->cover_image)
                                        <img src="{{ asset('storage/' . $project->cover_image) }}" alt="Thumbnail" class="w-16 h-10 object-cover border border-gray-200">
                                    @else
                                        <div class="w-16 h-10 bg-gray-100 border border-gray-200 flex items-center justify-center text-[10px] text-gray-400 font-bold uppercase">Sem Img</div>
                                    @endif
                                </td>
                                <td class="p-4 font-semibold text-[#1a2c42] max-w-xs truncate">
                                    {{ $project->title }}
                                </td>
                                <td class="p-4">
                                    <span class="px-2.5 py-1 text-[11px] font-bold uppercase {{ str_contains($project->category, 'Enviro') ? 'bg-green-50 text-green-700' : 'bg-blue-50 text-blue-700' }}">
                                        {{ $project->category }}
                                    </span>
                                </td>
                                <td class="p-4 text-gray-500">
                                    {{ $project->location ?? 'N/A' }} ({{ $project->year ?? 'N/A' }})
                                </td>
                                <td class="p-4 text-center">
                                    @if($project->is_featured)
                                        <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-green-50 text-green-600">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    @else
                                        <span class="text-xs text-gray-400 font-medium">-</span>
                                    @endif
                                </td>
                                <td class="p-4 text-right space-x-2">
                                    <a href="{{ route('admin.projects.edit', $project) }}" 
                                       class="inline-block text-xs font-bold text-blue-600 hover:text-blue-800 uppercase tracking-wider transition-colors">Editar</a>
                                    
                                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="inline-block" onsubmit="return confirm('Tem a certeza que deseja eliminar este projeto?');">
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
                {{ $projects->links() }}
            </div>
        @endif
    </div>
@endsection
