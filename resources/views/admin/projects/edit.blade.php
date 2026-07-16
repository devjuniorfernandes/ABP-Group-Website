@extends('layouts.admin')

@section('header_title', 'Editar Projeto')

@section('content')
    <div class="bg-white p-6 shadow-sm max-w-4xl mx-auto">
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-100">
            <h2 class="font-primary font-bold text-lg text-[#1a2c42]">Editar: {{ $project->title }}</h2>
            <a href="{{ route('admin.projects.index') }}" class="text-xs font-bold text-gray-500 hover:text-gray-700 uppercase tracking-wider transition-colors flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Voltar
            </a>
        </div>

        <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Title -->
                <div class="form-group md:col-span-2">
                    <label for="title" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Título do Projeto *</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $project->title) }}" 
                           class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" required>
                    @error('title')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Category selection -->
                <div class="form-group">
                    <label for="category" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Área / Categoria *</label>
                    <select id="category" name="category" 
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" required>
                        <option value="">Selecione uma área</option>
                        <option value="PantherBUILD" {{ old('category', $project->category) === 'PantherBUILD' ? 'selected' : '' }}>PantherBUILD</option>
                        <option value="PantherMAT" {{ old('category', $project->category) === 'PantherMAT' ? 'selected' : '' }}>PantherMAT</option>
                        <option value="PantherOIL" {{ old('category', $project->category) === 'PantherOIL' ? 'selected' : '' }}>PantherOIL</option>
                        <option value="Enviro.AO" {{ old('category', $project->category) === 'Enviro.AO' ? 'selected' : '' }}>Enviro.AO</option>
                        <option value="PantherBUILD / PantherMAT" {{ old('category', $project->category) === 'PantherBUILD / PantherMAT' ? 'selected' : '' }}>PantherBUILD / PantherMAT</option>
                    </select>
                    @error('category')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Client -->
                <div class="form-group">
                    <label for="client" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Cliente</label>
                    <input type="text" id="client" name="client" value="{{ old('client', $project->client) }}" 
                           class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm">
                    @error('client')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Location -->
                <div class="form-group">
                    <label for="location" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Localização</label>
                    <input type="text" id="location" name="location" value="{{ old('location', $project->location) }}" 
                           class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" placeholder="ex: Luanda, Angola">
                    @error('location')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Year -->
                <div class="form-group">
                    <label for="year" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Ano de Conclusão</label>
                    <input type="text" id="year" name="year" value="{{ old('year', $project->year) }}" 
                           class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" placeholder="ex: 2026">
                    @error('year')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Description -->
                <div class="form-group md:col-span-2">
                    <label for="description" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Descrição do Projeto *</label>
                    <textarea id="description" name="description" rows="6" 
                              class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" required>{{ old('description', $project->description) }}</textarea>
                    @error('description')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Cover Image -->
                <div class="form-group">
                    <label for="cover_image" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Alterar Imagem de Capa</label>
                    <input type="file" id="cover_image" name="cover_image" 
                           class="w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:border-0 file:bg-gray-100 file:text-[#1a2c42] file:font-semibold file:text-xs file:uppercase file:tracking-wider hover:file:bg-gray-200 cursor-pointer mb-3">
                    @if($project->cover_image)
                        <div class="mt-2">
                            <span class="text-xs text-gray-400 block mb-1">Capa Atual:</span>
                            <img src="{{ asset('storage/' . $project->cover_image) }}" alt="Current Capa" class="w-32 h-20 object-cover border border-gray-200">
                        </div>
                    @endif
                    @error('cover_image')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Gallery Images -->
                <div class="form-group">
                    <label for="gallery_images" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Substituir Imagens da Galeria (Múltiplas)</label>
                    <input type="file" id="gallery_images" name="gallery_images[]" multiple
                           class="w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:border-0 file:bg-gray-100 file:text-[#1a2c42] file:font-semibold file:text-xs file:uppercase file:tracking-wider hover:file:bg-gray-200 cursor-pointer mb-3">
                    @if($project->gallery_images)
                        @php $gallery = json_decode($project->gallery_images, true) ?: []; @endphp
                        @if(!empty($gallery))
                            <div class="mt-2">
                                <span class="text-xs text-gray-400 block mb-1">Galeria Atual ({{ count($gallery) }} imagens):</span>
                                <div class="flex flex-wrap gap-2">
                                    @foreach($gallery as $img)
                                        <img src="{{ asset('storage/' . $img) }}" alt="Galeria" class="w-16 h-12 object-cover border border-gray-200">
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endif
                    @error('gallery_images')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Featured checkbox -->
                <div class="form-group md:col-span-2">
                    <label class="flex items-center gap-2 cursor-pointer select-none">
                        <input type="checkbox" name="is_featured" value="1" class="w-4 h-4 text-[#e51718] border-gray-300 focus:ring-[#e51718]" {{ old('is_featured', $project->is_featured) ? 'checked' : '' }}>
                        <span class="text-sm font-semibold text-gray-700 uppercase tracking-wider">Destacar Projeto</span>
                    </label>
                </div>
            </div>

            <!-- Submit -->
            <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
                <button type="submit" 
                        class="bg-[#1a2c42] hover:bg-[#e51718] text-white px-8 py-3 text-xs font-bold uppercase tracking-wider transition-colors shadow-md">
                    Atualizar Projeto
                </button>
            </div>
        </form>
    </div>
@endsection
