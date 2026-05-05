@php
    $offices = config('contact.offices', []);
@endphp

<section class="bg-white py-12 md:py-16">
    <div class="mx-auto grid w-full max-w-[1280px] grid-cols-1 gap-10 px-4 md:px-5 lg:grid-cols-[1.05fr_0.95fr] lg:gap-16 lg:px-6">
        <div class="rounded-[3px] bg-white">
            @if (session('success'))
                <div class="mb-6 rounded-[3px] border border-green-200 bg-green-50 px-4 py-3 text-sm font-semibold text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-6 rounded-[3px] border border-red-200 bg-red-50 px-4 py-3 text-sm font-semibold text-red-700">
                    Vui lòng kiểm tra lại các trường bắt buộc.
                </div>
            @endif

            <div class="mb-8 flex items-center gap-3">
                <span class="h-[2px] w-8 bg-[#ED1C24]"></span>
                <h2 class="text-[22px] font-bold uppercase tracking-wide text-[#111]">
                    GỬI YÊU CẦU
                </h2>
            </div>

            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                    <x-ui.form-input
                        id="name"
                        name="name"
                        label="HỌ VÀ TÊN *"
                        :required="true"
                        placeholder="Nhập họ và tên của bạn"
                    />

                    <x-ui.form-input
                        id="email"
                        name="email"
                        type="email"
                        label="EMAIL LIÊN HỆ *"
                        :required="true"
                        placeholder="Địa chỉ email của bạn"
                    />

                    <x-ui.form-input
                        id="phone"
                        name="phone"
                        label="SỐ ĐIỆN THOẠI"
                        placeholder="Số điện thoại liên lạc"
                    />

                    <x-ui.form-input
                        id="subject"
                        name="subject"
                        label="CHỦ ĐỀ"
                        placeholder="Chủ đề bạn quan tâm"
                    />

                    <x-ui.form-textarea
                        class="md:col-span-2"
                        id="message"
                        name="message"
                        label="NỘI DUNG YÊU CẦU *"
                        :required="true"
                        placeholder="Mô tả chi tiết yêu cầu của bạn"
                        :rows="6"
                    />
                </div>

                <button type="submit" class="mt-6 inline-flex cursor-pointer items-center justify-center rounded-[3px] bg-[#ED1C24] px-8 py-[14px] text-sm font-bold uppercase text-white transition-colors hover:bg-[#B80000]">
                    GỬI YÊU CẦU
                </button>
            </form>
        </div>

        <div class="space-y-7">
            @foreach ($offices as $office)
                <x-cards.contact-info-card :office="$office" />
            @endforeach

            <div class="flex h-[180px] items-center justify-center overflow-hidden rounded-[3px] border border-[#E5E5E5] bg-[#F3F3F3]">
                <div class="relative flex h-full w-full items-center justify-center bg-[linear-gradient(135deg,#ececec_0%,#f7f7f7_100%)]">
                    <div class="absolute inset-0 opacity-40" style="background-image: linear-gradient(to right, rgba(255,255,255,0.65) 1px, transparent 1px), linear-gradient(to bottom, rgba(255,255,255,0.65) 1px, transparent 1px); background-size: 42px 42px;"></div>
                    <div class="relative flex flex-col items-center justify-center rounded-[3px] bg-white/70 px-8 py-6 backdrop-blur-sm">
                        <svg class="mb-3 h-9 w-9 text-[#CFCFCF]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21s7-4.35 7-11a7 7 0 1 0-14 0c0 6.65 7 11 7 11Z"/>
                            <circle cx="12" cy="10" r="2.4"/>
                        </svg>
                        <p class="text-center text-[13px] font-semibold text-[#4B5563]">Bản đồ vị trí cơ sở</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
