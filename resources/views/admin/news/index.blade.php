@extends('layouts.admin')

@section('header_title', 'Notícias e Artigos')

@section('content')
    <div class="bg-white p-6 shadow-sm">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6 pb-4 border-b border-gray-100">
            <h2 class="font-primary font-bold text-lg text-[#1a2c42]">Lista de Notícias</h2>
            <a href="{{ route('admin.news.create') }}" 
               class="bg-[#1a2c42] hover:bg-[#e51718] text-white px-5 py-2.5 text-xs font-bold uppercase tracking-wider transition-colors inline-flex items-center gap-1.5 shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M12 4v16m8-8H4"/>
                </svg>
                Criar Artigo
            </a>
        </div>

        @if($posts->isEmpty())
            <p class="text-sm text-gray-400 py-12 text-center">Nenhum artigo registado.</p>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-sm">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-200 text-xs font-bold uppercase tracking-wider text-gray-500">
                            <th class="p-4 w-20">Imagem</th>
                            <th class="p-4">Título</th>
                            <th class="p-4">Categoria</th>
                            <th class="p-4">Autor</th>
                            <th class="p-4">Data de Publicação</th>
                            <th class="p-4 text-right">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-150">
                        @foreach($posts as $post)
                            <tr class="hover:bg-gray-50/50">
                                <td class="p-4">
                                    @if($post->cover_image)
                                        <img src="{{ asset('storage/' . $post->cover_image) }}" alt="Cover" class="w-16 h-10 object-cover border border-gray-200">
                                    @else
                                        <div class="w-16 h-10 bg-gray-100 border border-gray-200 flex items-center justify-center text-[10px] text-gray-400 font-bold uppercase">Sem Img</div>
                                    @endif
                                </td>
                                <td class="p-4 font-semibold text-[#1a2c42] max-w-sm truncate">
                                    {{ $post->title }}
                                </td>
                                <td class="p-4">
                                    <span class="px-2.5 py-1 text-[11px] font-bold uppercase bg-gray-100 text-gray-700">
                                        {{ $post->category }}
                                    </span>
                                </td>
                                <td class="p-4 text-gray-600">
                                    {{ $post->author_name ?? 'Equipa Editorial' }}
                                </td>
                                <td class="p-4 text-gray-500">
                                    @if($post->published_at)
                                        {{ $post->published_at->format('d/m/Y H:i') }}
                                    @else
                                        <span class="text-xs font-bold text-yellow-600 uppercase bg-yellow-50 px-2 py-0.5">Rascunho</span>
                                    @endif
                                </td>
                                <td class="p-4 text-right space-x-2">
                                    <a href="{{ route('admin.news.edit', $post) }}" 
                                       class="inline-block text-xs font-bold text-blue-600 hover:text-blue-800 uppercase tracking-wider transition-colors">Editar</a>
                                    
                                    <form action="{{ route('admin.news.destroy', $post) }}" method="POST" class="inline-block" onsubmit="return confirm('Tem a certeza que deseja eliminar este artigo?');">
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
                {{ $posts->links() }}
            </div>
        @endif
    </div>
@endsection
