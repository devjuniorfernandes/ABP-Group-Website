@extends('layouts.admin')

@section('header_title', 'Editar Vaga de Emprego')

@section('content')
    <div class="bg-white p-6 shadow-sm max-w-4xl mx-auto">
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-100">
            <h2 class="font-primary font-bold text-lg text-[#1a2c42]">Editar: {{ $career->title }}</h2>
            <a href="{{ route('admin.careers.index') }}" class="text-xs font-bold text-gray-500 hover:text-gray-700 uppercase tracking-wider transition-colors flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Voltar
            </a>
        </div>

        <form action="{{ route('admin.careers.update', $career) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Title -->
                <div class="form-group md:col-span-2">
                    <label for="title" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Título da Vaga *</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $career->title) }}" 
                           class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" required>
                    @error('title')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Company -->
                <div class="form-group">
                    <label for="company" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Empresa do Grupo *</label>
                    <select id="company" name="company" 
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" required>
                        <option value="">Selecione uma empresa</option>
                        <option value="ABP Group" {{ old('company', $career->company) === 'ABP Group' ? 'selected' : '' }}>ABP Group</option>
                        <option value="PantherBUILD" {{ old('company', $career->company) === 'PantherBUILD' ? 'selected' : '' }}>PantherBUILD</option>
                        <option value="PantherMAT" {{ old('company', $career->company) === 'PantherMAT' ? 'selected' : '' }}>PantherMAT</option>
                        <option value="PantherOIL" {{ old('company', $career->company) === 'PantherOIL' ? 'selected' : '' }}>PantherOIL</option>
                        <option value="Enviro.AO" {{ old('company', $career->company) === 'Enviro.AO' ? 'selected' : '' }}>Enviro.AO</option>
                    </select>
                    @error('company')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Location -->
                <div class="form-group">
                    <label for="location" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Localização *</label>
                    <input type="text" id="location" name="location" value="{{ old('location', $career->location) }}" 
                           class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" placeholder="ex: Talatona, Luanda" required>
                    @error('location')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Description -->
                <div class="form-group md:col-span-2">
                    <label for="description" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Descrição dos Deveres e Função *</label>
                    <textarea id="description" name="description" rows="6" 
                              class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" required>{{ old('description', $career->description) }}</textarea>
                    @error('description')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Requirements -->
                <div class="form-group md:col-span-2">
                    <label for="requirements" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Requisitos e Competências</label>
                    <textarea id="requirements" name="requirements" rows="4" 
                              class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" placeholder="Lista de qualificações exigidas (uma por linha ou separadas por ponto)...">{{ old('requirements', $career->requirements) }}</textarea>
                    @error('requirements')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Active -->
                <div class="form-group md:col-span-2">
                    <label class="flex items-center gap-2 cursor-pointer select-none">
                        <input type="checkbox" name="is_active" value="1" class="w-4 h-4 text-[#e51718] border-gray-300 focus:ring-[#e51718]" {{ old('is_active', $career->is_active) ? 'checked' : '' }}>
                        <span class="text-sm font-semibold text-gray-700 uppercase tracking-wider">Publicar Vaga (Ficar Ativa)</span>
                    </label>
                </div>
            </div>

            <!-- Submit -->
            <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
                <button type="submit" 
                        class="bg-[#1a2c42] hover:bg-[#e51718] text-white px-8 py-3 text-xs font-bold uppercase tracking-wider transition-colors shadow-md">
                    Atualizar Vaga
                </button>
            </div>
        </form>
    </div>
@endsection
