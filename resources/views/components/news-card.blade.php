@props([
    'date' => '',
    'title' => '',
    'summary' => '',
    'image' => '',
    'link' => '#'
])

<div class="bg-white flex flex-col gap-4 h-full group cursor-pointer transition-shadow hover:shadow-md news-card-wrapper" data-title="{{ strtolower($title) }}">
    <!-- Image section -->
    <div class="w-full shrink-0">
        <a href="{{ $link }}" class="block w-full aspect-video">
            <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover rounded-sm">
        </a>
    </div>

    <!-- Content section -->
    <div class="flex-1 flex flex-col py-2 px-2 pb-4">
        <!-- Title with red underline -->
        <h3 class="font-primary text-xl font-bold text-gray-900 mb-4 inline-block">
            <a href="{{ $link }}" class="hover:text-[#e51718] transition-colors">{{ $title }}</a>
            <div class="w-10 border-b-2 border-[#e51718] mt-2"></div>
        </h3>
        
        <!-- Summary text -->
        <p class="font-secondary text-sm text-gray-500 leading-relaxed mb-4">
            {{ $summary }}
        </p>

        <!-- Spacer to push date to bottom -->
        <div class="flex-grow"></div>
        
        <!-- Date at bottom right -->
        <div class="text-right">
            <span class="font-primary text-xs font-bold text-gray-400">{{ $date }}</span>
        </div>
    </div>
</div>
