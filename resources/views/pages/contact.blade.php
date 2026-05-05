@extends('layouts.app')

@section('content')
    @include('sections.common.inner-hero', [
        'pageTitle' => 'LIÊN HỆ',
        'pageSubtitle' => 'Xi măng Cẩm Phả luôn sẵn sàng lắng nghe và giải đáp mọi thắc mắc của quý khách hàng và đối tác.',
        'bgImage' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070&auto=format&fit=crop',
    ])

    @include('sections.contact.contact-form-section')

    @include('sections.common.partner-section', ['partners' => $partners])
@endsection
