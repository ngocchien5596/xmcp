<div class="border-t border-gray-100 bg-gray-50 py-16 md:py-24">
    <div class="mx-auto max-w-[1440px] px-4 md:px-8">
        <div class="flex flex-col gap-12 md:gap-16 lg:flex-row">
            <div class="lg:w-2/3">
                <div class="rounded-sm bg-white p-8 shadow-sm motion-border-card md:p-12">
                    <h2 class="mb-8 flex items-center gap-3 text-2xl font-black text-gray-900 md:text-3xl">
                        <span class="h-8 w-2 rounded-full bg-[#ED1C24]"></span>
                        ƯU ĐIỂM SẢN PHẨM
                    </h2>

                    <div class="space-y-12">
                        @foreach ($product['advantages'] as $advantage)
                            <div class="group">
                                <h3 class="mb-3 flex items-center gap-3 text-xl font-bold text-[#ED1C24]">
                                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-[#65B95C] text-white">
                                        <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    {{ $advantage['title'] }}
                                </h3>
                                <div class="pl-9 text-lg leading-relaxed text-gray-700">
                                    {{ $advantage['content'] }}
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <x-products.price-box :note="$product['price_note']" />
                </div>
            </div>

            <div class="lg:w-1/3">
                <div class="sticky top-24 space-y-8">
                    <div class="rounded-sm border-t-4 border-[#ED1C24] bg-white p-6 shadow-sm motion-border-card">
                        <h3 class="mb-6 text-xl font-black uppercase tracking-tight text-gray-900">
                            Sản phẩm liên quan
                        </h3>
                        <div class="space-y-4">
                            @forelse ($relatedProducts as $related)
                                <x-products.related-product-card :product="$related" />
                            @empty
                                <p class="text-sm italic text-gray-500">Không có sản phẩm liên quan.</p>
                            @endforelse
                        </div>
                    </div>

                    <div class="group relative overflow-hidden rounded-sm bg-[#ED1C24] p-8 text-white shadow-xl motion-border-card">
                        <div class="relative z-10">
                            <h3 class="mb-2 text-xl font-bold">Hỗ trợ tư vấn?</h3>
                            <p class="mb-6 text-sm font-medium opacity-90">Liên hệ ngay với chúng tôi để được tư vấn kỹ thuật và báo giá tốt nhất.</p>
                            <a href="tel:1900xxxx" class="flex items-center gap-3 text-2xl font-black transition-transform hover:translate-x-2">
                                <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                1900.xxxx
                            </a>
                        </div>
                        <div class="absolute -bottom-8 -right-8 rotate-12 opacity-10 transition-transform duration-500 group-hover:scale-110">
                            <svg class="h-48 w-48" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
