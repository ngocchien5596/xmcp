@props(['benefits'])

<ul class="m-0 mt-6 flex list-none flex-col gap-3 p-0">
    @foreach ($benefits as $benefit)
        <li class="product-ui-check flex items-start gap-3 text-[16px] leading-6 text-[#222]">
            <span class="block flex-1 font-medium text-gray-800">{{ $benefit }}</span>
        </li>
    @endforeach
</ul>
