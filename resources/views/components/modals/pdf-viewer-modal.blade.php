<div
    id="pdfModal"
    class="fixed inset-0 z-[9999] hidden items-center justify-center bg-black/70 p-3 backdrop-blur-[2px] md:p-5"
    aria-hidden="true"
>
    <div
        class="flex h-[80vh] w-[95vw] max-w-[1180px] flex-col overflow-hidden rounded-2xl border border-white/10 bg-white shadow-2xl md:h-[85vh] md:w-[88vw]"
        role="dialog"
        aria-modal="true"
        aria-labelledby="pdfModalTitle"
        data-pdf-modal-dialog
    >
        <div class="border-b border-gray-200 bg-white/95 px-4 py-3 md:px-5">
            <div class="flex items-start justify-between gap-4">
                <div class="min-w-0">
                    <p class="mb-1 text-[11px] font-bold uppercase tracking-[0.2em] text-[#6B7280]">
                        Tài liệu PDF
                    </p>
                    <h3 id="pdfModalTitle" class="line-clamp-2 text-sm font-bold leading-6 text-[#111] md:text-base"></h3>
                </div>

                <div class="flex shrink-0 items-center gap-2 md:gap-3">
                    <a
                        id="pdfModalOpen"
                        href="#"
                        target="_blank"
                        rel="noopener"
                        class="inline-flex h-9 items-center justify-center rounded-full border border-[#ED1C24]/20 px-3 text-xs font-bold uppercase tracking-[0.14em] text-[#ED1C24] transition-colors hover:bg-[#FFF1F1] md:px-4"
                    >
                        Mở tab mới
                    </a>

                    <button
                        type="button"
                        id="pdfModalClose"
                        class="flex h-9 w-9 items-center justify-center rounded-full bg-[#ED1C24] text-white transition-colors hover:bg-[#B80000]"
                        aria-label="Đóng modal"
                    >
                        <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true">
                            <path d="M4 4l8 8"/>
                            <path d="M12 4 4 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="min-h-0 flex-1 bg-[#EEF2F6] p-2 md:p-3">
            <div class="relative h-full overflow-hidden rounded-xl border border-gray-200 bg-white shadow-inner">
                <div
                    id="pdfModalLoading"
                    class="absolute inset-0 z-10 flex flex-col items-center justify-center gap-3 bg-white/88 text-center text-[#4B5563]"
                >
                    <div class="h-10 w-10 animate-pulse rounded-full bg-[#ED1C24]/10"></div>
                    <div class="space-y-1">
                        <p class="text-sm font-semibold">Đang tải tài liệu...</p>
                        <p class="text-xs text-[#6B7280]">Nếu PDF không hiển thị, bạn vẫn có thể mở file ở tab mới.</p>
                    </div>
                </div>

                <iframe
                    id="pdfModalFrame"
                    src=""
                    class="h-full w-full bg-white"
                    title="PDF preview"
                ></iframe>
            </div>
        </div>

        <div class="border-t border-gray-200 bg-[#FAFAFA] px-4 py-3 text-xs leading-5 text-[#4B5563] md:px-5 md:text-sm">
            Nếu trình duyệt hoặc thiết bị không xem trực tiếp được PDF, dùng liên kết
            <a id="pdfModalFallback" href="#" target="_blank" rel="noopener" class="font-semibold text-[#ED1C24] hover:underline">
                Mở file PDF
            </a>.
        </div>
    </div>
</div>
