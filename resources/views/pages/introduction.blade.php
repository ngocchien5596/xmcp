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
        <h1 class="text-2xl md:text-4xl lg:text-[42px] font-bold text-white mb-6 tracking-wider uppercase drop-shadow-md">THƯƠNG HIỆU XI MĂNG HÀNG ĐẦU VIỆT NAM</h1>
        
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
            <div class="text-xl md:text-2xl font-bold tracking-wider uppercase">Giới thiệu</div>
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

<!-- About Us Section -->
<section class="py-12 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="rounded-lg overflow-hidden shadow-2xl reveal reveal-left" data-animate>
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85f82e?q=80&w=2232&auto=format&fit=crop" alt="Nhà máy Xi Măng Cẩm Phả" class="w-full h-auto object-cover aspect-[4/3] motion-image">
            </div>
            <div>
                <p class="text-gray-500 font-medium mb-2">Về chúng tôi</p>
                <h2 class="text-3xl md:text-4xl font-bold text-[#ED1C24] mb-6">Công ty cổ phần Xi Măng Cẩm Phả</h2>
                
                <div class="space-y-4 text-gray-700 text-base md:text-lg text-justify leading-relaxed reveal reveal-up" data-animate>
                    <p>
                        Tháng 8 năm 2008, Công ty đã được Trung tâm chứng nhận phù hợp tiêu chuẩn thuộc Tổng cục tiêu chuẩn đo lường chất lượng cấp Giấy chứng nhận phù hợp tiêu chuẩn <strong class="text-gray-900">ISO 9001:2000</strong> và <strong class="text-gray-900">ISO 14001:1996</strong>
                    </p>
                    <p>
                        Cùng với sự phấn đấu bền bỉ trong những năm qua, Công ty cổ phần <strong class="text-gray-900">Xi măng Cẩm Phả</strong> đã được Bộ xây dựng, Ngành xây dựng Việt Nam gắn biển công trình chào mừng 50 năm Ngành xây dựng Việt Nam và tặng nhiều cúp vàng, cờ thưởng thi đua
                    </p>
                </div>
                
                <div class="mt-8 pt-8 border-t border-gray-200 flex flex-col sm:flex-row gap-8 items-center sm:items-start">
                    <div class="flex items-center gap-4 flex-1">
                        <div class="w-16 h-16 shrink-0 relative">
                            <!-- Medal icon SVG -->
                            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4f/Medal_Gold.png" alt="Gold Medal" class="w-full h-full object-contain">
                        </div>
                        <p class="text-sm font-bold text-gray-800"><span class="block">Tiêu chuẩn ISO 9001:2000</span> và ISO 14001:1996</p>
                    </div>
                    
                    <div class="hidden sm:block w-px h-16 bg-gray-200"></div>
                    
                    <div class="flex items-center gap-4 flex-1">
                        <div class="text-5xl md:text-6xl font-bold text-[#ED1C24] tracking-tighter">12</div>
                        <p class="text-sm font-bold text-gray-800"><span class="block">Thành lập</span> và phát triển</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision, Mission, Core Values Section -->
