<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $allArticles = collect(config('news.articles'));
        $categories = config('news.categories');
        $activeCategory = $request->query('category');

        // Filter articles by category
        $filteredArticles = $activeCategory
            ? $allArticles->where('category', $activeCategory)->sortByDesc('published_at')
            : $allArticles->sortByDesc('published_at');

        // Prepare featured articles (is_featured = true, or latest 4)
        // Usually shown only on the first page of "All" category
        $featuredArticles = $allArticles->where('is_featured', true)->take(4);
        if ($featuredArticles->isEmpty()) {
            $featuredArticles = $allArticles->sortByDesc('published_at')->take(4);
        }

        // Manual pagination
        $perPage = 9;
        $page = max(1, (int) $request->query('page', 1));
        $total = $filteredArticles->count();
        $paginated = $filteredArticles->forPage($page, $perPage)->values()->all();

        $pagination = [
            'current_page' => $page,
            'total_pages' => ceil($total / $perPage),
            'has_next' => $page < ceil($total / $perPage),
            'has_prev' => $page > 1,
        ];

        return view('pages.news.index', [
            'seo' => [
                'title' => 'Tin tức - ' . config('site.brand'),
                'description' => 'Tin tức mới nhất từ Công ty Cổ phần Xi măng Cẩm Phả.',
                'image' => '',
                'canonical' => url('/tin-tuc'),
            ],
            'articles' => $paginated,
            'featuredNews' => $featuredArticles,
            'categories' => $categories,
            'activeCategory' => $activeCategory,
            'pagination' => $pagination,
            'partners' => config('partners'),
        ]);
    }

    public function show(string $slug)
    {
        $allArticles = collect(config('news.articles'));
        $article = $allArticles->firstWhere('slug', $slug);

        if (!$article) {
            abort(404);
        }

        $relatedArticles = $allArticles
            ->whereIn('slug', $article['related_slugs'] ?? [])
            ->values()
            ->all();

        return view('pages.news.show', [
            'seo' => [
                'title' => $article['seo_title'] ?? $article['title'] . ' - ' . config('site.brand'),
                'description' => $article['seo_description'] ?? $article['excerpt'],
                'image' => $article['image'],
                'canonical' => url('/tin-tuc/' . $slug),
            ],
            'article' => $article,
            'relatedArticles' => $relatedArticles,
            'partners' => config('partners'),
        ]);
    }
}
