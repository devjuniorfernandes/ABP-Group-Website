@extends('layouts.admin')

@section('header_title', 'Editar Notícia')

@section('content')
    <!-- CKEditor 5 Assets -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <style>
        .ck-editor__editable {
            min-height: 280px !important;
            font-family: inherit !important;
            background-color: #f9fafb !important;
        }
        .ck.ck-editor__main>.ck-editor__editable:focus {
            border-color: #e51718 !important;
            box-shadow: none !important;
            background-color: #ffffff !important;
        }
        .ck.ck-toolbar {
            border-color: #e5e7eb !important;
            background: #ffffff !important;
        }
    </style>

    <div class="bg-white p-6 shadow-sm max-w-4xl mx-auto">
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-100">
            <h2 class="font-primary font-bold text-lg text-[#1a2c42]">Editar: {{ $post->title }}</h2>
            <a href="{{ route('admin.news.index') }}" class="text-xs font-bold text-gray-500 hover:text-gray-700 uppercase tracking-wider transition-colors flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Voltar
            </a>
        </div>

        <form action="{{ route('admin.news.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Title -->
                <div class="form-group md:col-span-2">
                    <label for="title" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Título do Artigo *</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" 
                           class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" required>
                    @error('title')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Category -->
                <div class="form-group">
                    <label for="category" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Categoria *</label>
                    <select id="category" name="category" 
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" required>
                        <option value="">Selecione uma categoria</option>
                        <option value="Corporativo" {{ old('category', $post->category) === 'Corporativo' ? 'selected' : '' }}>Corporativo</option>
                        <option value="PantherBUILD" {{ old('category', $post->category) === 'PantherBUILD' ? 'selected' : '' }}>PantherBUILD</option>
                        <option value="PantherMAT" {{ old('category', $post->category) === 'PantherMAT' ? 'selected' : '' }}>PantherMAT</option>
                        <option value="PantherOIL" {{ old('category', $post->category) === 'PantherOIL' ? 'selected' : '' }}>PantherOIL</option>
                        <option value="Enviro" {{ old('category', $post->category) === 'Enviro' ? 'selected' : '' }}>Enviro</option>
                    </select>
                    @error('category')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Author Name -->
                <div class="form-group">
                    <label for="author_name" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Autor (Opcional)</label>
                    <input type="text" id="author_name" name="author_name" value="{{ old('author_name', $post->author_name) }}" 
                           class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" placeholder="ex: Equipa Editorial">
                    @error('author_name')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Cover Image -->
                <div class="form-group">
                    <label for="cover_image" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Alterar Imagem de Destaque</label>
                    <input type="file" id="cover_image" name="cover_image" 
                           class="w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:border-0 file:bg-gray-100 file:text-[#1a2c42] file:font-semibold file:text-xs file:uppercase file:tracking-wider hover:file:bg-gray-200 cursor-pointer mb-3">
                    @if($post->cover_image)
                        <div class="mt-2">
                            <span class="text-xs text-gray-400 block mb-1">Capa Atual:</span>
                            <img src="{{ asset('storage/' . $post->cover_image) }}" alt="Current Capa" class="w-32 h-20 object-cover border border-gray-200">
                        </div>
                    @endif
                    @error('cover_image')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Published At -->
                <div class="form-group">
                    <label for="published_at" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Data de Publicação</label>
                    <input type="datetime-local" id="published_at" name="published_at" value="{{ old('published_at', $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : '') }}" 
                           class="w-full px-4 py-2 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm">
                    <span class="text-[10px] text-gray-400 mt-1 block">Deixar em branco para guardar como rascunho.</span>
                    @error('published_at')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Summary -->
                <div class="form-group md:col-span-2">
                    <label for="summary" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Resumo do Artigo *</label>
                    <textarea id="summary" name="summary" rows="3" 
                              class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" placeholder="Resumo curto para exibições de lista..." required>{{ old('summary', $post->summary) }}</textarea>
                    @error('summary')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Content (Rich Text - CKEditor 5) -->
                <div class="form-group md:col-span-2">
                    <label for="content_editor" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Conteúdo do Artigo *</label>
                    <textarea id="content_editor" name="content" class="w-full">{!! old('content', $post->content) !!}</textarea>
                    @error('content')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Submit -->
            <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
                <button type="submit" 
                        class="bg-[#1a2c42] hover:bg-[#e51718] text-white px-8 py-3 text-xs font-bold uppercase tracking-wider transition-colors shadow-md">
                    Atualizar Artigo
                </button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (document.querySelector('#content_editor')) {
                ClassicEditor
                    .create(document.querySelector('#content_editor'), {
                        toolbar: [
                            'heading', '|',
                            'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'insertTable', '|',
                            'undo', 'redo'
                        ]
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }
        });
    </script>
@endsection