<section class="py-16 md:py-24" style="background-color: #F5EBE1; background-image: url('https://www.transparenttextures.com/patterns/cream-paper.png');">
    <div class="max-w-7xl mx-auto px-4 md:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Left side: Interactive Tab Layout -->
            <div>
                <!-- 3 Title Buttons -->
                <div class="grid grid-cols-3 gap-4 lg:gap-6 mb-8" id="corporate-tabs">
                    <button type="button" data-tab="vision" aria-pressed="true" class="tab-btn active bg-[#ED1C24] text-white py-3 font-bold uppercase text-[13px] md:text-[15px] w-full text-center rounded-[3px] shadow-sm transition-all duration-300 cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#ED1C24]/50">
                        TẦM NHÌN
                    </button>
                    <button type="button" data-tab="mission" aria-pressed="false" class="tab-btn bg-white text-[#ED1C24] py-3 font-bold uppercase text-[13px] md:text-[15px] w-full text-center rounded-[3px] shadow-sm transition-all duration-300 cursor-pointer border border-gray-100 hover:bg-[#ED1C24]/5 focus:outline-none focus:ring-2 focus:ring-[#ED1C24]/50">
                        SỨ MỆNH
                    </button>
                    <button type="button" data-tab="values" aria-pressed="false" class="tab-btn bg-white text-[#ED1C24] py-3 font-bold uppercase text-[13px] md:text-[15px] w-full text-center rounded-[3px] shadow-sm transition-all duration-300 cursor-pointer border border-gray-100 hover:bg-[#ED1C24]/5 focus:outline-none focus:ring-2 focus:ring-[#ED1C24]/50">
                        GIÁ TRỊ CỐT LÕI
                    </button>
                </div>
                
                <!-- Text Content Blocks -->
                <div class="mb-12 min-h-[220px] md:min-h-[180px]">
                    <!-- Vision Content -->
                    <div id="content-vision" class="tab-content transition-opacity duration-500 text-[#333] text-[15.5px] leading-[1.8] font-medium text-justify">
                        Phấn đấu trở thành thương hiệu xi măng hàng đầu tại Việt Nam, khẳng định vị thế bằng chất lượng sản phẩm vượt trội, công nghệ sản xuất hiện đại và hệ thống phân phối chuyên nghiệp, bền vững.<br><br>
                        Đồng thời, tiên phong trong việc đưa xi măng Việt Nam vươn ra thị trường quốc tế, đáp ứng các tiêu chuẩn khắt khe của thế giới, góp phần nâng cao giá trị thương hiệu xi măng Việt Nam trên bản đồ xây dựng toàn cầu.
                    </div>
                    <!-- Mission Content -->
                    <div id="content-mission" class="tab-content hidden transition-opacity duration-500 text-[#333] text-[15.5px] leading-[1.8] font-medium text-justify">
                        Cung cấp các sản phẩm xi măng chất lượng cao, thân thiện với môi trường, góp phần kiến tạo những công trình bền vững cho tương lai. Tối ưu hóa lợi ích cho khách hàng, đối tác và cổ đông, đồng thời thực hiện tốt trách nhiệm với cộng đồng và xã hội thông qua các hoạt động an sinh bền vững.<br><br>
                        Chúng tôi cam kết không ngừng đổi mới công nghệ để mang đến giải pháp vật liệu xây dựng tối ưu nhất cho mọi khách hàng.
                    </div>
                    <!-- Values Content -->
                    <div id="content-values" class="tab-content hidden transition-opacity duration-500 text-[#333] text-[15.5px] leading-[1.8] font-medium text-justify">
                        <strong class="text-[#ED1C24]">CHẤT LƯỢNG:</strong> Luôn đặt chất lượng sản phẩm làm trọng tâm, cam kết đạt chuẩn quốc tế trong từng bao xi măng.<br>
                        <strong class="text-[#ED1C24]">TRÁCH NHIỆM:</strong> Thực hiện trách nhiệm cao nhất với khách hàng, người lao động và môi trường.<br>
                        <strong class="text-[#ED1C24]">SÁNG TẠO:</strong> Không ngừng nghiên cứu, ứng dụng khoa học kỹ thuật hiện đại vào sản xuất.<br>
                        <strong class="text-[#ED1C24]">BỀN VỮNG:</strong> Hướng tới sự phát triển dài hạn, hài hòa giữa lợi ích kinh tế và bảo vệ hệ sinh thái tự nhiên.
                    </div>
                </div>
                
                <!-- 3 Icons stats -->
                <div class="grid grid-cols-3 gap-2 sm:gap-4 text-center" data-stagger-container>
                    <div class="reveal reveal-up" data-animate>
                        <div class="h-16 flex justify-center items-end mb-2 text-gray-800">
                            <!-- Vision Icon -->
                            <svg viewBox="0 0 48 48" fill="none" stroke="#222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-12 h-12">
                                <path d="M24 10C16 10 10 16 10 16s6 6 14 6 14-6 14-6-6-6-14-6z"/>
                                <path d="M24 12l1 2h2.5l-2 1.5 1 2.5-2.5-1.5-2.5 1.5 1-2.5-2-1.5h2.5z"/>
                                <circle cx="24" cy="28" r="4"/>
                                <path d="M18 36c0-4 4-6 6-6s6 2 6 6"/>
                                <circle cx="14" cy="30" r="3"/>
                                <path d="M8 38c0-3 3-5 5-5s2.5.5 3.5 1.5"/>
                                <circle cx="34" cy="30" r="3"/>
                                <path d="M40 38c0-3-3-5-5-5s-2.5.5-3.5 1.5"/>
                            </svg>
                        </div>
                        <div class="font-bold text-[#ED1C24] text-base md:text-lg mb-1">Năm 2019</div>
                        <div class="text-[13px] md:text-[15px] font-medium text-[#222]">Thương hiệu giá trị</div>
                    </div>
                    <div class="reveal reveal-up" data-animate>
                        <div class="h-16 flex justify-center items-end mb-2 text-gray-800">
                            <!-- Mission Icon -->
                            <svg viewBox="0 0 48 48" fill="none" stroke="#222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-12 h-12">
                                <circle cx="24" cy="16" r="8"/>
                                <circle cx="24" cy="16" r="4"/>
                                <path d="M30 10l-6 6"/>
                                <path d="M32 8l-2 2"/>
                                <path d="M28 8h4v4"/>
                                <circle cx="24" cy="32" r="4"/>
                                <path d="M18 40c0-4 4-6 6-6s6 2 6 6"/>
                                <circle cx="14" cy="34" r="3"/>
                                <path d="M8 42c0-3 3-5 5-5s2.5.5 3.5 1.5"/>
                                <circle cx="34" cy="34" r="3"/>
                                <path d="M40 42c0-3-3-5-5-5s-2.5.5-3.5 1.5"/>
                            </svg>
                        </div>
                        <div class="font-bold text-[#ED1C24] text-base md:text-lg mb-1">Năm 2019</div>
                        <div class="text-[13px] md:text-[15px] font-medium text-[#222]">Hoàn thành chỉ tiêu</div>
                    </div>
                    <div class="reveal reveal-up" data-animate>
                        <div class="h-16 flex justify-center items-end mb-2 text-gray-800">
                            <!-- Network Icon -->
                            <svg viewBox="0 0 48 48" fill="none" stroke="#222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-12 h-12">
                                <circle cx="24" cy="26" r="14"/>
                                <ellipse cx="24" cy="26" rx="6" ry="14"/>
                                <path d="M10 26h28"/>
                                <rect x="8" y="8" width="6" height="6" fill="#fff"/>
                                <path d="M14 14l5 5"/>
                                <rect x="34" y="6" width="6" height="6" fill="#fff"/>
                                <path d="M34 12l-4 4"/>
                                <rect x="36" y="34" width="6" height="6" fill="#fff"/>
                                <path d="M36 34l-4-3"/>
                                <rect x="6" y="32" width="6" height="6" fill="#fff"/>
                                <path d="M12 32l5-2"/>
                            </svg>
                        </div>
                        <div class="font-bold text-[#ED1C24] text-base md:text-lg mb-1">Toàn quốc</div>
                        <div class="text-[13px] md:text-[15px] font-medium text-[#222]">Phân phối rộng khắp</div>
                    </div>
                </div>
            </div>
            
            <!-- Right side: Image -->
            <div class="h-full w-full">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop" alt="Doanh nhân thành đạt" class="w-full h-full object-cover rounded-md shadow-sm min-h-[400px]">
            </div>
        </div>
    </div>
