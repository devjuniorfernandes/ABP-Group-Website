<x-layouts.app>
    <x-slot name="title">Certificações | ABP Group - Compromisso e Qualidade</x-slot>

    <!-- Hero Banner -->
    <x-hero title="Certificações"
        subtitle="O nosso compromisso com os mais altos padrões de qualidade, segurança e excelência."
        bgImage="https://images.unsplash.com/photo-1556155092-490a1ba16284?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80"
        theme="corporate" height="short" />

    <!-- Content Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-[1000px]">
            <h2 class="font-primary text-3xl md:text-4xl font-extrabold leading-tight mb-8 text-[#1a2c42]">
                Reconhecimento da nossa Excelência
            </h2>
            <div class="prose max-w-none font-secondary text-lg text-gray-800 leading-relaxed mb-8">
                <p class="mb-6">
                    No ABP Group, a qualidade não é apenas um objetivo, mas um pilar fundamental da nossa actuação. 
                    Trabalhamos continuamente para assegurar que todas as nossas operações cumprem as mais rigorosas 
                    normas internacionais de qualidade, segurança no trabalho e protecção ambiental.
                </p>
                <p class="mb-6">
                    A nossa dedicação à excelência é reconhecida pelas principais entidades certificadoras. 
                    Estas certificações atestam a nossa capacidade de fornecer soluções integradas com o máximo de 
                    rigor e fiabilidade, garantindo a satisfação e a confiança dos nossos clientes e parceiros.
                </p>
            </div>

            <!-- Placeholder for Certifications Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-16">
                <!-- Cert 1 -->
                <div class="bg-[#f4f7f9] p-8 rounded-sm border border-gray-100 flex items-center gap-6">
                    <div class="w-16 h-16 bg-[#1a2c42] rounded-full flex items-center justify-center shrink-0 text-white font-bold">
                        ISO
                    </div>
                    <div>
                        <h3 class="font-primary font-bold text-xl text-[#1a2c42] mb-2">ISO 9001</h3>
                        <p class="font-secondary text-sm text-gray-600">Sistema de Gestão da Qualidade</p>
                    </div>
                </div>
                <!-- Cert 2 -->
                <div class="bg-[#f4f7f9] p-8 rounded-sm border border-gray-100 flex items-center gap-6">
                    <div class="w-16 h-16 bg-[#e51718] rounded-full flex items-center justify-center shrink-0 text-white font-bold">
                        ISO
                    </div>
                    <div>
                        <h3 class="font-primary font-bold text-xl text-[#1a2c42] mb-2">ISO 14001</h3>
                        <p class="font-secondary text-sm text-gray-600">Sistema de Gestão Ambiental</p>
                    </div>
                </div>
                <!-- Cert 3 -->
                <div class="bg-[#f4f7f9] p-8 rounded-sm border border-gray-100 flex items-center gap-6">
                    <div class="w-16 h-16 bg-[#3b4b8a] rounded-full flex items-center justify-center shrink-0 text-white font-bold">
                        ISO
                    </div>
                    <div>
                        <h3 class="font-primary font-bold text-xl text-[#1a2c42] mb-2">ISO 45001</h3>
                        <p class="font-secondary text-sm text-gray-600">Gestão da Segurança e Saúde no Trabalho</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
