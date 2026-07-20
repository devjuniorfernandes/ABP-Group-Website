@extends('layouts.admin')

@section('header_title', 'Editar Página: ' . $pageName)

@section('content')
    <!-- CKEditor 5 Assets -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <style>
        .ck-editor__editable {
            min-height: 220px !important;
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

    <div class="max-w-4xl mx-auto">
        <div class="flex items-center justify-between mb-8 pb-4 border-b border-gray-150">
            <h2 class="font-primary font-bold text-xl text-[#1a2c42]">Gestão de Conteúdo - {{ $pageName }}</h2>
            <a href="{{ route('admin.pages.index') }}" class="text-xs font-bold text-gray-500 hover:text-gray-700 uppercase tracking-wider transition-colors flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Voltar à Lista
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 mb-8 text-sm font-semibold rounded-none" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="space-y-12">
            @foreach($contents->groupBy('section_key') as $sectionKey => $items)
                <div class="bg-white p-6 shadow-sm border border-gray-100 relative">
                    <form action="{{ route('admin.pages.update', $page_key) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-150">
                            <h3 class="font-primary font-bold text-sm text-[#e51718] uppercase tracking-widest">
                                Secção: {{ strtoupper($sectionKey) }}
                            </h3>
                            <span class="text-[10px] bg-gray-100 text-gray-500 font-bold px-2.5 py-1 uppercase tracking-wider rounded-none">
                                {{ count($items) }} {{ count($items) === 1 ? 'campo' : 'campos' }}
                            </span>
                        </div>

                        <div class="space-y-6 mb-6">
                            @foreach($items as $item)
                                <div class="form-group text-left">
                                    <label class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">
                                        {{ $item->label }}
                                    </label>

                                    @if($item->type === 'text')
                                        <input type="text" name="values[{{ $item->id }}]" value="{{ old('values.' . $item->id, $item->value) }}" 
                                               class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm text-gray-800 rounded-none">
                                    
                                    @elseif($item->type === 'textarea')
                                        <textarea name="values[{{ $item->id }}]" rows="4" 
                                                  class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm text-gray-800 rounded-none">{{ old('values.' . $item->id, $item->value) }}</textarea>
                                    
                                    @elseif($item->type === 'rich_text')
                                        <textarea id="rich_editor_{{ $item->id }}" name="values[{{ $item->id }}]" class="w-full ckeditor-field">{!! old('values.' . $item->id, $item->value) !!}</textarea>
                                    
                                    @elseif($item->type === 'image')
                                        <input type="file" name="images[{{ $item->id }}]" 
                                               class="w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:border-0 file:bg-gray-100 file:text-[#1a2c42] file:font-semibold file:text-xs file:uppercase file:tracking-wider hover:file:bg-gray-200 cursor-pointer mb-2 rounded-none">
                                        @if($item->value)
                                            <div class="mt-2">
                                                <span class="text-xs text-gray-400 block mb-1">Imagem Atual:</span>
                                                @if(str_starts_with($item->value, 'images/') || str_starts_with($item->value, 'http'))
                                                    <img src="{{ str_starts_with($item->value, 'http') ? $item->value : asset($item->value) }}" alt="Preview" class="w-48 h-28 object-cover border border-gray-200">
                                                @else
                                                    <img src="{{ asset('storage/' . $item->value) }}" alt="Preview" class="w-48 h-28 object-cover border border-gray-200">
                                                @endif
                                            </div>
                                        @endif
                                    @elseif($item->type === 'video')
                                        <input type="file" name="images[{{ $item->id }}]" accept="video/*"
                                               class="w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:border-0 file:bg-gray-100 file:text-[#1a2c42] file:font-semibold file:text-xs file:uppercase file:tracking-wider hover:file:bg-gray-200 cursor-pointer mb-2 rounded-none">
                                        @if($item->value)
                                            <div class="mt-2">
                                                <span class="text-xs text-gray-400 block mb-1">Vídeo Atual:</span>
                                                @if(str_starts_with($item->value, 'http'))
                                                    <a href="{{ $item->value }}" target="_blank" class="text-xs text-blue-600 underline block mb-2">Visualizar Vídeo Remoto</a>
                                                    <video class="w-48 h-28 object-cover border border-gray-200" controls>
                                                        <source src="{{ $item->value }}" type="video/mp4">
                                                    </video>
                                                @elseif(str_starts_with($item->value, 'images/') || !str_contains($item->value, '/'))
                                                    <video class="w-48 h-28 object-cover border border-gray-200" controls>
                                                        <source src="{{ asset($item->value) }}" type="video/mp4">
                                                    </video>
                                                @else
                                                    <video class="w-48 h-28 object-cover border border-gray-200" controls>
                                                        <source src="{{ asset('storage/' . $item->value) }}" type="video/mp4">
                                                    </video>
                                                @endif
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            @endforeach
                        </div>

                        <!-- Submit for this section -->
                        <div class="flex justify-end pt-4 border-t border-gray-100">
                            <button type="submit" 
                                    class="bg-[#1a2c42] hover:bg-[#e51718] text-white px-6 py-2.5 text-xs font-bold uppercase tracking-wider transition-colors shadow-md rounded-none">
                                Guardar Secção ({{ strtoupper($sectionKey) }})
                            </button>
                        </div>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.ckeditor-field').forEach(field => {
                ClassicEditor
                    .create(field, {
                        toolbar: [
                            'heading', '|',
                            'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'insertTable', '|',
                            'undo', 'redo'
                        ]
                    })
                    .catch(error => {
                        console.error(error);
                    });
            });
        });
    </script>
@endsection
