@extends('components.layout')

@section('title', 'Detalle de la Denuncia')

@section('content')
@if(session('success'))
<div>{{ session('success') }}</div>
@endif
<section class=" mx-auto ">
    <div class="sm:flex sm:items-center sm:justify-between">
        <div>
            <div class="flex items-center gap-x-3">
                <h2 class="sm:text-xl text-2xl font-bold uppercase title-font mb-2 text-gray-900">Denuncias</h2>
            </div>
            <p class="mt-1 text-sm text-gray-500 :text-gray-300">Estas son las peticiones realizadas por los ciudadanos
                registrados en la plataforma.</p>
        </div>
    </div>

    <div class="mt-3 w-full flex flex-col md:flex-row md:justify-between">
        <form method="GET" action="{{ route('manager.denouncements.list') }}">

            <div class="flex flex-col md:flex-row w-full gap-2 ">
                <a class="appearance-none p-2 text-sm font-medium text-gray-600 text-center transition-colors duration-200 lg:w-32 rounded-lg bg-white border border-gray-200"
                    href="{{ route('manager.denouncements.list') }}">Todo</a>
                <div class="relative w-full md:w-32 text-gray-600   ">
                    <div class="relative inline-block w-full h-full  flex justify-between">
                        <select
                            class="appearance-none p-2 text-sm font-medium transition-colors duration-200 rounded-lg w-full bg-white border border-gray-200"
                            name="status" id="status">
                            <option value="">Estado</option>
                            <option value="Cerrada" {{ request('status') == 'Cerrada' ? 'selected' : '' }}>Cerrada
                            </option>
                            <option value="En espera" {{ request('status') == 'En espera' ? 'selected' : '' }}>En espera
                            </option>
                            <option value="Rechazada" {{ request('status') == 'Rechazada' ? 'selected' : '' }}>Rechazada
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



                <div class="relative bg-gray-100 w-full md:w-36	">
                    <div class="relative inline-block w-full flex justify-between">
                        <select
                            class="appearance-none p-2 text-sm font-medium text-gray-600 transition-colors duration-200 w-full rounded-lg bg-white border border-gray-200"
                            name="type" id="status">
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

                <div class="relative bg-gray-100 w-full md:w-36	">
                    <div class="relative inline-block w-full flex justify-between">
                        <input name="fdate" type="date" value="{{request('fdate')}}"
                            class="appearance-none p-2 text-sm font-medium text-gray-600 transition-colors duration-200 w-full rounded-lg bg-white border border-gray-200">
                    </div>
                </div>

                <button type="submit"
                    class="appearance-none p-2 text-sm font-medium text-gray-200 bg-slate-900 transition-colors duration-200 w-full md:w-auto rounded-lg border border-gray-200 hover:bg-slate-950 rounded-lg">Aplicar</button>
            </div>
        </form>
    </div>

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
                            @foreach ($denouncements as $lista)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                    <div>
                                        {{$lista->case_name}}
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap ">
                                    <div class="flex">
                                        @switch($lista->status)
                                        @case('Rechazada')
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-red-100/60">
                                            <span class="h-1.5 w-1.5 rounded-full bg-red-500"></span>

                                            <h2 class="text-sm font-normal text-red-500 capitalize">{{$lista->status}}
                                            </h2>
                                        </div>
                                        @break
                                        @case('Cerrada')
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-emerald-100/60">
                                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>

                                            <h2 class="text-sm font-normal text-emerald-500 capitalize">
                                                {{$lista->status}}</h2>
                                        </div>
                                        @break
                                        @case('Aceptada')
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-green-100/60 ">
                                            <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>

                                            <h2 class="text-sm font-normal text-green-500 capitalize">
                                                {{$lista->status}}</h2>
                                        </div>
                                        @break
                                        @case('En proceso')
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-cyan-100/60">
                                            <span class="h-1.5 w-1.5 rounded-full bg-cyan-500"></span>

                                            <h2 class="text-sm font-normal text-cyan-500 capitalize">
                                                {{$lista->status}}</h2>
                                        </div>
                                        @break
                                        @case('En espera')
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-gray-100/60 :bg-gray-800">
                                            <span class="h-1.5 w-1.5 rounded-full bg-gray-500"></span>

                                            <h2 class="text-sm font-normal text-gray-500 capitalize">{{$lista->status}}
                                            </h2>
                                        </div>
                                        @break
                                        @case('Pendiente a comentarios')
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-orange-100/60 :bg-gray-800">
                                            <span class="h-1.5 w-1.5 rounded-full bg-orange-500"></span>

                                            <h2 class="text-sm font-normal text-orange-500 capitalize">
                                                {{$lista->status}}
                                            </h2>
                                        </div>
                                        @break
                                        @default
                                        {{$lista->status}}
                                        @endswitch
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm font-medium text-left whitespace-nowrap">
                                    <div>
                                        {{$lista->created_at}}
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="relative w-8 h-8 rounded-full bg-blue-500 flex justify-center items-center text-md uppercase text-white font-normal">
                                            <span>{{$lista->user->name[0]}}</span>
                                            <span>{{$lista->user->last_name[0]}}</span>
                                        </div>
                                        <span class="pl-2">{{$lista->user->name}} {{$lista->user->last_name}}</span>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    @if ($lista->type)
                                    <div
                                        class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 bg-[#{{ $lista->type->color}}]/20 :bg-gray-800">
                                        <span class="h-1.5 w-1.5 rounded-full bg-[#{{ $lista->type->color}}]"></span>

                                        <h2 class="text-sm font-normal text-[#{{ $lista->type->color}}] capitalize">
                                            {{ $lista->type->type_service}}</h2>
                                    </div>
                                    @else
                                    No asignado
                                    @endif
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    @if ($lista->manager)
                                    {{ $lista->manager->name }}
                                    {{ $lista->manager->last_name }}
                                    @else
                                    Asesor no asignado
                                    @endif
                                </td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex gap-1">

                                        <a href="{{route('manager.denuncement.detail',['id' => $lista->id])}}"
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
