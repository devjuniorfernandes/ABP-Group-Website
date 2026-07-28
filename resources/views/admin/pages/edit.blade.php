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

        <!-- Hidden forms for stat actions (placed outside main forms to prevent HTML form nesting) -->
        @if(in_array($page_key, ['home', 'about']))
            <form id="add_stat_form" action="{{ route('admin.pages.add-stat', $page_key) }}" method="POST" class="hidden">
                @csrf
            </form>
            @php
                $statIndexesToForm = [];
                foreach($contents as $cItem) {
                    if ($cItem->section_key === 'stats' && preg_match('/^stat(\d+)_/', $cItem->content_key, $mMatch)) {
                        $statIndexesToForm[(int)$mMatch[1]] = true;
                    }
                }
            @endphp
            @foreach(array_keys($statIndexesToForm) as $stIdx)
                <form id="remove_stat_form_{{ $stIdx }}" action="{{ route('admin.pages.remove-stat', [$page_key, $stIdx]) }}" method="POST" class="hidden">
                    @csrf
                </form>
            @endforeach
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

                        @if($sectionKey === 'stats' && in_array($page_key, ['home', 'about']))
                            @php
                                $statGroups = [];
                                foreach($items as $item) {
                                    if (preg_match('/^stat(\d+)_/', $item->content_key, $m)) {
                                        $idx = (int)$m[1];
                                        $statGroups[$idx][] = $item;
                                    }
                                }
                                ksort($statGroups);
                            @endphp

                            <div class="space-y-6 mb-6">
                                @foreach($statGroups as $statIdx => $groupItems)
                                    <div class="bg-gray-50 border border-gray-200 p-5 relative">
                                        <div class="flex items-center justify-between mb-4 pb-2 border-b border-gray-200">
                                            <h4 class="font-primary font-bold text-xs text-[#1a2c42] uppercase tracking-wider flex items-center gap-2">
                                                <span class="w-5 h-5 bg-[#1a2c42] text-white rounded-full inline-flex items-center justify-center text-[10px] font-bold">{{ $statIdx }}</span>
                                                Caixa de Estatística #{{ $statIdx }}
                                            </h4>
                                            @if(count($statGroups) > 1)
                                                <button type="submit" form="remove_stat_form_{{ $statIdx }}" 
                                                        onclick="return confirm('Tem a certeza que pretende eliminar a Caixa #{{ $statIdx }}?');" 
                                                        class="text-xs text-red-600 hover:text-red-800 font-bold uppercase tracking-wider flex items-center gap-1.5 bg-red-50 hover:bg-red-100 px-3 py-1 border border-red-200 transition-colors cursor-pointer">
                                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                        <path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                    </svg>
                                                    Diminuir / Remover Caixa #{{ $statIdx }}
                                                </button>
                                            @endif
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-{{ count($groupItems) }} gap-4">
                                            @foreach($groupItems as $item)
                                                <div class="form-group text-left">
                                                    <label class="block font-primary text-[11px] font-bold text-gray-700 uppercase tracking-wider mb-1">
                                                        {{ $item->label }}
                                                    </label>
                                                    <input type="text" name="values[{{ $item->id }}]" value="{{ old('values.' . $item->id, $item->value) }}" 
                                                           class="w-full px-3 py-2 bg-white border border-gray-300 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm text-gray-800 rounded-none">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mb-6 flex justify-start">
                                <button type="submit" form="add_stat_form" 
                                        class="bg-[#304595] hover:bg-[#1a2c42] text-white px-5 py-3 text-xs font-bold uppercase tracking-wider transition-colors shadow-md rounded-none flex items-center gap-2 cursor-pointer">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                        <path d="M12 4v16m8-8H4"/>
                                    </svg>
                                    + Adicionar Nova Caixa de Estatística
                                </button>
                            </div>
                        @else
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
                        @endif

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
