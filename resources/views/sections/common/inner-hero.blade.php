@php 
    $bg = $background ?? $bgImage ?? 'https://images.unsplash.com/photo-1541888086425-d81bb19240f5?q=80&w=2070&auto=format&fit=crop'; 
    $displayTitle = $title ?? $pageTitle ?? 'Tiêu đề';
    $displaySubtitle = $subtitle ?? $pageSubtitle ?? null;
    $heightClass = $class ?? 'h-[100px] md:h-[140px] lg:h-[160px]';
@endphp

<section class="relative w-full overflow-hidden bg-gray-900 {{ $heightClass }}">
    {{-- Background Image --}}
    @if($bg)
        <img src="{{ asset($bg) }}" 
             alt="{{ $displayTitle }}" 
             class="absolute inset-0 h-full w-full object-cover hero-bg-animate"
             onerror="this.src='https://images.unsplash.com/photo-1541888086425-d81bb19240f5?q=80&w=2070&auto=format&fit=crop'">
    @endif
    
    {{-- Standard Overlay - Red Multiply --}}
    <div class="absolute inset-0 bg-[#ED1C24]/85 mix-blend-multiply hero-overlay-animate"></div>
    
    <div class="relative z-10 h-full mx-auto w-full max-w-[1440px] px-4 md:px-8 flex items-center">
        <div class="flex items-center gap-4 md:gap-8 w-full mt-2">
            {{-- Hexagon Icon --}}
            @if(!isset($hideIcon) || !$hideIcon)
            <div class="hidden md:block shrink-0 hero-subtitle-animate">
                <svg width="36" height="40" viewBox="0 0 48 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-white/40">
                    <path d="M24 0L44.7846 12V36L24 48L3.21539 36V12L24 0Z" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M24 6L40 15V33L24 42L8 33V15L24 6Z" stroke="currentColor" stroke-width="1" stroke-dasharray="2 2"/>
                    <circle cx="24" cy="24" r="3" fill="currentColor"/>
                </svg>
            </div>
            @endif

            <div class="max-w-4xl">
                @if(isset($eyebrow) && $eyebrow)
                    <p class="mb-2 text-xs font-bold uppercase tracking-[0.2em] text-white/80 hero-subtitle-animate">
                        {{ $eyebrow }}
                    </p>
                @endif

                <h1 class="text-2xl font-black uppercase tracking-widest text-white md:text-4xl lg:text-5xl leading-tight hero-title-animate">
                    {{ $displayTitle }}
                </h1>
                
                @if($displaySubtitle)
                    <p class="mt-3 text-sm md:text-base text-white/95 font-medium leading-relaxed max-w-3xl hero-subtitle-animate">
                        {{ $displaySubtitle }}
                    </p>
                @endif
            </div>
        </div>
    </div>
</section>
