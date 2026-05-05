@extends('layouts.app')

@section('content')
    @include('sections.home.hero', ['heroSlides' => $heroSlides])

    @include('sections.home.brand-claim', ['brandClaim' => $brandClaim])

    @include('sections.home.stats', ['stats' => $stats])

    @include('sections.home.product-carousel', ['products' => $products])

    @include('sections.home.featured-news', ['featuredNews' => $featuredNews])

    @include('sections.home.recruitment', ['recruitment' => $recruitment])

    @include('sections.home.culture', ['cultureItems' => $cultureItems])

    @include('sections.home.projects', ['projects' => $projects])

    @include('sections.common.partner-section', ['partners' => $partners])
@endsection
