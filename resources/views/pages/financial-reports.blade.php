@extends('layouts.app')

@section('content')
    @php $hero = config('page-heroes.financial-reports'); @endphp

    @include('sections.common.inner-hero', [
        'title' => $hero['title'],
        'subtitle' => $hero['subtitle'],
        'background' => $hero['background'],
    ])

    {{-- Tabs & Filters --}}
    <section class="bg-white border-b border-gray-100">
        <div class="mx-auto max-w-[1440px] px-4 md:px-8">
            <x-ui.category-tabs 
                :categories="$categories" 
                :currentValue="$activeYear" 
                queryKey="year" 
            />
        </div>
    </section>

    {{-- Reports Grid --}}
    <section class="bg-white py-12 md:py-20">
        <div class="mx-auto max-w-[1440px] px-4 md:px-8">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 md:gap-8">
                @foreach($reports as $report)
                    @include('components.cards.document-card', ['document' => $report])
                @endforeach
            </div>

            @if($reports->isEmpty())
                <div class="py-20 text-center">
                    <p class="text-gray-500 font-medium">Hiện tại chưa có báo cáo nào cho năm này.</p>
                </div>
            @endif
        </div>
    </section>

    {{-- Bottom Section (Partners) --}}
    @include('sections.common.partner-section', ['partners' => $partners])
@endsection
