@props(['note'])

<div class="mt-10 p-6 bg-gray-100 border-l-4 border-gray-400 rounded-sm">
    <div class="flex gap-4">
        <div class="flex-shrink-0 text-gray-400">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        <div class="text-sm text-gray-600 italic leading-relaxed">
            {{ $note }}
        </div>
    </div>
</div>
