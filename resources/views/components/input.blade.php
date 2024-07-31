@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full rounded border border-[#e0e0e0] bg-gray-100 py-2 px-4 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 ']) !!}>
