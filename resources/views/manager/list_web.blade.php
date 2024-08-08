@extends('components.layout')

@section('title', 'Detalle de la Denuncia')

@section('content')
@if(session('success'))
<div>{{ session('success') }}</div>
@endif
<div
    class="bg-cover bg-center bg-[url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');]">
    <header class="py-10 md:py-16 bg-blue-900 bg-opacity-75 px-8">
        <div class=" max-w-7xl xl:flex xl:items-center ">
            <div class="min-w-0 flex-1">
                <div class="container flex items-center pr-6 mx-auto overflow-x-auto whitespace-nowrap">
                    <a href="#" class="text-white hover:text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                    </a>

                    <span class="mx-3 text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>

                    <a href="#" class="flex items-center text-blue-500 -px-2 dark:text-gray-200 hover:text-blue-500">
                        <i class="bi bi-file-text"></i>
                        <span class="mx-2">Peticiones</span>
                    </a>
                </div>
                <h1 class="mt-1 text-2xl font-bold leading-7 text-white sm:truncate sm:text-3xl sm:tracking-tight">
                    Denuncias
                </h1>
            </div>
        </div>
    </header>
</div>

<div class="p-6 ">
    <form method="GET" action="{{ route('manager.denouncementsWeb.list') }}">
        <div class="bg-white px-6 py-3 rounded-lg border border-gray-200">
            <div>
                <p class=" text-xs font-extrabold uppercase text-gray-700">Filtro</p>
            </div>
            <div class="grid lg:grid-cols-4 gap-x-3 gap-y-2">
                <div>
                    <label for="status" class="text-sm leading-7 text-gray-600">Estado</label>
                    <div class="relative  w-full text-gray-600   ">
                        <div class="relative inline-block w-full h-full  flex justify-between">
                            <select
                                class="appearance-none px-3 py-3 text-sm font-medium transition-colors duration-200 rounded-lg w-full bg-white border border-gray-200"
                                name="status" id="status">
                                <option value="">Estado</option>
                                <option value="Cerrada" {{ request('status') == 'Cerrada' ? 'selected' : '' }}>Cerrada
                                </option>
                                <option value="En espera" {{ request('status') == 'En espera' ? 'selected' : '' }}>En
                                    espera
                                </option>
                                <option value="Rechazada" {{ request('status') == 'Rechazada' ? 'selected' : '' }}>
                                    Rechazada
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
                </div>
                <div>
                    <label for="type" class="text-sm leading-7 text-gray-600">Tipo</label>
                    <div class="relative w-full text-gray-600   ">
                        <div class="relative inline-block w-full h-full flex justify-between">
                            <select
                                class="appearance-none p-2 py-3 text-sm font-medium transition-colors duration-200 rounded-lg w-full bg-white border border-gray-200"
                                name="type" id="type">
                                <option value="">Tipo</option>
                                @foreach($tp as $ls)
                                <option value="{{$ls->id}}" {{ request('type') == $ls->id ? 'selected' : '' }}>
                                    {{$ls->type_service}}</option>
                                @endforeach
                            </select>

                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2">
                                <svg class="h-4 w-4 text-gray-600" viewBox="0 0 20 20" fill="none">
                                    <path d="M7 15L12 20L17 15M7 9L12 4L17 9" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="type" class="text-sm leading-7 text-gray-600">Fecha</label>
                    <div class="relative h-full w-full">
                        <div class="relative inline-block w-full flex justify-between">
                            <input name="fdate" type="date" value="{{request('fdate')}}"
                                class="appearance-none p-2 py-3 text-sm font-medium text-gray-600 transition-colors duration-200 w-full rounded-lg bg-white border border-gray-200">
                        </div>
                    </div>
                </div>
                <div class="relative flex items-end justify-end space-x-3">
                <a class="appearance-none p-5 py-3 text-sm font-medium text-gray-600 text-center transition-colors duration-200 rounded-lg bg-white border border-gray-200"
                href="{{ route('manager.denouncementsWeb.list') }}">Todo</a>

                    <button type="submit"
                        class="appearance-none px-5 py-3 text-sm font-medium text-gray-200 bg-slate-900 transition-colors duration-200 w-full md:w-auto rounded-lg border border-gray-200 hover:bg-slate-950 rounded-lg">Aplicar</button>
                </div>
            </div>
        </div>
    </form>



    <div
        class="w-full max-w-sm ml-3 bg-transparent border rounded-md dark:border-gray-700 focus-within:border-blue-400 focus-within:ring focus-within:ring-blue-300 dark:focus-within:border-blue-300 focus-within:ring-opacity-40">
        <form class="flex flex-col md:flex-row">
            <input type="email" placeholder="Codigo de la peticion"
                class="flex-1 h-10 px-4 py-2 m-1 text-gray-700 placeholder-gray-400 bg-transparent border-none appearance-none dark:text-gray-200 focus:outline-none focus:placeholder-transparent focus:ring-0" />

            <button type="button"
                class="h-10 px-4 py-2 m-1 text-white transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400">
                Join Us
            </button>
        </form>
    </div>

