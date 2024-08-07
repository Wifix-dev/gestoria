@extends('components.user')

@section('title', 'Detalle de la Denuncia')

@section('content')
<div class="w-full lg:bg-blue-500 text-gray-900 flex justify-center overflow-auto md:py-28">
    <div
        class="max-w-7xl lg:mx-36 w-full bg-white lg:shadow sm:rounded-lg flex mt-16 sm:mt-24 lg:my-auto justify-center flex-1">
        <div class="w-full lg:w-1/2 xl:w-5/12 p-8 sm:p-12">
            <div>
                <img src="{{asset('public/assets/img/cnt.png')}}" class="w-32 mx-auto" />
            </div>
            <div class="mt-3 flex flex-col items-center">
                <h1 class="text-2xl xl:text-3xl font-extrabold">
                    Iniciar Sesion
                </h1>
                <div class="w-full flex-1 mt-8">
                    <div class="mx-auto max-w-md">
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="grid grid-cols-1 gap-2 lg:grid-cols-6">

                                <div class="lg:col-span-2 mt-3">
                                    <x-label for="name" :value="__('Nombre')" />

                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                        :value="old('name')" required autofocus />
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

                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        :value="old('email')" required />
                                </div>

                                <!-- Password -->
                                <div class="lg:col-span-3 mt-3">
                                    <x-label for="password" :value="__('Contraseña')" />

                                    <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                                        required autocomplete="new-password" />
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
                                            <a class=" text-sm text-gray-600 hover:text-gray-900 mx-auto"
                                                href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>
                                        </div>
                                        <div class="flex mt-2">
                                            <x-button class="mt-5 tracking-wide font-semibold bg-blue-500 text-gray-100 w-full py-4 rounded-lg hover:bg-blue-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-noneo">
                                                {{ __('Registrarse') }}
                                            </x-button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-1 bg-blue-100 text-center rounded-r-lg hidden md:flex">
            <div class=" xl:m-16 w-full bg-contain bg-center bg-no-repeat bg-[url('{{asset('public/svg/s3.svg')}}')]">
            </div>
        </div>
    </div>
</div>
@endsection



