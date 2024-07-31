@extends('components.user')

@section('title', 'Detalle de la Denuncia')

@section('content')
<div class="max-h-full h-full bg-blue-500 text-gray-900 flex justify-center">
    <div class="max-w-screen-xl bg-white h-full md:h-auto shadow sm:rounded-lg flex mt-16 sm:my-auto sm:mx-4 justify-center flex-1">
        <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
            <div>
                <img src="{{asset('public/assets/img/cnt.png')}}" class="w-32 mx-auto" />
            </div>
            <div class="mt-3 flex flex-col items-center">
                <h1 class="text-2xl xl:text-3xl font-extrabold">
                    Iniciar Sesion
                </h1>
                <div class="w-full flex-1 mt-8">
                    <div class="mx-auto max-w-xs">
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                                <x-label for="username" :value="__('Nombre de Usuario')" />

                                <x-input id="username" class="block mt-1 w-full" type="text" name="username"
                                    :value="old('username')" required autofocus />
                            </div>
                            <div class="mt-4">
                                <x-label for="password" :value="__('Contraseña')" />

                                <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="current-password" />
                            </div>
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordar Contraseña') }}</span>
                                </label>
                            </div>
                            <div class="flex flex-col mt-4">
                                @if (Route::has('password.request'))
                                <div class="flex">
                                    <a class=" text-sm text-gray-600 hover:text-gray-900 mx-auto"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                </div>
                                @endif
                                <div class="flex">
                                    <x-button
                                        class="mt-5 tracking-wide font-semibold bg-blue-500 text-gray-100 w-full py-4 rounded-lg hover:bg-blue-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-noneo">
                                        {{ __('Iniciar Sesion') }}
                                    </x-button>
                                </div>
                            </div>
                        </form>
                        <p class="mt-6 text-xs text-gray-600 text-center">
                            I agree to abide by templatana's
                            <a href="#" class="border-b border-gray-500 border-dotted">
                                Terms of Service
                            </a>
                            and its
                            <a href="#" class="border-b border-gray-500 border-dotted">
                                Privacy Policy
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-1 bg-blue-100 text-center rounded-r-lg hidden sm:flex">
            <div class=" xl:m-16 w-full bg-contain bg-center bg-no-repeat bg-[url('{{asset('public/svg/s3.svg')}}')]">
            </div>
        </div>
    </div>
</div>
@endsection
