@php
    $fileUrl = $document['file_url'] ?? $document['pdf_url'] ?? '';
    $isAvailable = filled($fileUrl) && $fileUrl !== '#';
@endphp

<button
    type="button"
    class="group relative flex w-full items-stretch overflow-hidden rounded-sm bg-white shadow-sm transition-all hover:shadow-md motion-border-card {{ $isAvailable ? 'cursor-pointer' : 'cursor-not-allowed opacity-70' }}"
    @if ($isAvailable)
        data-pdf-trigger
        data-pdf-url="{{ $fileUrl }}"
        data-pdf-title="{{ $document['title'] }}"
        aria-label="Xem tài liệu {{ $document['title'] }}"
    @else
        disabled
        aria-label="Tài liệu {{ $document['title'] }} chưa khả dụng"
    @endif
>
    <div class="flex w-28 shrink-0 items-center justify-center bg-white p-4 md:w-36">
        <div class="relative flex aspect-[1/1.2] w-full flex-col items-center justify-center rounded-sm border-2 border-gray-100 bg-white">
            <div class="absolute -left-[1px] -top-[1px] z-10 rounded-br-sm bg-[#C62828] px-2.5 py-0.5 text-[10px] font-bold text-white shadow-sm">
                {{ strtoupper($document['icon'] ?? 'PDF') }}
            </div>

            <div class="relative flex h-16 w-12 flex-col items-center justify-center">
                <svg class="h-full w-full text-gray-200" viewBox="0 0 24 32" fill="currentColor">
                    <path d="M0 0h16l8 8v24H0V0z"/>
                </svg>
                <div class="absolute inset-0 flex flex-col items-center justify-center pt-4">
                    <svg class="h-10 w-10 text-[#C62828]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <path d="M9 15h6M9 19h6" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-1 items-center bg-[#F5F7F8] px-6 py-5 text-left transition-colors group-hover:bg-[#ECEFF1]">
        <div class="space-y-2">
            @if (!empty($document['category']))
                <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#6B7280]">
                    {{ $document['category'] }}
                </p>
            @endif

            <p class="text-sm font-bold leading-relaxed text-[#222] md:text-[15px]">
                {{ $document['title'] }}
            </p>

            @if (!empty($document['description']))
                <p class="text-xs leading-5 text-[#6B7280] md:text-[13px]">
                    {{ $document['description'] }}
                </p>
            @endif

            @unless ($isAvailable)
                <p class="text-xs font-semibold text-[#C62828]">
                    File PDF đang được cập nhật.
                </p>
            @endunless
        </div>
    </div>
</button>
