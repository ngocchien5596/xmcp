@php
    $menu = config('navigation.main_menu');
    $site = config('site');
@endphp

<header class="sticky top-0 z-50 border-b border-[var(--color-border)] bg-white">
    <div class="mx-auto flex h-[72px] max-w-[1440px] items-center justify-between px-4 md:px-8">
        <a href="{{ route('home') }}" class="flex shrink-0 items-center gap-3" aria-label="Trang chủ">
            <div class="relative flex shrink-0 items-center justify-center">
                <img src="{{ asset($site['logo']) }}" alt="{{ $site['brand'] }}" class="h-12 w-auto object-contain">
            </div>
            <div class="hidden sm:block">
                <p class="text-base font-bold uppercase leading-tight tracking-wide text-[var(--color-brand-red)] md:text-lg">
                    {{ $site['brand'] }}
                </p>
                <p class="text-[10px] font-semibold uppercase tracking-[0.2em] text-[var(--color-text-muted)] md:text-xs">
                    {{ $site['slogan'] }}
                </p>
            </div>
        </a>

        <nav class="hidden h-full items-center lg:flex" aria-label="Menu chính">
            @foreach($menu as $item)
                @php
                    $itemPath = ltrim($item['href'], '/');
                    $isActive = ($itemPath === '' && request()->is('/')) || 
                                ($itemPath !== '' && (request()->is($itemPath) || request()->is($itemPath . '/*')));
                @endphp
                @if(!empty($item['children']))
                    <div class="group relative h-full">
                        <a href="{{ $item['href'] }}"
                           class="flex h-full items-center gap-1 px-4 text-[13px] font-bold uppercase tracking-wider transition-colors hover:text-[#ED1C24] {{ $isActive ? 'text-[#ED1C24]' : 'text-[#333]' }}">
                            {{ $item['title'] }}
                            <svg class="h-3 w-3 transition-transform group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M19 9l-7 7-7-7"/></svg>
                        </a>
                        <div class="invisible absolute left-0 top-full z-50 min-w-[220px] border border-gray-100 bg-white py-2 opacity-0 shadow-xl transition-all group-hover:visible group-hover:opacity-100 dropdown-animate">
                            @foreach($item['children'] as $child)
                                <a href="{{ $child['href'] }}"
                                   class="block px-5 py-3 text-[13px] font-semibold text-[#555] transition-colors hover:bg-gray-50 hover:text-[#ED1C24]">
                                    {{ $child['title'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ $item['href'] }}"
                       class="relative flex h-full items-center px-4 text-[13px] font-bold uppercase tracking-wider transition-colors hover:text-[#ED1C24] {{ $isActive ? 'text-[#ED1C24]' : 'text-[#333]' }}">
                        {{ $item['title'] }}
                    </a>
                @endif
            @endforeach
        </nav>

        <div class="flex items-center gap-2">
            <div class="flex items-center rounded-full bg-[#ED1C24] px-3 py-1.5 text-white transition-colors hover:bg-[var(--color-brand-hover)]">
                <button aria-label="Tìm kiếm" class="flex items-center justify-center p-1">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                        <circle cx="11" cy="11" r="8"/>
                        <path d="m21 21-4.3-4.3"/>
                    </svg>
                </button>

                <div class="mx-2 h-4 w-px bg-white/40"></div>

                <div class="flex items-center gap-1 p-1 text-[13px] font-bold tracking-wide">
                    VI
                    <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

            <button id="mobile-menu-toggle" class="flex h-10 w-10 items-center justify-center lg:hidden" aria-label="Mở menu" aria-expanded="false">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
    </div>
</header>

@include('partials.mobile-nav', ['menu' => $menu])
