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
        <div class="flex justify-items-end mt-4 gap-2">
            <a href="{{route('denouncement')}}"
                class="inline-flex cursor-pointer  items-center rounded-md border border-transparent bg-slate-950 hover:bg-slate-900 py-2 pl-3 pr-4 text-white shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <span class="ml-2">Crear solicitud</span>
            </a>
        </div>

    </div>
</header>

<div class="w-full max-w-7xl relative  mx-auto z-0 inset-x-0 top-0 pb-12">

    <div class="lg:mx-2 lg:mx-0 p-4 lg:px-8 lg:pt-4 ">
        <div class="mt-3 w-full flex flex-col md:flex-row md:justify-between">
            <form method="GET" action="{{route('user.denouncement.list') }}">
                <span class="font-semibold uppercase text-sm mb-2 text-gray-600">Filtro</span>
                <div class="flex flex-col md:flex-row w-full gap-2 text-sm ">
                    <a class="appearance-none p-2 px-4 font-medium text-gray-600 text-start lg:text-center transition-colors duration-200 rounded-lg bg-white border border-gray-200"
                        href="{{ route('user.denouncement.list') }}">Todo</a>
                    <div class="relative w-full md:w-32 text-gray-600   ">
                        <div class="relative inline-block w-full h-full  flex justify-between">
                            <select
                                class="appearance-none p-2 px-4 font-medium transition-colors duration-200 rounded-lg w-full bg-white border border-gray-200"
                                name="status" id="status">
                                <option value="">Estado</option>
                                <option value="Cerrada" {{ request('status') == 'Cerrada' ? 'selected' : '' }}>Cerrada
                                </option>
                                <option value="En espera" {{ request('status') == 'En espera' ? 'selected' : '' }}>En
                                    espera
                                </option>
                                <option value="Aceptada" {{ request('status') == 'Aceptada' ? 'selected' : '' }}>
                                    Aceptada
                                </option>
                                <option value="Rechazada" {{ request('status') == 'Rechazada' ? 'selected' : '' }}>
                                    Rechazada
                                </option>
                                <option value="En proceso" {{ request('status') == 'En proceso' ? 'selected' : '' }}>
                                    En Proceso
                                </option>

                            </select>

                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2  ">
                                <svg class="h-4 w-4 text-gray-600" viewBox="0 0 20 20" fill="none">
                                    <path d="M7 15L12 20L17 15M7 9L12 4L17 9" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>

                            </div>
                        </div>
                    </div>
                    <div class="relative w-full md:w-36	">
                        <div class="relative inline-block w-full flex justify-between text-gray-600">
                            <input name="fdate" type="date" value="{{request('fdate')}}"
                                class="appearance-none p-2 px-4 font-medium text-gray-600 ttransition-colors duration-200 w-full rounded-lg bg-white border border-gray-200" value="Fecha">
                        </div>
                    </div>

                    <button type="submit"
                        class="appearance-none p-2 font-medium text-gray-200 bg-slate-900 transition-colors duration-200 w-full md:w-auto rounded-lg border border-gray-200 hover:bg-slate-950 rounded-lg">Aplicar</button>
                </div>
            </form>
        </div>
        <div class="relative pt-3">
            <div class="flex flex-col lg:grid lg:gap-4 lg:grid-cols-3 h-full">
                @if($denouncements->isEmpty())
                <div class="flex justify-center col-span-3 text-center items-center">
                    <div class="flex flex-col my-16">
                        <img src="{{asset('public/svg/s2.svg')}}" class="w-80 h-auto  opacity-40">
                        <p class="text-xl mt-6 text-slate-900 text-opacity-50 font-normal">No se encontraron registros</p>
                    </div>
                </div>
                @else
                @foreach ($denouncements as $denounce)
                @php
                $formattedDate = Carbon::parse($denounce->created_at)->format('M d, Y');
                @endphp
                <div
                    class="max-w-4xl h-full px-10 mb-2 py-6 bg-white border border-gray-200 rounded-md shadow-sm relative">
                    <div class="flex justify-between items-center">
                        <span class="font-light text-gray-600">{{$formattedDate}} </span>
                        <div class="flex">
                            @switch($denounce->status)
                            @case('Rechazada')
                            <div
                                class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-red-100/60 :bg-gray-800">
                                <span class="h-1.5 w-1.5 rounded-full bg-red-500"></span>

                                <h2 class="text-sm font-normal text-red-500 capitalize">{{$denounce->status}}
                                </h2>
                            </div>
                            @break
                            @case('Cerrada')
                            <div
                                class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-emerald-100/60 :bg-gray-800">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>

                                <h2 class="text-sm font-normal text-emerald-500 capitalize">
                                    {{$denounce->status}}</h2>
                            </div>
                            @break
                            @case('Aceptada')
                            <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-green-100/60">
                                <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>

                                <h2 class="text-sm font-normal text-green-500 capitalize">
                                    {{$denounce->status}}</h2>
                            </div>
                            @break
                            @case('En proceso')
                            <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-cyan-100/60">
                                <span class="h-1.5 w-1.5 rounded-full bg-cyan-500"></span>

                                <h2 class="text-sm font-normal text-cyan-500 capitalize">
                                    {{$denounce->status}}</h2>
                            </div>
                            @break
                            @case('En espera')
                            <div
                                class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-gray-100/60 :bg-gray-800">
                                <span class="h-1.5 w-1.5 rounded-full bg-gray-500"></span>

                                <h2 class="text-sm font-normal text-gray-500 capitalize">{{$denounce->status}}
                                </h2>
                            </div>
                            @break
                            @case('Pendiente a comentarios')
                            <div
                                class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-orange-100/60 :bg-gray-800">
                                <span class="h-1.5 w-1.5 rounded-full bg-orange-500"></span>

                                <h2 class="text-sm font-normal text-orange-500 capitalize">
                                    {{$denounce->status}}
                                </h2>
                            </div>
                            @break
                            @default
                            {{$denounce->status}}
                            @endswitch
                        </div>
                    </div>
                    <div class="mt-2">
                        <a class="text-lg text-gray-700 font-bold hover:text-gray-600"
                            href="#">{{$denounce->case_name}}</a>
                        <p class="mt-2 text-gray-600 line-clamp-3">{{ strip_tags($denounce->description) }}</p>
                    </div>
                    <div class="">
                        <div class="flex mt-4">
                            @if(isset($denounce->manager) && $denounce->manager->name)
                            <div
                                class="relative w-8 h-8 rounded-full bg-orange-500 flex justify-center items-center text-base uppercase text-white font-normal">
                                <span>{{ $denounce->manager->name[0] }}</span>
                                <span>{{ $denounce->manager->last_name[0] }}</span>
                            </div>
                            <span class="pl-2">{{ $denounce->manager->name }} {{ $denounce->manager->last_name }}</span>
                            @else
                            <div
                                class="relative w-8 h-8 rounded-full bg-gray-500 flex justify-center items-center text-base uppercase text-white font-normal">
                                <span>NA</span>
                            </div>
                            <span class="pl-2">Gestor no Asignado</span>
                            @endif
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <a class="text-blue-600 hover:underline"
                            href="{{route('denouncement.info', ['id' => $denounce->id])}}">Ver Peticion</a>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="p-4 pt-0 lg:p-8 flex justify-between ">
        {{ $denouncements->appends(request()->input())->links() }}
    </div>
</div>
<style>
.line-clamp-3 {
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    /* Número de líneas a mostrar */
    -webkit-box-orient: vertical;
}
</style>
@endsection
