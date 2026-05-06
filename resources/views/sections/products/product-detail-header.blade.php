<div class="py-12 md:py-16 bg-white border-b border-gray-100">
    <div class="max-w-[1440px] mx-auto px-4 md:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-20 items-center">
            <!-- Left Column: Product Image -->
            <div class="w-full">
                <x-products.product-image :image="$product['image']" :title="$product['title']" />
            </div>

            <!-- Right Column: Product Information -->
            <div class="w-full">
                <h1 class="text-3xl md:text-4xl font-black text-[#ED1C24] tracking-tight leading-tight uppercase">
                    {{ $product['title'] }}
                </h1>
                <p class="text-base md:text-lg text-gray-600 mt-2 font-bold">
                    {{ $product['subtitle'] }}
                </p>

                <div class="mt-6">
                    <x-products.use-case-box :text="$product['use_case']" />
                </div>

                <div class="mt-8">
                    <h3 class="text-xl font-bold text-gray-900 border-b-2 border-[#ED1C24] inline-block pb-1 mb-4">
                        Đặc tính nổi bật
                    </h3>
                    <x-products.benefit-list :benefits="$product['benefits']" />
                </div>

                <div class="mt-10">
                    <a href="#contact" class="inline-flex items-center justify-center bg-[#ED1C24] text-white px-8 py-2.5 rounded-sm font-bold hover:bg-red-700 transition-colors shadow-sm cursor-pointer">
                        Đăng ký đặt mua
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