</div>


<section class=" mx-auto w-full p-6 ">
    <div class="sm:flex sm:items-center sm:justify-between">
        <p class=" text-sm text-gray-500 :text-gray-300">Estas son las peticiones realizadas por los ciudadanos
            registrados en la plataforma.</p>
    </div>
    <a href="{{route('manager.create.denouncement')}}"
        class="flex items-center justify-center w-full lg:w-auto mt-3 md:mt-0 px-5 py-3 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-950 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-900 ">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>

        <span>Registrar solicitud</span>
    </a>


    <div class="flex flex-col mt-3 ">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 ">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 :text-gray-400">
                                    <button class="flex items-center gap-x-3 focus:outline-none">
                                        <span>Asunto</span>

                                        <svg class="h-3" viewBox="0 0 10 11" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z"
                                                fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path
                                                d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                                fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path
                                                d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                                fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                        </svg>
                                    </button>
                                </th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 :text-gray-400">
                                    <div>Estado</div>
                                </th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 :text-gray-400">
                                    Fecha de Creacion
                                </th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 :text-gray-400">
                                    Ciudadano</th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 :text-gray-400">
                                    Tipo de Denuncia</th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 :text-gray-400">
                                    Gestor a Cargo</th>

                                <th scope="col" class="relative py-3.5 px-4">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 :divide-gray-700 :bg-gray-900">
                            @foreach ($denouncements as $list)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-sm font-medium whitespace-nowrap">
                                    <div>
                                        {{$list->case_name}}
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm font-medium whitespace-nowrap ">
                                    <div class="flex">
                                        @switch($list->status)
                                        @case('Rechazada')
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-red-100/60 :bg-gray-800">
                                            <span class="h-1.5 w-1.5 rounded-full bg-red-500"></span>

                                            <h2 class="text-sm font-normal text-red-500 capitalize">{{$list->status}}
                                            </h2>
                                        </div>
                                        @break
                                        @case('Cerrada')
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-emerald-100/60 :bg-gray-800">
                                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>

                                            <h2 class="text-sm font-normal text-emerald-500 capitalize">
                                                {{$list->status}}</h2>
                                        </div>
                                        @break
                                        @case('En espera')
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-gray-100/60 :bg-gray-800">
                                            <span class="h-1.5 w-1.5 rounded-full bg-gray-500"></span>

                                            <h2 class="text-sm font-normal text-gray-500 capitalize">{{$list->status}}
                                            </h2>
                                        </div>
                                        @break
                                        @case('Pendiente a comentarios')
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-orange-100/60 :bg-gray-800">
                                            <span class="h-1.5 w-1.5 rounded-full bg-orange-500"></span>

                                            <h2 class="text-sm font-normal text-orange-500 capitalize">{{$list->status}}
                                            </h2>
                                        </div>
                                        @break
                                        @default
                                        {{$list->status}}
                                        @endswitch
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm font-medium text-left whitespace-nowrap">
                                    <div>
                                        {{$list->created_at}}
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm whitespace-nowrap">
                                    <div>
                                        {{$list->name}} {{$list->last_name}}
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm whitespace-nowrap">
                                    @if ($list->type)
                                    <div
                                        class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-[#{{ $list->type->color}}]/20 :bg-gray-800">
                                        <span class="h-1.5 w-1.5 rounded-full bg-[#{{ $list->type->color}}]"></span>

                                        <h2 class="text-sm font-normal text-[#{{ $list->type->color}}] capitalize">
                                            {{ $list->type->type_service}}</h2>
                                    </div>
                                    @else
                                    No asignado
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-sm whitespace-nowrap">
                                    @if ($list->manager)
                                    {{ $list->manager->name }}
                                    {{ $list->manager->last_name }}
                                    @else
                                    Asesor no asignado
                                    @endif
                                </td>

                                <td class="px-4 py-3 text-sm whitespace-nowrap">
                                    <div class="flex gap-1">
                                        <a href="{{route('manager.denuncement.record.detail',['id' => $list->id])}}"
                                            class="block px-4 py-2 text-sm text-blue-700 hover:bg-blue-50 rounded-md">Ver</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="mt-6 mb-12 flex justify-between ">
            {{ $denouncements->appends(request()->input())->links() }}
        </div>
    </div>
</section>
@endsection
