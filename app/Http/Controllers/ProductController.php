<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $type = $request->query('type');
        $allProducts = config('products.products');
        
        $products = collect($allProducts);
        
        if ($type) {
            $products = $products->where('type', $type);
        }
        
        $products = $products->all();
        $currentType = $type;
        $partners = config('partners');

        return view('pages.products.index', compact('products', 'currentType', 'partners'));
    }

    /**
     * Display the specified product detail page.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $allProducts = collect(config('products.products'));
        
        $product = $allProducts->where('slug', $slug)->first();

        if (!$product) {
            abort(404);
        }

        // Get related products based on related_slugs array
        $relatedSlugs = $product['related_slugs'] ?? [];
        $relatedProducts = $allProducts->whereIn('slug', $relatedSlugs)->all();

        return view('pages.products.show', compact('product', 'relatedProducts'));
    }
}
