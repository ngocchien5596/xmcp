@props([
    'categories' => [],
    'currentValue' => null,
    'baseRoute',
    'queryKey' => 'category',
    'sticky' => true,
    'containerClass' => 'max-w-[1280px]'
])

<div class="{{ $sticky ? 'sticky-category-tabs' : '' }} bg-white border-b border-[#E5E5E5]" id="category-tabs-wrapper">
    <div class="mx-auto w-full {{ $containerClass }} px-4 md:px-8">
        <nav
            class="category-nav flex items-center justify-start md:justify-center gap-3 overflow-x-auto py-4 no-scrollbar"
            aria-label="Bộ lọc danh mục"
        >
            @foreach($categories as $category)
                @php
                    $value = $category['value'] ?? null;
                    $isActive = $value === $currentValue || ($value === null && empty($currentValue));
                    
                    // Route generation logic
                    $routeParams = [];
                    if ($value !== null) {
                        $routeParams[$queryKey] = $value;
                    }
                    $url = route($baseRoute, $routeParams);
                @endphp

                <a
                    href="{{ $url }}"
                    class="category-tab shrink-0 rounded-[3px] px-5 py-3 text-[13px] font-black uppercase tracking-wide
                    {{ $isActive
                        ? 'bg-[#ED1C24] text-white shadow-md'
                        : 'bg-[#F1F2F4] text-[#555] hover:bg-[#ED1C24] hover:text-white hover:shadow-sm'
                    }}"
                    aria-current="{{ $isActive ? 'page' : 'false' }}"
                >
                    {{ $category['label'] }}
                </a>
            @endforeach
        </nav>
    </div>
</div>
