@extends('layouts.admin')

@section('header_title', 'Configurações Gerais')

@section('content')
    <div class="bg-white p-6 shadow-sm max-w-2xl mx-auto">
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-100">
            <h2 class="font-primary font-bold text-lg text-[#1a2c42]">Definições Globais do Website</h2>
        </div>

        <form action="{{ route('admin.settings.update') }}" method="POST">
            @csrf

            <div class="space-y-6 mb-8">
                <!-- Contact Email -->
                <div>
                    <label for="contact_email" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">E-mail de Contacto Público</label>
                    <input type="email" id="contact_email" name="contact_email" value="{{ old('contact_email', $settings['contact_email'] ?? '') }}" 
                           class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" placeholder="ex: geral@abpgroup.co.ao">
                </div>

                <!-- Contact Phone -->
                <div>
                    <label for="contact_phone" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Telefone de Contacto</label>
                    <input type="text" id="contact_phone" name="contact_phone" value="{{ old('contact_phone', $settings['contact_phone'] ?? '') }}" 
                           class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" placeholder="ex: +244 929 414 778">
                </div>

                <!-- WhatsApp -->
                <div>
                    <label for="contact_whatsapp" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Número de WhatsApp (apenas números, ex: 244929414778)</label>
                    <input type="text" id="contact_whatsapp" name="contact_whatsapp" value="{{ old('contact_whatsapp', $settings['contact_whatsapp'] ?? '') }}" 
                           class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" placeholder="ex: 244929414778">
                </div>

                <!-- Office Address -->
                <div>
                    <label for="office_address" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Morada do Escritório Central</label>
                    <textarea id="office_address" name="office_address" rows="3" 
                              class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" placeholder="Endereço completo...">{{ old('office_address', $settings['office_address'] ?? '') }}</textarea>
                </div>

                <!-- Footer Description -->
                <div>
                    <label for="footer_description" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Descrição do Rodapé (Footer)</label>
                    <textarea id="footer_description" name="footer_description" rows="3" 
                              class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" placeholder="Breve texto explicativo sobre o grupo...">{{ old('footer_description', $settings['footer_description'] ?? '') }}</textarea>
                </div>

                <!-- Working Hours -->
                <div>
                    <label for="working_hours" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Horário de Funcionamento</label>
                    <input type="text" id="working_hours" name="working_hours" value="{{ old('working_hours', $settings['working_hours'] ?? '') }}" 
                           class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" placeholder="ex: Segunda a Sexta: 08h00 - 17h00">
                </div>

                <!-- LinkedIn URL -->
                <div>
                    <label for="social_linkedin" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Link do Perfil do LinkedIn</label>
                    <input type="url" id="social_linkedin" name="social_linkedin" value="{{ old('social_linkedin', $settings['social_linkedin'] ?? '') }}" 
                           class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" placeholder="https://linkedin.com/company/...">
                </div>

                <!-- Instagram URL -->
                <div>
                    <label for="social_instagram" class="block font-primary text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Link do Perfil do Instagram</label>
                    <input type="url" id="social_instagram" name="social_instagram" value="{{ old('social_instagram', $settings['social_instagram'] ?? '') }}" 
                           class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-sm" placeholder="https://instagram.com/...">
                </div>
            </div>

            <!-- Submit -->
            <div class="flex justify-end pt-4 border-t border-gray-100">
                <button type="submit" 
                        class="bg-[#1a2c42] hover:bg-[#e51718] text-white px-8 py-3 text-xs font-bold uppercase tracking-wider transition-colors shadow-md">
                    Atualizar Definições
                </button>
            </div>
        </form>
    </div>
@endsection
