@extends('components.user')

@section('title', 'Detalle de la Denuncia')

@section('content')
<!-- source https://github.com/themesberg/landwind -->

<section class="bg-gray-900">
    <div class="grid max-w-screen-xl px-4 pt-24 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:grid-cols-12 lg:py-36">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1
                class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl =text-gray-900">
                Lunes de Gestion <br>Viernes de Solucion.
            </h1>

            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Esta página se encarga de atender peticiones y denuncias de la comunidad en diferentes áreas, ya sea alumbrado público, animales perdidos, o cualquier otra preocupación de la ciudadanía.
            </p>

            <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">

                <a href="" target="_blank"
                    class="inline-flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 ">
                    Realizar peticion
                </a>

                <a href="" target="_blank"
                    class="inline-flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 ">
                    Registrarme
                </a>

            </div>
        </div>

        <div class=" lg:mt-0 lg:col-span-5 lg:flex">
            <img src="{{asset('public/assets/img/city.svg')}}" alt="hero image">
        </div>

    </div>
</section>
@if (auth()->check())
<p>Bienvenido, {{ auth()->user()->name }}!</p>
@else
<p>Por favor, inicia sesión.</p>
@endif
@endsection


