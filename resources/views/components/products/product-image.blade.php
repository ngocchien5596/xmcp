@props(['image', 'title'])

<div class="overflow-hidden rounded-sm border-4 border-white bg-white shadow-xl">
    <img src="{{ asset($image) }}" alt="{{ $title }}" class="aspect-[4/3] h-auto w-full bg-gray-50 object-contain" onerror="this.src='https://placehold.co/800x600/ED1C24/FFFFFF?text={{ urlencode($title) }}'">
</div>
