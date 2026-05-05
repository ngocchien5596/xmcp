<?php

namespace App\Http\Controllers;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = config('documents');
        $featuredNews = collect(config('news.articles'))->take(3)->all();

        return view('pages.quality-policy', [
            'seo' => [
                'title' => 'Chính sách chất lượng - ' . config('site.brand'),
                'description' => 'Chính sách chất lượng và tài liệu công bố của Xi Măng Cẩm Phả.',
                'image' => '',
                'canonical' => url('/chinh-sach-chat-luong'),
            ],
            'documents' => $documents,
            'featuredNews' => $featuredNews,
            'partners' => config('partners'),
        ]);
    }

    public function financialReports(\Illuminate\Http\Request $request)
    {
        $config = config('financial_reports');
        $allReports = collect($config['reports']);
        $categories = $config['categories'];
        $activeYear = $request->query('year');

        $filteredReports = $activeYear
            ? $allReports->where('year', $activeYear)->values()
            : $allReports;

        return view('pages.financial-reports', [
            'seo' => [
                'title' => 'Báo cáo tài chính - ' . config('site.brand'),
                'description' => 'Báo cáo tài chính, báo cáo thường niên và nghị quyết cổ đông của Xi Măng Cẩm Phả.',
                'image' => '',
                'canonical' => url('/bao-cao-tai-chinh'),
            ],
            'reports' => $filteredReports,
            'categories' => $categories,
            'activeYear' => $activeYear,
            'partners' => config('partners'),
        ]);
    }
}