</section>

<!-- Development History -->
<section class="py-20 bg-white relative overflow-hidden flex flex-col items-center">
    <!-- Background Watermark Text -->
    <div class="absolute inset-0 flex items-start justify-center pt-10 pointer-events-none select-none z-0">
        <span class="font-bold whitespace-nowrap" style="font-size: clamp(3rem, 8vw, 8rem); color: transparent; -webkit-text-stroke: 1.5px rgba(0,0,0,0.06);">
            Xi Măng Cẩm Phả
        </span>
    </div>
    
    <div class="max-w-5xl mx-auto px-4 relative z-10 w-full mt-4 md:mt-8">
        <h2 class="text-3xl md:text-4xl font-bold text-[#ED1C24] text-center relative z-10 bg-white/50 inline-block px-8 mx-auto w-full" style="margin-bottom: 80px;">
            Lịch sử phát triển
        </h2>
        
        <div class="relative w-full max-w-4xl mx-auto">
            <!-- Timeline horizontal line (Desktop only) via Custom CSS to bypass Tailwind JIT cache -->
            <style>
                .custom-timeline-line {
                    display: none;
                    position: absolute;
                    top: 50%;
                    left: 0;
                    width: 100%;
                    height: 2px;
                    transform: translateY(-50%);
                    background-color: rgba(237, 28, 36, 0.18);
                    z-index: 0;
                }
                @media (min-width: 768px) {
                    .custom-timeline-line {
                        display: block;
                    }
                }
            </style>
            <div class="timeline-track" aria-hidden="true">
                <div class="custom-timeline-line"></div>
                <div class="custom-timeline-line timeline-line-animate timeline-track-fill" data-animate></div>
            </div>
            
            <div class="flex flex-col md:flex-row w-full relative z-10" data-stagger-container>
                <!-- 2001 -->
                <div class="flex-1 flex flex-col items-center text-center mb-10 md:mb-0 reveal reveal-up" data-animate>
                    <div class="flex items-center text-xl md:text-2xl font-bold text-[#ED1C24]" style="height: 32px; margin-bottom: 16px;">2001</div>
                    <div class="timeline-dot"></div>
                    <p class="text-sm text-[#333] leading-relaxed" style="max-width: 160px; margin-top: 16px;">Thành lập công ty và<br>triển khai đốt lò</p>
                </div>
                
                <!-- 2013 -->
                <div class="flex-1 flex flex-col items-center text-center mb-10 md:mb-0 reveal reveal-up" data-animate>
                    <div class="flex items-center text-xl md:text-2xl font-bold text-[#ED1C24]" style="height: 32px; margin-bottom: 16px;">2013</div>
                    <div class="timeline-dot"></div>
                    <p class="text-sm text-[#333] leading-relaxed" style="max-width: 160px; margin-top: 16px;">Chính thức bước vào<br>ngôi nhà chung viettel</p>
                </div>
                
                <!-- 2018 -->
                <div class="flex-1 flex flex-col items-center text-center mb-10 md:mb-0 reveal reveal-up" data-animate>
                    <div class="flex items-center text-xl md:text-2xl font-bold text-[#ED1C24]" style="height: 32px; margin-bottom: 16px;">2018</div>
                    <div class="timeline-dot"></div>
                    <p class="text-sm text-[#333] leading-relaxed" style="max-width: 160px; margin-top: 16px;">Kỷ niệm 10 năm thành<br>lập công ty</p>
                </div>
                
                <!-- 2020 -->
                <div class="flex-1 flex flex-col items-center text-center reveal reveal-up" data-animate>
                    <div class="flex items-center text-xl md:text-2xl font-bold text-[#ED1C24]" style="height: 32px; margin-bottom: 16px;">2020</div>
                    <div class="timeline-dot"></div>
                    <p class="text-sm text-[#333] leading-relaxed" style="max-width: 160px; margin-top: 16px;">Thay đổi nhận diện<br>thương hiệu</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Awards Section -->
