@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative h-[400px] md:h-[500px] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=2000&auto=format&fit=crop" alt="Hero background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-[#ED1C24]/80 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-[#ED1C24]/40"></div>
    </div>
    
    <div class="relative z-10 text-center px-4 max-w-5xl mx-auto w-full flex flex-col items-center">
        <h1 class="text-2xl md:text-4xl lg:text-[42px] font-bold text-white mb-6 tracking-wider uppercase drop-shadow-md">Thương hiệu xi măng hàng đầu Việt Nam</h1>
        
        <x-ui.laurel-heading title="Top nhà máy chuẩn ISO 9001:2000" size="md" text-class="text-white" />
    </div>
    
    <div class="absolute bottom-8 left-4 md:bottom-12 md:left-12 flex items-center gap-4 text-white">
        <!-- Chemical/Hexagon Icon Cluster -->
        <svg class="w-14 h-14 md:w-20 md:h-20 text-white" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="1.5">
            <polygon points="30,25 50,15 70,25 70,45 50,55 30,45" />
            <polygon points="10,55 30,45 50,55 50,75 30,85 10,75" />
            <polygon points="50,55 70,45 90,55 90,75 70,85 50,75" />
            <circle cx="30" cy="25" r="2" fill="white"/>
            <circle cx="50" cy="15" r="2" fill="white"/>
            <circle cx="70" cy="25" r="2" fill="white"/>
            <circle cx="70" cy="45" r="2" fill="white"/>
            <circle cx="50" cy="55" r="2" fill="white"/>
            <circle cx="30" cy="45" r="2" fill="white"/>
            <circle cx="10" cy="55" r="2" fill="white"/>
            <circle cx="10" cy="75" r="2" fill="white"/>
            <circle cx="30" cy="85" r="2" fill="white"/>
            <circle cx="50" cy="75" r="2" fill="white"/>
            <circle cx="70" cy="85" r="2" fill="white"/>
            <circle cx="90" cy="75" r="2" fill="white"/>
            <circle cx="90" cy="55" r="2" fill="white"/>
        </svg>
        <div class="flex flex-col justify-center">
            <div class="text-xl md:text-2xl font-bold tracking-wider uppercase">Giới thiệu chung</div>
            <div class="text-[13px] md:text-[15px] font-light tracking-wide mt-1">Hệ thống quản lý chất lượng Quốc tế ISO 9001:2015</div>
        </div>
    </div>
</section>

<!-- Quote Section -->
<section class="py-12 md:py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <p class="text-lg md:text-xl italic text-gray-700 leading-relaxed font-medium">
            Với mục tiêu chất lượng là hàng đầu, giá thành hợp lý, sự phối hợp cung cấp sản phẩm linh hoạt giữa nhà máy với nhà phân phối, giữa nhà phân phối với người tiêu dùng, thương hiệu "Xi măng Cẩm Phả" đã đạt được nhiều danh hiệu lớn
        </p>
    </div>
</section>

@php $site = config('site'); @endphp

<!-- Detailed Company Info Section -->
<section class="py-12 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
            <!-- Left: Factory Image -->
            <div class="rounded-sm overflow-hidden shadow-lg border border-gray-100 motion-border-card">
                <img src="https://images.unsplash.com/photo-1541888086425-d81bb19240f5?q=80&w=2070&auto=format&fit=crop" alt="Nhà máy Xi Măng Cẩm Phả" class="w-full h-auto object-cover aspect-[4/3]">
            </div>
            
            <!-- Right: Info List -->
            <div>
                <p class="text-gray-500 font-medium mb-1 text-sm md:text-base">Thông tin công ty</p>
                <h2 class="text-3xl md:text-4xl font-black text-[#ED1C24] mb-8 uppercase tracking-tight">Công ty cổ phần Xi Măng Cẩm Phả</h2>
                
                <div class="space-y-4 text-[#333] text-sm md:text-[15.5px] leading-relaxed">
                    <div class="flex gap-2">
                        <span class="font-bold shrink-0">1. Tên doanh nghiệp:</span>
                        <span class="font-bold uppercase">{{ $site['company_info']['enterprise_name'] }}</span>
                    </div>
                    <div class="flex gap-2">
                        <span class="font-bold shrink-0">2. Cơ quan chủ quản:</span>
                        <span>{{ $site['company_info']['managing_agency'] }}</span>
                    </div>
                    <div class="flex gap-2">
                        <span class="font-bold shrink-0">2. Địa chỉ:</span>
                        <span>{{ $site['address'] }}</span>
                    </div>
                    <div class="flex gap-2">
                        <span class="font-bold shrink-0">3. Điện thoại:</span>
                        <span>{{ $site['hotline'] }}</span>
                    </div>
                    <div class="flex gap-2">
                        <span class="font-bold shrink-0">4. Fax:</span>
                        <span>{{ $site['fax'] }}</span>
                    </div>
                    <div class="flex gap-2">
                        <span class="font-bold shrink-0">5. Website:</span>
                        <a href="http://{{ $site['website'] }}" class="text-blue-600 hover:underline">{{ $site['website'] }}</a>
                    </div>
                    <div class="flex gap-2">
                        <span class="font-bold shrink-0">6. Email:</span>
                        <a href="mailto:{{ $site['email'] }}" class="text-blue-600 hover:underline">{{ $site['email'] }}</a>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="flex gap-2">
                            <span class="font-bold shrink-0">7. Giấy phép đăng ký kinh doanh:</span>
                            <span class="font-bold">{{ $site['tax_code'] }}</span>
                        </div>
                        <ul class="pl-6 list-disc">
                            <li>Ngày cấp: {{ $site['company_info']['tax_first_date'] }} – Nơi cấp: {{ $site['company_info']['tax_issued_by'] }}</li>
                        </ul>
                    </div>
                    <div class="flex gap-2">
                        <span class="font-bold shrink-0">8. Loại hình doanh nghiệp:</span>
                        <span>Công ty Cổ phần</span>
                    </div>
                    <div class="flex gap-2">
                        <span class="font-bold shrink-0">9. Đại diện pháp luật:</span>
                        <span><strong class="text-gray-900">{{ $site['company_info']['legal_representative'] }}</strong> – Chức vụ: Tổng Giám đốc</span>
                    </div>
                    <div class="flex gap-2">
                        <span class="font-bold shrink-0">10. Phụ trách nội dung:</span>
                        <span>{{ $site['company_info']['content_manager'] }}</span>
                    </div>
                    <div class="flex gap-2">
                        <span class="font-bold shrink-0">10. Mã số thuế:</span>
                        <span class="font-bold">{{ $site['tax_code'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Sectors Section -->
<section class="py-16 md:py-24 bg-[#FDF6F0]">
    <div class="max-w-7xl mx-auto px-4 md:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Left: List -->
            <div>
                <h2 class="text-2xl md:text-3xl font-black text-[#ED1C24] mb-8 uppercase tracking-tight">Ngành nghề kinh doanh</h2>
                <ul class="space-y-4 text-[#333] text-sm md:text-base font-medium">
                    <li class="flex items-start gap-3">
                        <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-[#ED1C24]"></span>
                        Sản xuất xi măng Các loại
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-[#ED1C24]"></span>
                        Khai thác cát, đá vôi, đất sét, nguyên liệu xi măng
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-[#ED1C24]"></span>
                        Sản xuất và kinh doanh vật liệu xây dựng
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-[#ED1C24]"></span>
                        Kinh doanh clinker, thạch cao và xi măng các loại
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-[#ED1C24]"></span>
                        Kinh doanh thiết bị xây dựng và khai thác mỏ
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-[#ED1C24]"></span>
                        Kinh doanh máy móc thiết bị, phụ tùng nguyên vật liệu phục vụ công nghiệp xi măng
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-[#ED1C24]"></span>
                        Vận tải hàng hóa đường bộ, đường thủy
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-[#ED1C24]"></span>
                        Kinh doanh khai thác cảng biển, bốc xếp hàng hóa thủy, bộ và cho thuê kho bãi
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-[#ED1C24]"></span>
                        Xuất nhập khẩu các loại nguyên vật liệu sản xuất xi măng, xi măng các loại và máy móc thiết bị phụ tùng phục vụ ngành công nghiệp xi măng.
                    </li>
                </ul>
            </div>
            
            <!-- Right: Image -->
            <div class="rounded-sm overflow-hidden shadow-2xl border-4 border-white">
                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=2070&auto=format&fit=crop" alt="Ngành nghề kinh doanh" class="w-full h-auto object-cover aspect-[4/3]">
            </div>
        </div>
    </div>
</section>

<!-- Milestones Section -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-8">
        <div class="flex items-center gap-6 mb-12">
            <h2 class="text-2xl md:text-3xl font-black text-[#222] uppercase tracking-tight">Những cột mốc quan trọng</h2>
            <x-ui.brand-mark size="md" :bar-width="56" />
            <div class="flex-1 border-b border-gray-100"></div>
            <div class="hidden md:block text-4xl font-black text-gray-100 uppercase tracking-tighter select-none">Xi Măng Cẩm Phả</div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Milestone 1 -->
            <div class="group cursor-pointer rounded-sm border border-gray-100 bg-white p-4 shadow-sm motion-border-card">
                <div class="aspect-video overflow-hidden rounded-sm mb-6 border border-gray-100 shadow-sm transition-transform duration-500 group-hover:shadow-md">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f952?q=80&w=2070&auto=format&fit=crop" alt="Hiến máu nhân đạo" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                <h3 class="text-lg font-bold text-[#222] mb-3 group-hover:text-[#ED1C24] transition-colors line-clamp-2">Hoạt động "Hiến máu nhân đạo" - Trao đời sự sống</h3>
                <p class="text-sm text-gray-600 leading-relaxed line-clamp-4">
                    Ngày 27 và 28/05/2020, Công ty CP Xi măng Cẩm Phả đã tổ chức Đại hội Đảng bộ Công ty lần thứ III, nhiệm kỳ 2020 – 2025 với quyết tâm xây dựng Công ty trở thành đơn vị "Sản xuất xi măng có năng suất và chất lượng ổn định thuộc top đầu về hiệu quả SXKD trong ngành Xi măng Việt Nam"
                </p>
            </div>
            
            <!-- Milestone 2 -->
            <div class="group cursor-pointer rounded-sm border border-gray-100 bg-white p-4 shadow-sm motion-border-card">
                <div class="aspect-video overflow-hidden rounded-sm mb-6 border border-gray-100 shadow-sm transition-transform duration-500 group-hover:shadow-md">
                    <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=2070&auto=format&fit=crop" alt="Đại hội Đảng bộ" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                <h3 class="text-lg font-bold text-[#222] mb-3 group-hover:text-[#ED1C24] transition-colors line-clamp-2">Đại hội Đảng bộ Công ty lần thứ III, nhiệm kỳ 2020 – 2025</h3>
                <p class="text-sm text-gray-600 leading-relaxed line-clamp-4">
                    Ngày 27 và 28/05/2020, Công ty CP Xi măng Cẩm Phả đã tổ chức Đại hội Đảng bộ Công ty lần thứ III, nhiệm kỳ 2020 – 2025 với quyết tâm xây dựng Công ty trở thành đơn vị "Sản xuất xi măng có năng suất và chất lượng ổn định thuộc top đầu về hiệu quả SXKD trong ngành Xi măng Việt Nam"
                </p>
            </div>
            
            <!-- Milestone 3 -->
            <div class="group cursor-pointer rounded-sm border border-gray-100 bg-white p-4 shadow-sm motion-border-card">
                <div class="aspect-video overflow-hidden rounded-sm mb-6 border border-gray-100 shadow-sm transition-transform duration-500 group-hover:shadow-md">
                    <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=2070&auto=format&fit=crop" alt="Chuyển đổi số" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                <h3 class="text-lg font-bold text-[#222] mb-3 group-hover:text-[#ED1C24] transition-colors line-clamp-2">Lễ trao thưởng chuyển đổi số Việt Nam - Việt Nam digital awards 2020</h3>
                <p class="text-sm text-gray-600 leading-relaxed line-clamp-4">
                    Ngày 27 và 28/05/2020, Công ty CP Xi măng Cẩm Phả đã tổ chức Đại hội Đảng bộ Công ty lần thứ III, nhiệm kỳ 2020 – 2025 với quyết tâm xây dựng Công ty trở thành đơn vị "Sản xuất xi măng có năng suất và chất lượng ổn định thuộc top đầu về hiệu quả SXKD trong ngành Xi măng Việt Nam"
                </p>
            </div>
        </div>
    </div>
</section>

@include('sections.common.partner-section', ['partners' => $partners])
@endsection
