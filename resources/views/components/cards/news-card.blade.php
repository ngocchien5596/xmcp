@php
    // Prioritize explicit badge, then fallback to category label
    $badge = $article['badge'] ?? null;
    if (!$badge) {
        $cat = collect(config('news.categories'))->firstWhere('value', $article['category']);
        $badge = $cat ? $cat['label'] : ($article['category'] ?? '');
    }
@endphp

<x-ui.overlay-card 
    :href="route('news.show', $article['slug'])"
    :image="$article['image']"
    :title="$article['title']"
    :category="$badge"
    class="h-full"
/>
