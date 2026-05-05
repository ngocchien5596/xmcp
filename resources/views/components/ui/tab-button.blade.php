@props(['active' => false, 'href' => '#'])

<a href="{{ $href }}" 
   class="px-8 md:px-12 py-3 rounded-sm font-bold text-sm uppercase transition-all duration-300 {{ $active ? 'bg-[#ED1C24] text-white' : 'bg-[#EBEBEB] text-[#444] hover:text-[#ED1C24] hover:bg-[#E0E0E0]' }}">
    {{ $slot }}
</a>
