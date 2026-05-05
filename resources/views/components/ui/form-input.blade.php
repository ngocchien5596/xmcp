@props([
    'id',
    'name',
    'label',
    'type' => 'text',
    'required' => false,
    'placeholder' => '',
    'value' => '',
])

<div {{ $attributes->only('class') }}>
    <label for="{{ $id }}" class="mb-2 block text-[11px] font-bold uppercase tracking-[0.18em] text-[#4B5563]">
        {{ $label }}
    </label>
    <input
        id="{{ $id }}"
        name="{{ $name }}"
        type="{{ $type }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        @if($required) required @endif
        {{ $attributes->except('class')->merge([
            'class' => 'h-[42px] w-full rounded-[3px] border border-[#E5E5E5] bg-white px-[14px] text-[14px] font-medium text-[#1F2937] placeholder:text-[#9CA3AF] focus:border-[#ED1C24] focus:outline-none focus:ring-2 focus:ring-red-100',
        ]) }}
    >
    @error($name)
        <p class="mt-2 text-xs font-semibold text-red-600">{{ $message }}</p>
    @enderror
</div>
