@extends('layouts.admin')

@section('header_title', 'Detalhes da Candidatura')

@section('content')
    <div class="bg-white p-6 shadow-sm max-w-3xl mx-auto">
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-100">
            <h2 class="font-primary font-bold text-lg text-[#1a2c42]">Candidatura de: {{ $application->name }}</h2>
            <a href="{{ route('admin.applications.index') }}" class="text-xs font-bold text-gray-500 hover:text-gray-700 uppercase tracking-wider transition-colors flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Voltar
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <!-- Candidate Info -->
            <div class="border-b border-gray-100 pb-4 md:border-b-0 md:pb-0">
                <h3 class="text-xs uppercase tracking-wider font-bold text-gray-400 mb-3">Informações do Candidato</h3>
                <div class="space-y-2 text-sm text-gray-700">
                    <div><span class="font-semibold text-gray-500 block text-xs">Nome Completo:</span> {{ $application->name }}</div>
                    <div><span class="font-semibold text-gray-500 block text-xs">E-mail:</span> <a href="mailto:{{ $application->email }}" class="text-[#e51718] hover:underline">{{ $application->email }}</a></div>
                    <div><span class="font-semibold text-gray-500 block text-xs">Telefone:</span> {{ $application->phone ?? 'Não facultado' }}</div>
                    <div><span class="font-semibold text-gray-500 block text-xs">Data de Submissão:</span> {{ $application->created_at->format('d/m/Y H:i') }}</div>
                </div>
            </div>

            <!-- Job Info -->
            <div>
                <h3 class="text-xs uppercase tracking-wider font-bold text-gray-400 mb-3">Vaga Pretendida</h3>
                <div class="space-y-2 text-sm text-gray-700">
                    @if($application->career)
                        <div><span class="font-semibold text-gray-500 block text-xs">Título da Vaga:</span> {{ $application->career->title }}</div>
                        <div><span class="font-semibold text-gray-500 block text-xs">Empresa Contratante:</span> {{ $application->career->company }}</div>
                        <div><span class="font-semibold text-gray-500 block text-xs">Localização da Função:</span> {{ $application->career->location }}</div>
                    @else
                        <div>
                            <span class="font-semibold text-gray-500 block text-xs">Tipo de Candidatura:</span>
                            <span class="inline-block mt-1 text-xs font-bold text-[#e51718] uppercase bg-red-50 px-2 py-0.5">Candidatura Espontânea</span>
                        </div>
                    @endif
                    
                    @if($application->cv_path)
                        <div class="pt-2">
                            <span class="font-semibold text-gray-500 block text-xs mb-1">Currículo (Anexo):</span>
                            <a href="{{ route('admin.applications.download-cv', $application->id) }}" 
                               class="inline-flex items-center gap-1.5 px-4 py-2 bg-[#e51718] hover:bg-red-700 text-white text-xs font-bold uppercase tracking-wider transition-colors shadow-sm">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                Descarregar Ficheiro CV
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Candidate Message -->
        <div class="bg-gray-50 p-6 border-l-4 border-[#1a2c42]">
            <h3 class="text-xs uppercase tracking-wider font-bold text-gray-400 mb-3">Mensagem de Apresentação</h3>
            <p class="text-sm text-gray-700 leading-relaxed whitespace-pre-wrap">{{ $application->message ?? 'Sem mensagem de apresentação incluída.' }}</p>
        </div>

        <!-- Danger zone -->
        <div class="mt-12 pt-6 border-t border-gray-100 flex justify-between items-center">
            <span class="text-xs text-gray-400">Esta candidatura pode ser removida se já não for necessária.</span>
            <form action="{{ route('admin.applications.destroy', $application->id) }}" method="POST" onsubmit="return confirm('Tem a certeza que deseja eliminar esta candidatura permanentemente?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-[#e51718] hover:bg-red-700 text-white px-5 py-2.5 text-xs font-bold uppercase tracking-wider transition-colors shadow-sm">
                    Eliminar Candidatura
                </button>
            </form>
        </div>
    </div>
@endsection
