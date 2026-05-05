@extends('layouts.app')

@section('content')
    @include('sections.common.inner-hero', ['pageTitle' => 'Tin tức', 'pageSubtitle' => $article['category']])

    <section class="py-12 md:py-16">
        <div class="mx-auto max-w-[1440px] px-4 md:px-8">
            @include('components.ui.breadcrumb', ['breadcrumbs' => [
                ['label' => 'Tin tức', 'href' => route('news.index')],
                ['label' => $article['title'], 'href' => null],
            ]])

            <div class="grid grid-cols-1 gap-12 lg:grid-cols-3">
                <article class="lg:col-span-2">
                    <div class="aspect-video overflow-hidden rounded-sm mb-6">
                        <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}" width="800" height="450" class="h-full w-full object-cover">
                    </div>
                    <span class="rounded-sm bg-[var(--color-brand-red)] px-3 py-1 text-[10px] font-bold uppercase text-white">{{ $article['category'] }}</span>
                    <h1 class="mt-4 text-2xl font-bold text-[var(--color-text-primary)] md:text-3xl leading-tight">{{ $article['title'] }}</h1>
                    <div class="mt-3 flex items-center gap-4 text-[12px] text-[var(--color-text-muted)]">
                        <span>{{ $article['author'] }}</span>
                        <span>·</span>
                        <time>{{ \Carbon\Carbon::parse($article['published_at'])->format('d/m/Y') }}</time>
                        <span>·</span>
                        <span>{{ number_format($article['views']) }} lượt xem</span>
                    </div>
                    <div class="mt-8 prose max-w-none text-[var(--color-text-body)]">{!! $article['content'] !!}</div>
                </article>

                <aside class="lg:col-span-1">
                    @if(!empty($relatedArticles))
                        <h3 class="mb-4 text-lg font-bold text-[var(--color-text-primary)]">Tin liên quan</h3>
                        <div class="space-y-4">
                            @foreach($relatedArticles as $related)
                                <a href="{{ route('news.show', $related['slug']) }}" class="flex gap-3 group">
                                    <div class="h-16 w-20 shrink-0 overflow-hidden rounded-sm">
                                        <img src="{{ $related['image'] }}" alt="{{ $related['title'] }}" loading="lazy" width="80" height="64" class="h-full w-full object-cover">
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-[var(--color-text-primary)] line-clamp-2 group-hover:text-[var(--color-brand-red)] transition-colors">{{ $related['title'] }}</p>
                                        <time class="text-[11px] text-[var(--color-text-muted)]">{{ \Carbon\Carbon::parse($related['published_at'])->format('d/m/Y') }}</time>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    @endif
                </aside>
            </div>
        </div>
    </section>

    @include('sections.common.partner-section', ['partners' => $partners])
@endsection
