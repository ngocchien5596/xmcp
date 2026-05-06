@extends('layouts.app')

@section('content')
    @php $hero = config('page-heroes.contact'); @endphp

    @include('sections.common.inner-hero', [
        'title' => $hero['title'],
        'subtitle' => $hero['subtitle'],
        'background' => $hero['background'],
    ])

    @include('sections.contact.contact-form-section')

    @include('sections.common.partner-section', ['partners' => $partners])
@endsection
