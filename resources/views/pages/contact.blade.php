<x-layouts.app>
    <x-slot name="title">Contactos | ABP Group - Fale Connosco em Luanda</x-slot>

    <!-- Hero Banner -->
    <x-hero 
        title=""
        subtitle=""
        bgImage="{{ asset('images/corporate-hero.png') }}"
        theme="corporate"
        height="ultra-short"
    />

    <!-- Contact Grid Section -->
    <section class="section">
        <div class="container">
            <div class="contact-grid">
                <!-- Info Panel -->
                <div class="contact-info-panel" style="display: flex; flex-direction: column; justify-content: space-between; min-height: 500px;">
                    <div>
                        <h3 class="footer-title" style="padding-bottom: 8px;">Informações de Contacto</h3>
                        <p style="opacity: 0.8; font-size: 14px; margin-bottom: 40px; line-height: 1.6;">
                            Visite o nosso centro de negócios ou utilize um dos canais disponíveis para entrar em contacto direto com a nossa equipa administrativa ou comercial.
                        </p>
                        
                        <ul class="contact-details" style="gap: 24px;">
                            <li class="contact-item">
                                <span class="contact-icon" style="color: var(--color-accent-corporate);">
                                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                </span>
                                <span class="contact-text" style="font-size: 15px; opacity: 0.9;">Centro Logístico de Talatona Armazém D07, Belas – Talatona, Luanda, Angola</span>
                            </li>
                            <li class="contact-item">
                                <span class="contact-icon" style="color: var(--color-accent-corporate);">
                                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                                </span>
                                <a href="tel:+244929414778" class="contact-text link" style="font-size: 15px; opacity: 0.9;">+244 929 414 778</a>
                            </li>
                            <li class="contact-item">
                                <span class="contact-icon" style="color: var(--color-accent-corporate);">
                                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2zM22 6l-10 7L2 6"/></svg>
                                </span>
                                <a href="mailto:geral@abp.co.ao" class="contact-text link" style="font-size: 15px; opacity: 0.9;">geral@abp.co.ao</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 24px; margin-top: 24px; font-size: 13px; opacity: 0.7;">
                        <span>Horário de Atendimento:<br>Segunda a Sexta: 08h00 - 17h00</span>
                    </div>
                </div>

                <!-- Form Panel -->
                <div class="contact-form-panel">
                    <h3 style="font-size: 22px; color: var(--color-primary-corporate); margin-bottom: 24px; font-weight: 700;">Envie-nos uma Mensagem</h3>
                    
                    <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Mensagem enviada com sucesso! A nossa equipa entrará em contacto em breve.');">
                        <div class="grid-2" style="gap: 20px; margin-bottom: 20px;">
                            <div class="form-group" style="margin-bottom: 0;">
                                <label for="name" class="form-label">Nome Completo *</label>
                                <input type="text" id="name" class="form-control" placeholder="ex: João Silva" required>
                            </div>
                            
                            <div class="form-group" style="margin-bottom: 0;">
                                <label for="email" class="form-label">E-mail *</label>
                                <input type="email" id="email" class="form-control" placeholder="ex: joao@empresa.co.ao" required>
                            </div>
                        </div>

                        <div class="grid-2" style="gap: 20px; margin-bottom: 20px;">
                            <div class="form-group" style="margin-bottom: 0;">
                                <label for="phone" class="form-label">Contacto Telefónico</label>
                                <input type="tel" id="phone" class="form-control" placeholder="ex: +244 912 345 678">
                            </div>
                            
                            <div class="form-group" style="margin-bottom: 0;">
                                <label for="company" class="form-label">Empresa</label>
                                <input type="text" id="company" class="form-control" placeholder="Nome da sua organização">
                            </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="subject" class="form-label">Assunto *</label>
                            <input type="text" id="subject" class="form-control" placeholder="ex: Proposta de Parceria" required>
                        </div>

                        <div class="form-group" style="margin-bottom: 30px;">
                            <label for="message" class="form-label">Mensagem *</label>
                            <textarea id="message" rows="5" class="form-control" placeholder="Descreva de forma detalhada o seu pedido..." style="resize: vertical;" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%; font-size: 16px; padding: 16px; background-color: var(--color-primary-corporate); color: var(--color-white);">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="section section-bg-gray" style="padding: 0;">
        <div style="width: 100%; overflow: hidden; display: flex;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4444.651696821937!2d13.203838375017392!3d-8.909566391147063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f51cf97bec1b%3A0xbbcbdf5d2892578b!2sAngola%20Black%20Panther%20-%20Group!5e1!3m2!1spt-PT!2sao!4v1784037333168!5m2!1spt-PT!2sao" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
        </div>
    </section>
</x-layouts.app>
