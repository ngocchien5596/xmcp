<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function introduction()
    {
        return view('pages.introduction', [
            'seo' => [
                'title' => 'Giới thiệu - ' . config('site.brand'),
                'description' => 'Giới thiệu về Công ty Cổ phần Xi măng Cẩm Phả.',
                'image' => '',
                'canonical' => url('/gioi-thieu'),
            ],
            'partners' => config('partners'),
        ]);
    }

    public function companyInfo()
    {
        return view('pages.company-info', [
            'seo' => [
                'title' => 'Thông tin công ty - ' . config('site.brand'),
                'description' => 'Thông tin chi tiết về Công ty Cổ phần Xi măng Cẩm Phả.',
                'image' => '',
                'canonical' => url('/thong-tin-cong-ty'),
            ],
            'partners' => config('partners'),
        ]);
    }
}
