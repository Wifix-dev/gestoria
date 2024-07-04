<x-guest-layout class="fixed top-0">
    <x-auth-card class="">
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-36 h-36 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('¿Olvidaste tu contraseña? No te preocupes. Solo proporciónanos tu dirección de correo electrónico y te enviaremos un enlace para restablecer tu contraseña, permitiéndote elegir una nueva.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-button>
                    {{ __('Enviar correo de restablecimiento.') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
