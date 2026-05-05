<?php
$config = file_get_contents('g:/Source-code/website-congty/config/news.php');

$newArticles = "";
for ($i = 6; $i <= 20; $i++) {
    $newArticles .= "
        [
            'id' => 'n{$i}',
            'slug' => 'mock-article-{$i}',
            'title' => 'Bài viết tin tức mẫu số {$i} - Thêm nội dung để kiểm tra phân trang',
            'excerpt' => 'Đây là đoạn trích dẫn mẫu cho bài viết số {$i}. Đoạn trích này có thể hơi dài một chút để đảm bảo chức năng line-clamp 3 dòng hoạt động chính xác khi hiển thị trên thẻ.',
            'content' => '<p>Nội dung chi tiết cho bài viết số {$i}</p>',
            'image' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f952?q=80&w=2070&auto=format&fit=crop',
            'category' => 'company-activity',
            'author' => 'Ban Truyền thông',
            'published_at' => '2025-11-".sprintf('%02d', $i)."',
            'is_featured' => false,
            'views' => rand(100, 1000),
            'comments' => rand(0, 10),
            'related_slugs' => [],
            'seo_title' => 'Bài viết mẫu {$i}',
            'seo_description' => 'Mô tả seo mẫu {$i}',
        ],";
}

$config = str_replace("    ],\n];", $newArticles . "\n    ],\n];", $config);

file_put_contents('g:/Source-code/website-congty/config/news.php', $config);
echo "Added 15 mock articles.\n";
