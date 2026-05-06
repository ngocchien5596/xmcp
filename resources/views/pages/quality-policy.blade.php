@extends('layouts.app')

@section('content')
    @php $hero = config('page-heroes.quality-policy'); @endphp

    @include('sections.common.inner-hero', [
        'title' => $hero['title'],
        'subtitle' => $hero['subtitle'],
        'background' => $hero['background'],
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