<section class="py-20 bg-gray-100 relative overflow-hidden">
    <!-- Background Watermark Text -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-5">
        <h2 class="text-[10vw] font-black text-gray-500 whitespace-nowrap">Xi Măng Cẩm Phả</h2>
    </div>
    
    <div class="max-w-6xl mx-auto px-4 relative z-10">
        <h2 class="text-3xl md:text-4xl font-bold text-[#ED1C24] text-center mb-16">Danh hiệu & Giải thưởng</h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6" data-stagger-container>
            <!-- Award 1 -->
            <div class="text-center group cursor-pointer rounded-sm border border-gray-100 bg-white p-4 motion-card motion-border-card transition-all duration-300 reveal reveal-up" data-animate>
                <div class="bg-white p-2 border border-gray-200 shadow-sm mb-4 h-48 flex items-center justify-center">
                    <img src="https://images.unsplash.com/photo-1578269174936-2709b6aeb913?q=80&w=1000&auto=format&fit=crop" alt="Certificate 1" class="max-h-full max-w-full object-contain mix-blend-multiply opacity-80">
                </div>
                <h3 class="font-bold text-gray-800 px-4 group-hover:text-[#ED1C24] transition-colors">Giải thưởng chuyển đổi số Việt Nam</h3>
            </div>
            
            <!-- Award 2 -->
            <div class="text-center group cursor-pointer rounded-sm border border-gray-100 bg-white p-4 motion-card motion-border-card transition-all duration-300 reveal reveal-up" data-animate>
                <div class="bg-white p-2 border border-gray-200 shadow-sm mb-4 h-48 flex items-center justify-center">
                    <img src="https://images.unsplash.com/photo-1578269174936-2709b6aeb913?q=80&w=1000&auto=format&fit=crop" alt="Certificate 2" class="max-h-full max-w-full object-contain mix-blend-multiply opacity-80">
                </div>
                <h3 class="font-bold text-gray-800 px-4 group-hover:text-[#ED1C24] transition-colors">Bảng vàng doanh nghiệp văn hóa</h3>
            </div>
            
            <!-- Award 3 -->
            <div class="text-center group cursor-pointer rounded-sm border border-gray-100 bg-white p-4 motion-card motion-border-card transition-all duration-300 reveal reveal-up" data-animate>
                <div class="bg-white p-2 border border-gray-200 shadow-sm mb-4 h-48 flex items-center justify-center">
                    <img src="https://images.unsplash.com/photo-1578269174936-2709b6aeb913?q=80&w=1000&auto=format&fit=crop" alt="Certificate 3" class="max-h-full max-w-full object-contain mix-blend-multiply opacity-80">
                </div>
                <h3 class="font-bold text-gray-800 px-4 group-hover:text-[#ED1C24] transition-colors">Cup thương hiệu việt năm 2016</h3>
            </div>
            
            <!-- Award 4 -->
            <div class="text-center group cursor-pointer rounded-sm border border-gray-100 bg-white p-4 motion-card motion-border-card transition-all duration-300 reveal reveal-up" data-animate>
                <div class="bg-white p-2 border border-gray-200 shadow-sm mb-4 h-48 flex items-center justify-center">
                    <img src="https://images.unsplash.com/photo-1578269174936-2709b6aeb913?q=80&w=1000&auto=format&fit=crop" alt="Certificate 4" class="max-h-full max-w-full object-contain mix-blend-multiply opacity-80">
                </div>
                <h3 class="font-bold text-gray-800 px-4 group-hover:text-[#ED1C24] transition-colors">Giải thưởng Top Việt Nam 2011</h3>
            </div>
        </div>
    </div>
