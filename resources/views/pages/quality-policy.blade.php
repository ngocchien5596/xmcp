@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    @include('sections.common.inner-hero', [
        'pageTitle' => 'CHÍNH SÁCH CHẤT LƯỢNG',
        'pageSubtitle' => 'Công ty CP xi măng Cẩm Phả áp dụng Hệ thống quản lý chất lượng Quốc tế ISO 9001:2008 đảm bảo kiểm soát chặt chẽ chất lượng sản phẩm từ khâu nhập nguyên liệu',
        'bgImage' => 'https://images.unsplash.com/photo-1541888086425-d81bb19240f5?q=80&w=2070&auto=format&fit=crop'
    ])

    {{-- Documents Grid --}}
    <section class="bg-white py-12 md:py-20">
        <div class="mx-auto max-w-[1440px] px-4 md:px-8">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 md:gap-8">
                @foreach($documents as $doc)
                    @include('components.cards.document-card', ['document' => $doc])
                @endforeach
            </div>
        </div>
    </section>

    {{-- Bottom Section (Partners) --}}
    @include('sections.common.partner-section', ['partners' => $partners])
@endsection
