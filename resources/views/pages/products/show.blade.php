@extends('layouts.app')

@section('title', $product['seo_title'] ?? $product['title'])
@section('description', $product['seo_description'] ?? $product['subtitle'])

@section('content')
    <style>
        .product-ui-check::before {
            content: "";
            width: 20px;
            height: 20px;
            margin-top: 3px;
            flex: 0 0 20px;
            border-radius: 4px;
            background-color: #5CB85C;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='none'%3E%3Cpath d='M3 8.2L6.1 11.3L13 4.5' stroke='white' stroke-width='2.2' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 12px 12px;
        }

        .product-ui-cta {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 2px;
            background-color: #ED1C24;
            padding: 10px 28px;
            font-size: 1rem;
            font-weight: 700;
            color: #fff;
            box-shadow: 0 1px 2px rgb(0 0 0 / 0.08);
            transition: background-color 160ms ease, transform 160ms ease, box-shadow 160ms ease;
        }

        .product-ui-cta:hover {
            background-color: #b91c1c;
        }
    </style>

    @php $hero = config('page-heroes.products'); @endphp

    @include('sections.common.inner-hero', [
        'title' => $hero['title'],
        'subtitle' => $hero['subtitle'],
        'background' => $hero['background'],
    ])

    <main class="min-h-screen bg-white">
        @include('sections.products.product-detail-header')
        @include('sections.products.product-content')

        <section id="contact" class="bg-gray-900 py-20">
            <div class="mx-auto max-w-[1440px] px-4 md:px-8 text-center">
                <h2 class="mb-6 text-3xl font-black text-white md:text-5xl">LIÊN HỆ ĐẶT HÀNG NGAY</h2>
                <p class="mx-auto mb-10 max-w-2xl text-lg text-gray-400">Chúng tôi luôn sẵn sàng cung cấp các sản phẩm xi măng chất lượng cao nhất cho mọi công trình của bạn.</p>
                <div class="flex flex-col justify-center gap-6 md:flex-row">
                    <a href="tel:1900xxxx" class="rounded-sm bg-[#ED1C24] px-12 py-4 text-xl font-black text-white shadow-xl transition-all hover:bg-red-700">
                        HOTLINE: 1900.XXXX
                    </a>
                    <a href="{{ route('home') }}#contact" class="rounded-sm border-2 border-white bg-transparent px-12 py-4 text-xl font-black text-white transition-all hover:bg-white hover:text-gray-900">
                        GỬI YÊU CẦU
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
