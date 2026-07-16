@extends('layouts.admin')

@section('header_title', 'Ler Mensagem')

@section('content')
    <div class="bg-white p-6 shadow-sm max-w-3xl mx-auto">
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-100">
            <h2 class="font-primary font-bold text-lg text-[#1a2c42]">Mensagem de: {{ $message->name }}</h2>
            <a href="{{ route('admin.messages.index') }}" class="text-xs font-bold text-gray-500 hover:text-gray-700 uppercase tracking-wider transition-colors flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Voltar
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8 text-sm text-gray-700">
            <!-- Sender details -->
            <div class="space-y-2">
                <h3 class="text-xs uppercase tracking-wider font-bold text-gray-400 mb-2">Remetente</h3>
                <div><span class="font-semibold text-gray-500 block text-xs">Nome Completo:</span> {{ $message->name }}</div>
                <div><span class="font-semibold text-gray-500 block text-xs">E-mail:</span> <a href="mailto:{{ $message->email }}" class="text-[#e51718] hover:underline">{{ $message->email }}</a></div>
                <div><span class="font-semibold text-gray-500 block text-xs">Contacto Telefónico:</span> {{ $message->phone ?? 'Não facultado' }}</div>
            </div>

            <!-- Organization details -->
            <div class="space-y-2">
                <h3 class="text-xs uppercase tracking-wider font-bold text-gray-400 mb-2">Organização / Data</h3>
                <div><span class="font-semibold text-gray-500 block text-xs">Empresa:</span> {{ $message->company ?? 'Contacto Particular' }}</div>
                <div><span class="font-semibold text-gray-500 block text-xs">Data de Receção:</span> {{ $message->created_at->format('d/m/Y H:i:s') }}</div>
                <div><span class="font-semibold text-gray-500 block text-xs">Assunto:</span> <span class="font-bold text-[#1a2c42]">{{ $message->subject }}</span></div>
            </div>
        </div>

        <!-- Message body -->
        <div class="bg-gray-50 p-6 border-l-4 border-[#e51718]">
            <h3 class="text-xs uppercase tracking-wider font-bold text-gray-400 mb-3">Mensagem Escrita</h3>
            <p class="text-sm text-gray-700 leading-relaxed whitespace-pre-wrap">{{ $message->message }}</p>
        </div>

        <!-- Danger zone actions -->
        <div class="mt-12 pt-6 border-t border-gray-100 flex justify-between items-center">
            <span class="text-xs text-gray-400">Esta mensagem pode ser eliminada permanentemente.</span>
            <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST" onsubmit="return confirm('Tem a certeza que deseja eliminar esta mensagem da caixa de entrada?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-[#e51718] hover:bg-red-700 text-white px-5 py-2.5 text-xs font-bold uppercase tracking-wider transition-colors shadow-sm">
                    Eliminar Mensagem
                </button>
            </form>
        </div>
    </div>
@endsection
