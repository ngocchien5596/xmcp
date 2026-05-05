@props([
    'id',
    'name',
    'label',
    'required' => false,
    'placeholder' => '',
    'rows' => 6,
    'value' => '',
])

<div {{ $attributes->only('class') }}>
    <label for="{{ $id }}" class="mb-2 block text-[11px] font-bold uppercase tracking-[0.18em] text-[#4B5563]">
        {{ $label }}
    </label>
    <textarea
        id="{{ $id }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        placeholder="{{ $placeholder }}"
        @if($required) required @endif
        {{ $attributes->except('class')->merge([
            'class' => 'min-h-[140px] w-full resize-none rounded-[3px] border border-[#E5E5E5] bg-white px-[14px] py-3 text-[14px] font-medium text-[#1F2937] placeholder:text-[#9CA3AF] focus:border-[#ED1C24] focus:outline-none focus:ring-2 focus:ring-red-100',
        ]) }}
    >{{ old($name, $value) }}</textarea>
    @error($name)
        <p class="mt-2 text-xs font-semibold text-red-600">{{ $message }}</p>
    @enderror
</div>
