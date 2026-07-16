@extends('layouts.admin')

@section('header_title', 'Painel Geral')

@section('content')
    <!-- Dashboard Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        
        <!-- Metric Card 1: News -->
        <div class="bg-white p-6 border-l-4 border-[#e51718] shadow-sm flex items-center justify-between">
            <div>
                <span class="text-xs uppercase tracking-wider font-bold text-gray-400">Notícias</span>
                <h3 class="text-2xl font-extrabold text-[#1a2c42] mt-1">{{ $posts_count }}</h3>
            </div>
            <div class="p-3 bg-red-50 text-[#e51718]">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
            </div>
        </div>

        <!-- Metric Card 2: Projects -->
        <div class="bg-white p-6 border-l-4 border-[#1a2c42] shadow-sm flex items-center justify-between">
            <div>
                <span class="text-xs uppercase tracking-wider font-bold text-gray-400">Projetos</span>
                <h3 class="text-2xl font-extrabold text-[#1a2c42] mt-1">{{ $projects_count }}</h3>
            </div>
            <div class="p-3 bg-blue-50 text-[#1a2c42]">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
            </div>
        </div>

        <!-- Metric Card 3: Applications -->
        <div class="bg-white p-6 border-l-4 border-yellow-500 shadow-sm flex items-center justify-between">
            <div>
                <span class="text-xs uppercase tracking-wider font-bold text-gray-400">Candidaturas</span>
                <h3 class="text-2xl font-extrabold text-[#1a2c42] mt-1">{{ $applications_count }}</h3>
            </div>
            <div class="p-3 bg-yellow-50 text-yellow-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
            </div>
        </div>

        <!-- Metric Card 4: Messages -->
        <div class="bg-white p-6 border-l-4 border-green-500 shadow-sm flex items-center justify-between">
            <div>
                <span class="text-xs uppercase tracking-wider font-bold text-gray-400">Mensagens</span>
                <h3 class="text-2xl font-extrabold text-[#1a2c42] mt-1">{{ $unread_messages_count }} <span class="text-xs text-gray-400 font-normal">Não lidas</span></h3>
            </div>
            <div class="p-3 bg-green-50 text-green-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
        </div>

    </div>

    <!-- Lists Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        
        <!-- Recent Applications -->
        <div class="bg-white p-6 shadow-sm">
            <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-100">
                <h4 class="font-primary font-bold text-base text-[#1a2c42]">Candidaturas Recentes</h4>
                <a href="{{ route('admin.applications.index') }}" class="text-xs font-semibold text-[#e51718] hover:underline uppercase tracking-wider">Ver todas</a>
            </div>

            @if($recent_applications->isEmpty())
                <p class="text-sm text-gray-400 py-6 text-center">Nenhuma candidatura recebida recentemente.</p>
            @else
                <div class="divide-y divide-gray-100">
                    @foreach($recent_applications as $app)
                        <div class="py-4 first:pt-0 last:pb-0 flex items-center justify-between">
                            <div>
                                <h5 class="text-sm font-semibold text-gray-800">{{ $app->name }}</h5>
                                <span class="text-xs text-gray-400 block mt-0.5">Vaga: {{ $app->career ? $app->career->title : 'Candidatura Espontânea' }}</span>
                            </div>
                            <span class="text-xs text-gray-400 font-medium">{{ $app->created_at->diffForHumans() }}</span>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Recent Messages -->
        <div class="bg-white p-6 shadow-sm">
            <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-100">
                <h4 class="font-primary font-bold text-base text-[#1a2c42]">Mensagens de Contacto</h4>
                <a href="{{ route('admin.messages.index') }}" class="text-xs font-semibold text-[#e51718] hover:underline uppercase tracking-wider">Ver todas</a>
            </div>

            @if($recent_messages->isEmpty())
                <p class="text-sm text-gray-400 py-6 text-center">Nenhuma mensagem recebida recentemente.</p>
            @else
                <div class="divide-y divide-gray-100">
                    @foreach($recent_messages as $msg)
                        <div class="py-4 first:pt-0 last:pb-0 flex items-center justify-between">
                            <div>
                                <h5 class="text-sm font-semibold {{ !$msg->is_read ? 'text-gray-900 font-bold' : 'text-gray-600' }}">{{ $msg->name }}</h5>
                                <span class="text-xs text-gray-400 block mt-0.5 truncate max-w-[280px]">Assunto: {{ $msg->subject }}</span>
                            </div>
                            <div class="flex items-center gap-3">
                                @if(!$msg->is_read)
                                    <span class="w-2 h-2 rounded-full bg-[#e51718]"></span>
                                @endif
                                <span class="text-xs text-gray-400 font-medium">{{ $msg->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

    </div>
@endsection
