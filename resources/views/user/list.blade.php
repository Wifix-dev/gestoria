@extends('components.user')

@section('title', 'Detalle de la Denuncia')
@php
    use Carbon\Carbon;
@endphp
@section('content')
<header class="bg-gradient-to-l from-blue-500 to-blue-700 py-24 pb-6">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 xl:flex xl:items-center xl:justify-between">
        <div class="min-w-0 flex-1">
            <nav aria-label="breadcrumb">
                <ol
                    class="flex w-full flex-wrap items-center rounded-md bg-blue-gray-50 bg-opacity-60 text-white font-semibold">
                    <li
                        class="flex cursor-pointer items-center font-sans text-sm  leading-normal transition-colors duration-300 hover:text-red-600">
                        <a class="opacity-70" href="#">
                            <span>Inicio</span>
                        </a>
                        <span class="pointer-events-none mx-2 select-none font-sans text-sm leading-normal antialiased">
                            /
                        </span>
                    </li>
                    <li
                        class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased transition-colors duration-300 hover:text-red-600">
                        <a class="font-medium text-blue-gray-900 transition-colors hover:text-red-500" href="#">
                        Mis Peticiones
                        </a>
                    </li>
                </ol>
            </nav>
            <h1 class="mt-2 text-2xl font-bold leading-7 text-gray-50 sm:truncate sm:text-3xl sm:tracking-tight">
                Mis Peticiones</h1>
        </div>

    </div>
</header>
<div class="w-full max-w-7xl relative  mx-auto z-0 inset-x-0 top-0 pb-12">
    <div class="mx-2 lg:mx-0 p-4 lg:p-8 ">
        <div class="relative">
            <div class="flex flex-col lg:grid lg:gap-4 lg:grid-cols-3">
                @foreach ($denouncements as $denounce)
                @php
                    $formattedDate = Carbon::parse($denounce->created_at)->format('M d, Y');
                @endphp
                <div class="max-w-4xl h-full px-10 mb-2 pt-6 pb-3 bg-white border border-gray-100 rounded-lg shadow-md">
                    <div class="flex justify-between items-center">
                        <span class="font-light text-gray-600">{{$formattedDate}} </span>
                        <a class="px-2 py-1 bg-[#{{$denounce->type->color}}] text-gray-100 font-bold text-sm rounded-full hover:bg-gray-500">{{$denounce->type->type_service}}</a>
                    </div>
                    <div class="mt-2">
                        <a class="text-lg text-gray-700 font-bold hover:text-gray-600" href="#">{{$denounce->case_name}}</a>
                        <p class="mt-2 text-gray-600 line-clamp-3">{{ strip_tags($denounce->description) }}</p>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <a class="text-blue-600 hover:underline" href="#">Ver Peticion</a>
                        <div>
                            <a class="flex items-center" href="#">
                                <img class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block"
                                    src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=373&q=80"
                                    alt="avatar">
                                <h1 class="text-gray-700 font-bold">Khatab wedaa</h1>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<style>
    .line-clamp-3 {
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 3; /* Número de líneas a mostrar */
      -webkit-box-orient: vertical;
    }
</style>
@endsection
