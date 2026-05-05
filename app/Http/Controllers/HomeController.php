<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $site = config('site');
        $products = collect(config('products.products'))->take(4)->all();
        $news = collect(config('news.articles'))->sortByDesc('published_at')->take(4)->all();
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
            'recruitment' => $site['recruitment'],
            'cultureItems' => $site['cultures'],
            'projects' => $site['projects'],
            'partners' => $partners,
        ]);
    }
}
