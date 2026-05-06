<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $site = config('site');
        $products = config('products.products');
        $projects = config('projects.projects');
        $allArticles = collect(config('news.articles'));
        
        // Lấy tin tức nổi bật (không bao gồm tuyển dụng để tránh trùng lặp nếu cần, 
        // nhưng ở đây cứ lấy 4 bài mới nhất nói chung)
        $news = $allArticles->sortByDesc('published_at')->take(4)->all();
        
        // Lấy các tin tuyển dụng thực tế (full objects cho carousel)
        $recruitmentArticles = $allArticles->where('category', 'recruitment')
            ->sortByDesc('published_at')
            ->all();

        $recruitmentData = $site['recruitment'];

        $partners = config('partners');

        return view('pages.home', [
            'seo' => [
                'title' => $site['brand'] . ' - ' . $site['slogan'],
                'description' => $site['description'],
                'image' => $site['hero_slides'][0]['image'] ?? '',
                'canonical' => url('/'),
            ],
            'heroSlides' => $site['hero_slides'],
            'brandClaim' => $site['brand_claim'],
            'stats' => $site['stats'],
            'products' => $products,
            'featuredNews' => $news,
            'recruitment' => $recruitmentData,
            'recruitmentArticles' => $recruitmentArticles,
            'cultureItems' => $site['cultures'],
            'projects' => $projects,
            'partners' => $partners,
        ]);
    }
}
