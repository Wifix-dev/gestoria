<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform rounded-md focus:outline-none ']) }}>
    {{ $slot }}
</button>
