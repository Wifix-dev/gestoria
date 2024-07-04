<x-guest-layout class="">
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-36 h-36 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="grid grid-cols-1 gap-2 lg:grid-cols-6">

                <div class="lg:col-span-2 mt-3">
                    <x-label for="name" :value="__('Nombre')" />

                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                        autofocus />
                </div>

                <div class="lg:col-span-4 mt-3">
                    <x-label for="last_name" :value="__('Apellidos')" />

                    <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                        :value="old('last_name')" required autofocus />
                </div>
                <!-- Username -->
                <div class="lg:col-span-6 mt-3">
                    <x-label for="username" :value="__('Nombre de Usuario')" />

                    <x-input id="username" class="block mt-1 w-full" type="text" name="username"
                        :value="old('username')" required autofocus />
                </div>
                <!-- Email Address -->
                <div class="lg:col-span-6 mt-3">
                    <x-label for="email" :value="__('Correo')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required />
                </div>

                <!-- Password -->
                <div class="lg:col-span-3 mt-3">
                    <x-label for="password" :value="__('Contraseña')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="lg:col-span-3 mt-3">
                    <x-label for="password_confirmation" :value="__('Confirmar Contraseña')" />

                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required />
                </div>
                <div class="lg:col-span-6 mt-3">
                    <div class="flex flex-col ">
                        <div class="flex">
                            <a class=" text-sm text-gray-600 hover:text-gray-900 mx-auto" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                        <div class="flex mt-2">
                            <x-button class="mx-auto ">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </div>
                </div>


        </form>
    </x-auth-card>
</x-guest-layout>
