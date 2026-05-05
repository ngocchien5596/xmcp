@php
    $site = config('site');
    $footerLinks = $site['footer_links'];
    $productTags = $site['product_tags'];
    $socialLinks = $site['social_links'];
@endphp

<footer class="relative overflow-hidden bg-white pt-16 md:pt-20">
    <div class="mx-auto max-w-[1440px] px-4 md:px-8 relative z-10 pb-10">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-12">

            <!-- Column 1: Logo & Legal -->
            <div class="lg:col-span-5">
                <a href="{{ route('home') }}" class="mb-6 flex items-center gap-3">
                    <div class="relative shrink-0">
                        <img src="{{ asset($site['logo']) }}" alt="{{ $site['brand'] }}" class="h-14 w-auto object-contain">
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xl font-bold uppercase tracking-tight text-[var(--color-brand-red)] leading-none">{{ $site['brand'] }}</span>
                        <span class="text-[11px] font-medium uppercase tracking-[0.2em] text-[#4A4A4A] mt-1">{{ $site['slogan'] }}</span>
                    </div>
                </a>

                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <svg class="mt-1 h-4 w-4 shrink-0 text-[var(--color-brand-red)]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        <p class="text-[13px] leading-relaxed text-[#555555]">
                            <span class="font-bold text-[var(--color-text-primary)]">Cơ quan chủ quản:</span> {{ $site['company_info']['owner'] }}
                        </p>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="mt-1 h-4 w-4 shrink-0 text-[var(--color-brand-red)]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        <p class="text-[13px] leading-relaxed text-[#555555]">
                            <span class="font-bold text-[var(--color-text-primary)]">Mã số doanh nghiệp:</span> {{ $site['tax_code'] }} do {{ $site['company_info']['tax_issued_by'] }} cấp lần đầu ngày {{ $site['company_info']['tax_first_date'] }}, {{ $site['company_info']['tax_change'] }}.
                        </p>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="mt-1 h-4 w-4 shrink-0 text-[var(--color-brand-red)]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        <p class="text-[13px] leading-relaxed text-[#555555]">
                            <span class="font-bold text-[var(--color-text-primary)]">Chịu trách nhiệm nội dung:</span> {{ $site['company_info']['responsible_person'] }}
                        </p>
                    </div>
                </div>

                <div class="mt-8 flex flex-wrap items-center gap-4 opacity-70 grayscale hover:grayscale-0 transition-all duration-300">
                    <div class="h-10 w-24 bg-blue-600 rounded flex items-center justify-center text-[10px] font-bold text-white uppercase text-center px-1">Đã thông báo bộ công thương</div>
                    <div class="h-10 w-20 bg-green-500 rounded flex items-center justify-center text-xs font-black text-white">IPv6</div>
                    <div class="h-10 w-20 bg-gray-200 rounded flex items-center justify-center text-[10px] font-bold text-gray-700">IQNet</div>
                    <div class="h-10 w-16 bg-gray-200 rounded flex items-center justify-center text-[10px] font-bold text-gray-700">QUACERT</div>
                </div>
            </div>

            <!-- Column 2: Contact -->
            <div class="relative lg:col-span-4 px-0 lg:px-6">
                <div class="relative z-10">
                    <h3 class="mb-6 text-[15px] font-black uppercase tracking-widest text-[var(--color-text-primary)]">THÔNG TIN CÔNG TY</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="mt-1 h-4 w-4 shrink-0 text-[#777]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <span class="text-[13px] text-[#555] leading-relaxed"><span class="font-bold text-[var(--color-text-primary)]">Trụ sở:</span> {{ $site['address'] }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="mt-1 h-4 w-4 shrink-0 text-[#777]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            <span class="text-[13px] text-[#555] leading-relaxed"><span class="font-bold text-[var(--color-text-primary)]">Điện thoại:</span> {{ $site['hotline'] }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="mt-1 h-4 w-4 shrink-0 text-[#777]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
                            <span class="text-[13px] text-[#555] leading-relaxed"><span class="font-bold text-[var(--color-text-primary)]">Fax:</span> {{ $site['fax'] }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="mt-1 h-4 w-4 shrink-0 text-[#777]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            <span class="text-[13px] text-[#555] leading-relaxed"><span class="font-bold text-[var(--color-text-primary)]">Email:</span> {{ $site['email'] }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="mt-1 h-4 w-4 shrink-0 text-[#777]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                            <span class="text-[13px] text-[#555] leading-relaxed"><span class="font-bold text-[var(--color-text-primary)]">Website:</span> {{ $site['website'] }}</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Column 3: Links -->
            <div class="lg:col-span-3">
                @foreach($footerLinks as $col)
                    <h3 class="mb-6 text-[15px] font-black uppercase tracking-widest text-[var(--color-text-primary)]">{{ $col['title'] }}</h3>
                    <ul class="space-y-3">
                        @foreach($col['links'] as $link)
                            <li class="flex items-center gap-2 group">
                                <span class="h-[3px] w-[3px] rounded-full bg-[#777] group-hover:bg-[var(--color-brand-red)] transition-colors"></span>
                                <a href="{{ $link['href'] }}" class="text-[14px] text-[#555] transition-colors hover:text-[var(--color-brand-red)] font-medium">{{ $link['label'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        </div>

        <!-- Product Tags -->
        <div class="mt-16 flex flex-wrap gap-2 border-t border-[#EEE] pt-8">
            @foreach($productTags as $tag)
                <a href="{{ route('products.index') }}" class="rounded-sm bg-[#F5F5F5] px-4 py-2 text-[12px] font-bold text-[#666] transition-all hover:bg-[var(--color-brand-red)] hover:text-white uppercase tracking-tighter">{{ $tag }}</a>
            @endforeach
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-[#EEE] bg-white py-6">
        <div class="mx-auto max-w-[1440px] px-4 md:px-8 flex flex-col items-center justify-between gap-6 md:flex-row">
            <p class="text-[12px] font-medium text-[#777]">&copy; {{ date('Y') }} Công ty Cổ phần xi măng Cẩm Phả. All rights reserved.</p>
            <div class="flex items-center gap-4">
                <span class="text-[12px] font-bold uppercase tracking-tight text-[#444]">Kết nối Mạng xã hội</span>
                <div class="flex items-center gap-4">
                    @foreach($socialLinks as $social)
                        <a href="{{ $social['href'] }}" target="_blank" rel="noopener noreferrer" class="text-[#333] transition-colors hover:text-[var(--color-brand-red)]" aria-label="{{ $social['name'] }}">
                            @include('partials.icons.' . $social['icon'])
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</footer>
