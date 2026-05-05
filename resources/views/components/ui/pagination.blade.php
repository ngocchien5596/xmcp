@props([
    'paginator' => null,
    'pagination' => null,
    'currentPage' => 1,
    'totalPages' => 1
])

@php
    if ($paginator) {
        $current = $paginator->currentPage();
        $total = $paginator->lastPage();
        $hasNext = $paginator->hasMorePages();
        $hasPrev = $current > 1;
    } else {
        $current = $pagination['current_page'] ?? $currentPage;
        $total = $pagination['total_pages'] ?? $totalPages;
        $hasNext = $pagination['has_next'] ?? ($current < $total);
        $hasPrev = $pagination['has_prev'] ?? ($current > 1);
    }
@endphp

@if($total > 1)
<div class="py-10" style="display: flex; justify-content: center; align-items: center; gap: 20px; padding: 40px 0;">
    <span style="font-size: 16px; font-weight: 900; color: black;">Trang</span>
    
    <div style="display: flex; align-items: center; gap: 12px;">
        {{-- Previous Button --}}
        @if($hasPrev)
            <a href="{{ $paginator ? $paginator->previousPageUrl() : request()->fullUrlWithQuery(['page' => $current - 1]) }}" 
               style="display: flex; width: 36px; height: 36px; align-items: center; justify-content: center; background-color: #ED1C24; color: white; text-decoration: none;" class="hover:bg-black transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
            </a>
        @else
            <div style="display: flex; width: 36px; height: 36px; align-items: center; justify-content: center; background-color: #ED1C24; color: white; opacity: 0.5; cursor: not-allowed;">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
            </div>
        @endif

        {{-- Page Numbers --}}
        <div style="display: flex; align-items: center; gap: 12px;">
            @for($i = 1; $i <= $total; $i++)
                @php $formattedNum = sprintf('%02d', $i); @endphp
                @if($current == $i)
                    <span style="font-size: 18px; font-weight: 900; color: black; line-height: 1;">{{ $formattedNum }}</span>
                @else
                    <a href="{{ $paginator ? $paginator->url($i) : request()->fullUrlWithQuery(['page' => $i]) }}" 
                       style="font-size: 16px; font-weight: 400; color: #444; text-decoration: none; line-height: 1;" class="hover:text-[#ED1C24] transition-colors">
                        {{ $formattedNum }}
                    </a>
                @endif
            @endfor
        </div>

        {{-- Next Button --}}
        @if($hasNext)
            <a href="{{ $paginator ? $paginator->nextPageUrl() : request()->fullUrlWithQuery(['page' => $current + 1]) }}" 
               style="display: flex; width: 36px; height: 36px; align-items: center; justify-content: center; background-color: #ED1C24; color: white; text-decoration: none;" class="hover:bg-black transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </a>
        @else
            <div style="display: flex; width: 36px; height: 36px; align-items: center; justify-content: center; background-color: #ED1C24; color: white; opacity: 0.5; cursor: not-allowed;">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </div>
        @endif
    </div>
</div>
@endif

