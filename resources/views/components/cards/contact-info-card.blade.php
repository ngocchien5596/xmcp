@props(['office'])

@php
    $isLab = ($office['type'] ?? '') === 'lab';
@endphp

<div class="relative overflow-hidden rounded-[3px] border border-[#E5E5E5] bg-white px-7 py-7 text-[#1F2937] shadow-sm motion-border-card">
    <div class="pointer-events-none absolute right-5 top-5 text-[#E9E9E9]">
        @if ($isLab)
            <svg class="h-11 w-11" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6">
                <path d="M19 6h10"/>
                <path d="M22 6v12l-11 18a4 4 0 0 0 3.43 6h19.14A4 4 0 0 0 37 36L26 18V6"/>
                <path d="M18 28h12"/>
            </svg>
        @else
            <svg class="h-11 w-11" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6">
                <rect x="10" y="8" width="20" height="30"/>
                <path d="M30 14h8v24H18"/>
                <path d="M15 15h4M15 21h4M15 27h4M24 15h2M24 21h2M24 27h2"/>
            </svg>
        @endif
    </div>

    <div class="mb-6 flex items-center gap-3">
        <svg class="h-4 w-4 shrink-0 text-[#ED1C24]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            @if ($isLab)
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 5h8M10 5v10L5.5 19.5A2 2 0 0 0 7 23h10a2 2 0 0 0 1.5-3.5L14 15V5"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 16h6"/>
            @else
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21s7-4.35 7-11a7 7 0 1 0-14 0c0 6.65 7 11 7 11Z"/>
                <circle cx="12" cy="10" r="2.4"/>
            @endif
        </svg>
        <h3 class="text-[14px] font-bold uppercase tracking-[0.08em] text-[#ED1C24]">
            {{ $office['title'] }}
        </h3>
    </div>

    <div class="space-y-5">
        <div class="flex gap-3">
            <svg class="mt-0.5 h-4 w-4 shrink-0 text-[#BDBDBD]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21s7-4.35 7-11a7 7 0 1 0-14 0c0 6.65 7 11 7 11Z"/>
                <circle cx="12" cy="10" r="2.4"/>
            </svg>
            <div>
                <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#6B7280]">ĐỊA CHỈ</p>
                <p class="mt-1 text-[13px] font-medium leading-6 text-[#1F2937]">{{ $office['address'] }}</p>
            </div>
        </div>

        <div class="flex gap-3">
            <svg class="mt-0.5 h-4 w-4 shrink-0 text-[#BDBDBD]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 0 1 2-2h3.28a1 1 0 0 1 .95.68l1.5 4.49a1 1 0 0 1-.5 1.21l-2.26 1.13a11.05 11.05 0 0 0 5.52 5.52l1.13-2.26a1 1 0 0 1 1.21-.5l4.49 1.5a1 1 0 0 1 .68.95V19a2 2 0 0 1-2 2h-1C9.72 21 3 14.28 3 6V5Z"/>
            </svg>
            <div>
                <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#6B7280]">HOTLINE</p>
                <p class="mt-1 text-[13px] font-medium leading-6 text-[#1F2937]">{{ $office['hotline'] }}</p>
            </div>
        </div>

        <div class="flex gap-3">
            <svg class="mt-0.5 h-4 w-4 shrink-0 text-[#BDBDBD]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="m3 7 7.89 5.26a2 2 0 0 0 2.22 0L21 7"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 5h14a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2Z"/>
            </svg>
            <div>
                <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#6B7280]">EMAIL</p>
                <p class="mt-1 break-all text-[13px] font-medium leading-6 text-[#1F2937]">{{ $office['email'] }}</p>
            </div>
        </div>
    </div>
</div>
