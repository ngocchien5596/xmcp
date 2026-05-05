<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seo['title'] ?? config('site.brand') }}</title>
    <meta name="description" content="{{ $seo['description'] ?? config('site.description') }}">
    <link rel="canonical" href="{{ $seo['canonical'] ?? url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:title" content="{{ $seo['title'] ?? config('site.brand') }}">
    <meta property="og:description" content="{{ $seo['description'] ?? config('site.description') }}">
    <meta property="og:image" content="{{ $seo['image'] ?? '' }}">
    <meta property="og:url" content="{{ $seo['canonical'] ?? url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="vi_VN">

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico">

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>
<body class="bg-[var(--color-surface-white)] text-[var(--color-text-body)] font-sans antialiased">
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('components.modals.pdf-viewer-modal')

    @include('partials.footer')

    @stack('scripts')
</body>
</html>
