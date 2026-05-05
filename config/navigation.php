<?php

return [
    'main_menu' => [
        ['title' => 'Trang chủ', 'href' => '/', 'route' => 'home'],
        [
            'title' => 'Giới thiệu',
            'href' => '/gioi-thieu',
            'route' => 'introduction',
            'children' => [
                ['title' => 'Giới thiệu chung', 'href' => '/gioi-thieu', 'route' => 'introduction'],
                ['title' => 'Thông tin công ty', 'href' => '/thong-tin-cong-ty', 'route' => 'company.info'],
            ],
        ],
        [
            'title' => 'Sản phẩm',
            'href' => '/san-pham',
            'route' => 'products.index',
            'children' => [
                ['title' => 'Tất cả', 'href' => '/san-pham'],
                ['title' => 'Xi măng', 'href' => '/san-pham?type=cement'],
                ['title' => 'Clinker', 'href' => '/san-pham?type=clinker'],
            ],
        ],
        ['title' => 'Tin tức', 'href' => '/tin-tuc', 'route' => 'news.index'],
        [
            'title' => 'Công bố thông tin',
            'href' => '/cong-bo-thong-tin',
            'children' => [
                ['title' => 'Chính sách chất lượng', 'href' => '/chinh-sach-chat-luong', 'route' => 'quality-policy.index'],
                ['title' => 'Báo cáo tài chính', 'href' => '/bao-cao-tai-chinh'],
            ],
        ],
        ['title' => 'Liên hệ', 'href' => '/lien-he', 'route' => 'contact.index'],
    ],
];
