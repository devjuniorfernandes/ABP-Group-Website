<x-layouts.app>
    <x-slot name="title">Carreiras | ABP Group - Construa o Seu Futuro Connosco</x-slot>

    <!-- Hero Banner -->
    <x-hero title="Carreiras no ABP Group"
        subtitle="Junte-se a uma equipa apaixonada, inovadora e comprometida com o desenvolvimento de Angola."
        bgImage="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80"
        theme="corporate" height="short" />

    <!-- Content Section -->
    <section class="py-24 bg-white text-left">
        <div class="container mx-auto px-6 max-w-[1000px]">
            <h2 class="font-primary text-3xl md:text-4xl font-extrabold leading-tight mb-8 text-[#1a2c42]">
                Porquê o ABP Group?
            </h2>
            <div class="prose max-w-none font-secondary text-lg text-gray-800 leading-relaxed mb-16">
                <p class="mb-6">
                    Acreditamos que o sucesso das nossas operações começa com o talento e a dedicação da nossa equipa. 
                    No ABP Group, oferecemos um ambiente de trabalho estimulante e diversificado, onde a inovação é 
                    encorajada e o crescimento profissional é uma prioridade.
                </p>
                <p>
                    Seja em engenharia, energia, sustentabilidade ou áreas corporativas de suporte, estamos sempre 
                    à procura de profissionais altamente qualificados e jovens talentos motivados para fazerem a diferença.
                </p>
            </div>

            <!-- Vagas de Emprego List -->
            <div class="mb-20">
                <h3 class="font-primary text-2xl font-bold text-[#1a2c42] mb-8 pb-3 border-b-2 border-gray-100 uppercase tracking-wide">Vagas em Aberto</h3>
                
                @if($careers->isEmpty())
                    <div class="bg-[#f4f7f9] p-8 md:p-12 border border-gray-100 text-center">
                        <p class="font-secondary text-gray-600 mb-6">
                            De momento, não existem vagas de emprego ativas. Pode, no entanto, submeter uma candidatura espontânea preenchendo o formulário abaixo.
                        </p>
                    </div>
                @else
                    <div class="space-y-6">
                        @foreach($careers as $career)
                            <div class="border border-gray-200 p-6 md:p-8 bg-white shadow-sm flex flex-col md:flex-row md:items-start justify-between gap-6">
                                <div class="flex-1">
                                    <span class="inline-block px-2.5 py-0.5 text-[10px] font-bold bg-blue-50 text-blue-800 uppercase mb-3">{{ $career->company }}</span>
                                    <h4 class="font-primary text-xl font-bold text-[#1a2c42] mb-2">{{ $career->title }}</h4>
                                    <span class="text-xs text-gray-400 block mb-4">Localização: {{ $career->location }}</span>
                                    
                                    <div class="space-y-4 text-sm text-gray-600 font-secondary mb-4">
                                        <div>
                                            <strong class="text-gray-800 block mb-1">Descrição da Função:</strong>
                                            <p class="whitespace-pre-wrap">{{ $career->description }}</p>
                                        </div>
                                        @if($career->requirements)
                                            <div>
                                                <strong class="text-gray-800 block mb-1">Requisitos:</strong>
                                                <p class="whitespace-pre-wrap">{{ $career->requirements }}</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="shrink-0 pt-2">
                                    <a href="#candidatar-form" onclick="document.getElementById('career_id').value = '{{ $career->id }}'" 
                                       class="inline-block bg-[#1a2c42] hover:bg-[#e51718] text-white px-6 py-3 text-xs font-bold uppercase tracking-wider transition-colors shadow-sm">
                                        Candidatar-se
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            <!-- Candidatar Form -->
            <div id="candidatar-form" class="bg-gray-50 p-8 border border-gray-200">
                <h3 class="font-primary text-2xl font-bold text-[#1a2c42] mb-6">Submeter Candidatura</h3>
                
                @if(session('success'))
                    <div class="p-4 bg-green-50 border-l-4 border-green-500 text-green-700 text-sm font-medium mb-6">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('careers.apply') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <!-- Vacancy Select -->
                        <div class="md:col-span-2">
                            <label for="career_id" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Vaga de Candidatura *</label>
                            <select id="career_id" name="career_id" 
                                    class="w-full px-4 py-3 bg-white border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm text-gray-800">
                                <option value="">Candidatura Espontânea</option>
                                @foreach($careers as $career)
                                    <option value="{{ $career->id }}" {{ old('career_id') == $career->id ? 'selected' : '' }}>{{ $career->title }} ({{ $career->company }})</option>
                                @endforeach
                            </select>
                            @error('career_id')
                                <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Nome Completo *</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" 
                                   class="w-full px-4 py-3 bg-white border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm text-gray-800" required>
                            @error('name')
                                <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Endereço de E-mail *</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" 
                                   class="w-full px-4 py-3 bg-white border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm text-gray-800" required>
                            @error('email')
                                <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Contacto Telefónico</label>
                            <input type="text" id="phone" name="phone" value="{{ old('phone') }}" 
                                   class="w-full px-4 py-3 bg-white border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm text-gray-800">
                            @error('phone')
                                <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- CV Upload -->
                        <div>
                            <label for="cv" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Anexar Currículo (PDF, DOC, DOCX) *</label>
                            <input type="file" id="cv" name="cv" 
                                   class="w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:border-0 file:bg-gray-200 file:text-[#1a2c42] file:font-semibold file:text-xs file:uppercase file:tracking-wider hover:file:bg-gray-300 cursor-pointer" required>
                            <span class="text-[10px] text-gray-400 mt-1 block">Tamanho máximo do ficheiro: 10MB</span>
                            @error('cv')
                                <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Message -->
                        <div class="md:col-span-2">
                            <label for="message" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Carta / Mensagem de Apresentação</label>
                            <textarea id="message" name="message" rows="4" 
                                      class="w-full px-4 py-3 bg-white border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm text-gray-800" placeholder="Apresente-se sucintamente à nossa equipa de recursos humanos...">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="flex justify-end">
                        <button type="submit" 
                                class="bg-[#1a2c42] hover:bg-[#e51718] text-white px-8 py-3.5 text-xs font-bold uppercase tracking-wider transition-colors shadow-md">
                            Submeter Candidatura
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layouts.app>
