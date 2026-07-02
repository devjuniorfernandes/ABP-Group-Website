@props([
    'date' => '',
    'title' => '',
    'summary' => '',
    'link' => '#'
])

<div class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:border-corporate-primary/15 transition-all duration-300 flex flex-col justify-between group">
    <div class="p-8">
        <span class="font-primary text-[11px] font-bold text-gray-400 uppercase tracking-widest block mb-4">{{ $date }}</span>
        <h3 class="font-primary text-lg font-bold text-corporate-primary mb-3 leading-snug">
            <a href="{{ $link }}" class="hover:text-corporate-secondary transition-colors">{{ $title }}</a>
        </h3>
        <p class="font-secondary text-sm text-gray-500 leading-relaxed mb-6">{{ $summary }}</p>
        <a href="{{ $link }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-corporate-primary hover:text-corporate-accent transition-colors">
            Ler mais 
            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
    </div>
</div>
