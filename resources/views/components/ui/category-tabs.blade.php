@props([
    'categories' => [],
    'currentValue' => null,
    'activeCategory' => null,
    'queryKey' => 'category',
    'baseRoute' => null
])

@php
    $active = $currentValue ?? $activeCategory;
    
    // Check if 'Tất cả' is already in categories (new format)
    $hasAll = false;
    foreach($categories as $cat) {
        if (is_array($cat) && ($cat['value'] === null || $cat['label'] === 'Toàn bộ' || $cat['label'] === 'Tất cả')) {
            $hasAll = true;
            break;
        }
    }
@endphp

<div class="flex flex-wrap justify-center gap-3 md:gap-4 py-8">
    {{-- Legacy 'Tất cả' tab if not provided in config --}}
    @if(!$hasAll)
        <x-ui.tab-button 
            :href="$baseRoute ? route($baseRoute) : request()->fullUrlWithQuery([$queryKey => null, 'page' => null])" 
            :active="!$active">
            Tất cả
        </x-ui.tab-button>
    @endif

    @foreach($categories as $category)
        @php
            $label = is_array($category) ? $category['label'] : $category;
            $value = is_array($category) ? $category['value'] : $category;
            
            // Skip 'Tất cả' if we already handled it manually above or if it's in the loop
            if (is_array($category) && $value === null) $isActive = !$active;
            else $isActive = $active === $value;

            $url = $baseRoute 
                ? route($baseRoute, [$queryKey => $value]) 
                : request()->fullUrlWithQuery([$queryKey => $value, 'page' => null]);
        @endphp
        <x-ui.tab-button :href="$url" :active="$isActive">
            {{ $label }}
        </x-ui.tab-button>
    @endforeach
</div>
