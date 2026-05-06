@props(['items'])

<section class="py-12 bg-white">
    <div class="max-w-[1440px] mx-auto px-4 md:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12">
            @forelse($items as $item)
                <x-cards.notice-card :item="$item" />
            @empty
                <div class="col-span-full py-20 text-center text-gray-500">
                    Chưa có thông báo nào trong mục này.
                </div>
            @endforelse
        </div>
    </div>
</section>
