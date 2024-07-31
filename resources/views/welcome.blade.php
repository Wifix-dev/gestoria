@extends('components.user')

@section('title', 'Detalle de la Denuncia')

@section('content')
<!-- source https://github.com/themesberg/landwind -->
<div class="relative bg-[url('public/page_web/volunteer-6772196_1920.jpg')] bg-cover bg-center">
    <div class="absolute inset-x-0 bottom-0 z-10">
        <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
            <path
                d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z">
            </path>
        </svg>
    </div>
    <div class="bg-blue-950 bg-opacity-60 absolute w-full h-full z-0"></div>

    <div class="flex justify-center items-center dark:bg-gray-800 relative z-10 py-44">
        <div class="text-center max-w-6xl mx-10">
            <p class="my-3 text-sm tracking-widest text-blue-500 uppercase">Central Noticias Tamaulipas</p>
            <h1 class="my-3 text-3xl font-bold tracking-tight text-gray-950 md:text-5xl">
                Lunes de Gestion Viernes de Solucion
            </h1>
            <div>
                <p
                    class="max-w-2xl mx-auto my-2 text-base text-gray-100 md:leading-relaxed md:text-xl dark:text-gray-400">
                    Esta página, gestionada por Central Noticias Tamaulipas, se dedica a atender peticiones y denuncias de la comunidad en diferentes áreas de interés ciudadano.
                </p>
            </div>
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center">
                <div class="rounded-md shadow">
                    <a href="#"
                        class="w-full flex items-center justify-center px-5 py-2 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 md:text-lg ">
                        Crear Peticion
                    </a>
                </div>
                <div class="mt-3 sm:mt-0 sm:ml-3">
                    <a href="#"
                        class="w-full flex items-center justify-center px-5 py-2 border border-transparent text-base font-medium rounded-md text-gray-800 bg-indigo-100 hover:bg-indigo-200 md:text-lg ">
                        Registrarse
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
