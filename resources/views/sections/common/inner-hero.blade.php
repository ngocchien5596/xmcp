@php 
    $bg = $bgImage ?? 'https://images.unsplash.com/photo-1541888086425-d81bb19240f5?q=80&w=2070&auto=format&fit=crop'; 
    $title = $pageTitle ?? 'Tiêu đề';
    $subtitle = $pageSubtitle ?? null;
@endphp

<section class="relative overflow-hidden bg-gray-900" style="height: 320px; min-height: 320px; background-color: #111;">
    {{-- Background Image with zoom-out entrance --}}
    @if($bg)
    <img src="{{ $bg }}" 
         alt="{{ $title }}" 
         class="absolute inset-0 h-full w-full object-cover hero-bg-animate" 
         style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover;"
         onerror="this.style.display='none'">
    @endif
    
    {{-- Red Overlay with fade-in entrance --}}
    <div class="absolute inset-0 bg-[#ED1C24]/85 mix-blend-multiply hero-overlay-animate" 
         style="position: absolute; inset: 0; mix-blend-mode: multiply;"></div>
    
    {{-- Bottom Gradient for readability --}}
    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent hero-overlay-animate"
         style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);"></div>

    <div class="relative z-10 h-full mx-auto max-w-[1440px] px-4 md:px-8 flex items-end pb-12"
         style="position: relative; z-index: 10; height: 100%; display: flex; align-items: flex-end; padding-bottom: 48px;">
        
        <div class="flex items-start gap-4 md:gap-6 w-full" style="display: flex; align-items: flex-start; gap: 24px; width: 100%;">
            {{-- Hexagon Icon --}}
            <div class="hidden md:block flex-shrink-0 mt-1 hero-subtitle-animate" style="flex-shrink: 0; margin-top: 4px;">
                <svg width="48" height="54" viewBox="0 0 48 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-white/40" style="color: rgba(255,255,255,0.4);">
                    <path d="M24 0L44.7846 12V36L24 48L3.21539 36V12L24 0Z" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M24 6L40 15V33L24 42L8 33V15L24 6Z" stroke="currentColor" stroke-width="1" stroke-dasharray="2 2"/>
                    <circle cx="24" cy="24" r="3" fill="currentColor"/>
                </svg>
            </div>

            <div class="max-w-4xl" style="max-width: 900px;">
                <h1 class="text-3xl font-black uppercase tracking-widest text-white md:text-5xl leading-tight hero-title-animate" 
                    style="margin: 0; color: white; font-weight: 900; text-transform: uppercase; letter-spacing: 0.05em; line-height: 1.2;">
                    {{ $title }}
                </h1>
                @if($subtitle)
                    <p class="mt-3 text-sm md:text-base text-white/90 font-medium leading-relaxed max-w-3xl hero-subtitle-animate"
                       style="margin-top: 12px; color: rgba(255,255,255,0.9); font-weight: 500; line-height: 1.6;">
                        {{ $subtitle }}
                    </p>
                @endif
            </div>
        </div>
    </div>
</section>
