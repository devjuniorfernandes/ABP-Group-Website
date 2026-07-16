@extends('layouts.admin')

@section('header_title', 'Candidaturas Recebidas')

@section('content')
    <div class="bg-white p-6 shadow-sm">
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-100">
            <h2 class="font-primary font-bold text-lg text-[#1a2c42]">Lista de Candidaturas</h2>
        </div>

        @if($applications->isEmpty())
            <p class="text-sm text-gray-400 py-12 text-center">Nenhuma candidatura registada.</p>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-sm">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-200 text-xs font-bold uppercase tracking-wider text-gray-500">
                            <th class="p-4">Candidato</th>
                            <th class="p-4">Vaga Pretendida</th>
                            <th class="p-4">Contactos</th>
                            <th class="p-4">Data de Envio</th>
                            <th class="p-4 text-center">Currículo</th>
                            <th class="p-4 text-right">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-150">
                        @foreach($applications as $app)
                            <tr class="hover:bg-gray-50/50">
                                <td class="p-4 font-semibold text-[#1a2c42]">
                                    {{ $app->name }}
                                </td>
                                <td class="p-4 text-gray-700 font-medium">
                                    @if($app->career)
                                        {{ $app->career->title }}
                                        <span class="text-[10px] text-gray-400 block">{{ $app->career->company }}</span>
                                    @else
                                        <span class="text-xs font-bold text-[#e51718] uppercase bg-red-50 px-2 py-0.5">Candidatura Espontânea</span>
                                    @endif
                                </td>
                                <td class="p-4 text-gray-500">
                                    <div class="text-xs">{{ $app->email }}</div>
                                    <div class="text-[11px] text-gray-400 mt-0.5">{{ $app->phone ?? 'Sem Telefone' }}</div>
                                </td>
                                <td class="p-4 text-gray-500">
                                    {{ $app->created_at->format('d/m/Y H:i') }}
                                </td>
                                <td class="p-4 text-center">
                                    @if($app->cv_path)
                                        <a href="{{ route('admin.applications.download-cv', $app->id) }}" 
                                           class="inline-flex items-center gap-1 text-xs font-bold text-[#e51718] hover:underline uppercase tracking-wider">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                            </svg>
                                            Download
                                        </a>
                                    @else
                                        <span class="text-xs text-gray-400">-</span>
                                    @endif
                                </td>
                                <td class="p-4 text-right space-x-2">
                                    <a href="{{ route('admin.applications.show', $app->id) }}" 
                                       class="inline-block text-xs font-bold text-blue-600 hover:text-blue-800 uppercase tracking-wider transition-colors">Visualizar</a>
                                    
                                    <form action="{{ route('admin.applications.destroy', $app->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Tem a certeza que deseja eliminar esta candidatura?');">
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
                {{ $applications->links() }}
            </div>
        @endif
    </div>
@endsection