</section>

<!-- Milestones Section -->
<section class="py-20 bg-white relative overflow-hidden">
    <!-- Background Watermark Text -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-5">
        <h2 class="text-[10vw] font-black text-gray-500 whitespace-nowrap mt-32">Xi Măng Cẩm Phả</h2>
    </div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <!-- Section Header with Red slashes -->
        <div class="flex items-center gap-4 mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Những cột mốc quan trọng</h2>
            <x-ui.brand-mark size="lg" :bar-width="56" />
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8" data-stagger-container>
            <!-- Milestone 1 -->
            <div class="bg-white shadow-lg border border-gray-100 hover:shadow-xl transition-shadow group motion-card motion-border-card reveal reveal-up" data-animate>
                <div class="h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1528605105345-5344ea20e269?q=80&w=2070&auto=format&fit=crop" alt="Milestone 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-3 line-clamp-2">Hoạt động "Hiến máu nhân đạo" -Trao đời sự sống</h3>
                    <p class="text-sm text-gray-600 line-clamp-4 text-justify">
                        Ngày 27 và 28/05/2020, Công ty CP Xi măng Cẩm Phả đã tổ chức Đại hội Đảng bộ Công ty lần thứ III, nhiệm kỳ 2020 - 2025 với quyết tâm xây dựng Công ty trở thành đơn vị "Sản xuất xi măng có năng suất và chất lượng ổn định thuộc top đầu về hiệu quả SXKD trong ngành Xi măng Việt Nam"
                    </p>
                </div>
            </div>
            
            <!-- Milestone 2 -->
            <div class="bg-white shadow-lg border border-gray-100 hover:shadow-xl transition-shadow group motion-card motion-border-card reveal reveal-up" data-animate>
                <div class="h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop" alt="Milestone 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-3 line-clamp-2">Đại hội Đảng bộ Công ty lần thứ III, nhiệm kỳ 2020 - 2025</h3>
                    <p class="text-sm text-gray-600 line-clamp-4 text-justify">
                        Ngày 27 và 28/05/2020, Công ty CP Xi măng Cẩm Phả đã tổ chức Đại hội Đảng bộ Công ty lần thứ III, nhiệm kỳ 2020 - 2025 với quyết tâm xây dựng Công ty trở thành đơn vị "Sản xuất xi măng có năng suất và chất lượng ổn định thuộc top đầu về hiệu quả SXKD trong ngành Xi măng Việt Nam"
                    </p>
                </div>
            </div>
            
            <!-- Milestone 3 -->
            <div class="bg-white shadow-lg border border-gray-100 hover:shadow-xl transition-shadow group motion-card motion-border-card reveal reveal-up" data-animate>
                <div class="h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?q=80&w=2070&auto=format&fit=crop" alt="Milestone 3" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-3 line-clamp-2">Lễ trao thưởng chuyển đổi số Việt Nam - Viet Nam digital awards 2020</h3>
                    <p class="text-sm text-gray-600 line-clamp-4 text-justify">
                        Ngày 27 và 28/05/2020, Công ty CP Xi măng Cẩm Phả đã tổ chức Đại hội Đảng bộ Công ty lần thứ III, nhiệm kỳ 2020 - 2025 với quyết tâm xây dựng Công ty trở thành đơn vị "Sản xuất xi măng có năng suất và chất lượng ổn định thuộc top đầu về hiệu quả SXKD trong ngành Xi măng Việt Nam"
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
@include('sections.common.partner-section')
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        if (tabBtns.length > 0) {
            tabBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const target = this.getAttribute('data-tab');

                    // Reset all buttons
                    tabBtns.forEach(b => {
                        b.classList.remove('active', 'bg-[#ED1C24]', 'text-white');
                        b.classList.add('bg-white', 'text-[#ED1C24]');
                        b.setAttribute('aria-pressed', 'false');
                    });

                    // Set active button
                    this.classList.add('active', 'bg-[#ED1C24]', 'text-white');
                    this.classList.remove('bg-white', 'text-[#ED1C24]');
                    this.setAttribute('aria-pressed', 'true');

                    // Toggle Content with transition
                    tabContents.forEach(content => {
                        content.classList.add('hidden');
                        content.style.opacity = '0';
                        
                        if (content.id === `content-${target}`) {
                            content.classList.remove('hidden');
                            // Small timeout to allow opacity transition
                            setTimeout(() => {
                                content.style.opacity = '1';
                            }, 50);
                        }
                    });
                });
            });
        }
    });
</script>
@endpush
