<?php
 
 return [
     'categories' => [
         [
             'label' => 'Tất cả',
             'value' => null,
         ],
         [
             'label' => 'Công trình trọng điểm',
             'value' => 'key-projects',
         ],
         [
             'label' => 'Cơ sở hạ tầng',
             'value' => 'infrastructure',
         ],
         [
             'label' => 'Công trình công nghiệp',
             'value' => 'industrial',
         ],
         [
             'label' => 'Dân dụng & Đô thị',
             'value' => 'civil',
         ],
     ],
 
     'projects' => [
         [
             'id' => 'p1',
             'slug' => 'cong-vien-dai-duong-ha-long',
             'title' => 'CÔNG VIÊN ĐẠI DƯƠNG TẠI HẠ LONG - QUẢNG NINH',
             'category_label' => 'Công trình trọng điểm',
             'category' => 'key-projects',
             'badge' => 'CÔNG TRÌNH TRỌNG ĐIỂM',
             'image' => 'images/cv1.jpg',
             'location' => 'Hạ Long, Quảng Ninh',
             'year' => '2019',
             'description' => 'Một trong những tổ hợp vui chơi giải trí hàng đầu Đông Nam Á, sử dụng xi măng Cẩm Phả cho các hạng mục kết cấu chịu lực và hoàn thiện.',
             'content' => '<p>Dự án Công viên Đại Dương Hạ Long là một trong những dự án du lịch trọng điểm của tỉnh Quảng Ninh. Với quy mô lớn và yêu cầu kỹ thuật khắt khe, Xi măng Cẩm Phả tự hào là nhà cung cấp chính cho dự án này.</p><p>Sản phẩm của chúng tôi được sử dụng cho toàn bộ các hạng mục từ nền móng, trụ cột đến các khu vui chơi phức hợp, đảm bảo độ bền vững trước môi trường biển khắc nghiệt.</p>',
             'features' => [
                 'Sử dụng xi măng PCB 40 bền sunfat',
                 'Tổng khối lượng cung ứng hơn 50.000 tấn',
                 'Đảm bảo tiến độ thi công thần tốc',
             ],
         ],
         [
             'id' => 'p2',
             'slug' => 'khu-do-thi-times-city-ha-nooi',
             'title' => 'KHU ĐÔ THỊ PHỨC HỢP TIMES CITY TẠI HÀ NỘI',
             'category_label' => 'Dân dụng & Đô thị',
             'category' => 'civil',
             'badge' => 'DÂN DỤNG',
             'image' => 'https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=2070&auto=format&fit=crop',
             'location' => 'Minh Khai, Hà Nội',
             'year' => '2015',
             'description' => 'Khu đô thị kiểu mẫu tại thủ đô, nơi xi măng Cẩm Phả khẳng định chất lượng trong các công trình dân dụng quy mô lớn.',
             'content' => '<p>Times City là biểu tượng của sự hiện đại và tiện nghi tại Hà Nội. Trong suốt quá trình xây dựng, Xi măng Cẩm Phả đã cung cấp các dòng sản phẩm chất lượng cao, giúp tạo nên những tòa tháp vững chãi và an toàn cho hàng ngàn hộ gia đình.</p>',
             'features' => [
                 'Cung cấp xi măng rời cho trạm trộn bê tông tươi',
                 'Độ sụt và tính công tác của bê tông ổn định',
                 'Góp phần kiến tạo không gian sống hiện đại',
             ],
         ],
         [
             'id' => 'p3',
             'slug' => 'vinhomes-tan-cang-hcm',
             'title' => 'KHU ĐÔ THỊ VINHOMES TÂN CẢNG TẠI TP. HỒ CHÍ MINH',
             'category_label' => 'Dân dụng & Đô thị',
             'category' => 'civil',
             'badge' => 'ĐÔ THỊ',
             'image' => 'https://images.unsplash.com/photo-1545558014-8692077e9b5c?q=80&w=2070&auto=format&fit=crop',
             'location' => 'Bình Thạnh, TP. Hồ Chí Minh',
             'year' => '2018',
             'description' => 'Đại dự án ven sông Sài Gòn với tòa Landmark 81, Xi măng Cẩm Phả đóng góp vào sự vững chắc của các khối đế và hạ tầng.',
             'content' => '<p>Vinhomes Tân Cảng là một trong những khu đô thị cao cấp nhất Việt Nam. Với vị trí ven sông, yêu cầu về chống thấm và độ bền của vật liệu xây dựng là ưu tiên hàng đầu. Xi măng Cẩm Phả đã đáp ứng xuất sắc các tiêu chuẩn này.</p>',
             'features' => [
                 'Độ bền cao trong môi trường độ ẩm lớn',
                 'Khả năng chống nứt bề mặt ưu việt',
                 'Sản phẩm được các nhà thầu lớn tin dùng',
             ],
         ],
     ],
 ];
