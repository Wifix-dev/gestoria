@extends('components.user')

@section('title', 'Detalle de la Denuncia')

@section('content')

<header class="bg-gradient-to-l from-blue-500 to-blue-700 py-24 pb-6">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 xl:flex xl:items-center xl:justify-between">
        <div class="min-w-0 flex-1">
            <nav aria-label="breadcrumb">
                <ol class="flex w-full flex-wrap items-center rounded-md bg-blue-gray-50 bg-opacity-60 text-white font-semibold">
                    <li
                        class="flex cursor-pointer items-center font-sans text-sm  leading-normal transition-colors duration-300 hover:text-red-600">
                        <a class="opacity-60" href="#">
                            <span>Inicio</span>
                        </a>
                        <span
                            class="pointer-events-none mx-2 select-none font-sans text-sm leading-normal antialiased">
                            /
                        </span>
                    </li>
                    <li
                        class="flex cursor-pointer items-center font-sans text-sm leading-normal antialiased transition-colors duration-300 hover:text-red-600">
                        <a class="opacity-60" href="#">
                            <span>Denuncias</span>
                        </a>
                        <span
                            class="pointer-events-none mx-2 select-none font-sans text-sm leading-normal antialiased">
                            /
                        </span>
                    </li>
                    <li
                        class="flex cursor-pointer items-center font-sans text-s leading-normal antialiased transition-colors duration-300 hover:text-red-600">
                        <a class="opacity-60" href="#">
                            <span>Detalles</span>
                        </a>
                        <span
                            class="pointer-events-none mx-2 select-none font-sans text-sm leading-normal  antialiased">
                            /
                        </span>
                    </li>
                    <li
                        class="flex cursor-pointer items-center font-sans text-sm leading-normal text-blue-gray-900 antialiased transition-colors duration-300 hover:text-red-600">
                        <a class="font-medium text-blue-gray-900 transition-colors hover:text-red-500" href="#">
                            {{$denouncement->id}}
                        </a>
                    </li>
                </ol>
            </nav>
            <h1 class="mt-2 text-2xl font-bold leading-7 text-gray-50 sm:truncate sm:text-3xl sm:tracking-tight">
                Denuncia o Peticion</h1>
        </div>

    </div>
</header>

<div class="w-full max-w-7xl relative  mx-auto z-0 inset-x-0 top-0 pb-12">
    <div class="mx-2 lg:mx-0 p-4 lg:p-8 ">
        <div class="relative">
            <div class="flex flex-col space-y-3 lg:space-y-0 lg:grid lg:gap-4 lg:grid-cols-3">
                <!-- Status Report -->
                <div class="font-bold bg-white ">
                    <div class="space-y-1 sticky top-24 rounded-xl lg:px-5 ">
                        <div class="pb-3">
                            <h4 class="text-xl text-gray-900 font-bold">Estado de la Denuncia</h4>
                        </div>
                        <div class="">
                            <div class="flex flex-col md:grid grid-cols-12 text-gray-50">
                                <div class="flex md:contents">
                                    @switch($denouncement->status)
                                    @case('En espera')
                                    <div class="col-start-1 col-end-2 mr-10 md:mx-auto relative">
                                        <div class="h-full w-8 flex items-center justify-center">
                                            <div class="h-full w-1 bg-gray-300 pointer-events-none rounded-t"></div>
                                        </div>
                                        <div
                                            class="w-8 h-8 absolute top-1/2 -mt-2 rounded-full bg-gray-300 text-center">
                                            <i class="bi bi-stopwatch-fill text-xl text-gray-500"></i>
                                        </div>
                                    </div>
                                    <div class=" col-start-3 col-end-13 mb-2 mr-auto w-full">
                                        <div class="text-base font-semibold text-gray-600 pb-1">Estado de la Revision
                                        </div>
                                        <div class="bg-gray-200 py-2 px-4 rounded-md w-full">
                                            <h3 class="font-normal font-semibold text-gray-500">En espera</h3>
                                        </div>
                                    </div>
                                    @break
                                    @case('Revisada')
                                    @default
                                    <div class="col-start-1 col-end-2 mr-10 md:mx-auto relative">
                                        <div class="h-full w-8 flex items-center justify-center">
                                            <div class="h-full w-1 bg-blue-300 pointer-events-none rounded-t"></div>
                                        </div>
                                        <div
                                            class="w-8 h-8 absolute top-1/2 -mt-2 rounded-full bg-blue-300 text-center">
                                            <i class="bi bi-patch-check-fill text-xl text-blue-500"></i>
                                        </div>
                                    </div>
                                    <div class=" col-start-3 col-end-13 mb-2 mr-auto w-full">
                                    <div class="text-base font-semibold text-gray-600 pb-1">Estado de la Revision
                                    </div>
                                        <div class="bg-blue-100 py-2 px-4 rounded-md w-full">
                                            <h3 class="font-normal font-semibold text-blue-500">Revisada</h3>
                                        </div>
                                    </div>
                                    @endswitch
                                </div>
                                <div class="flex md:contents">
                                    @switch($denouncement->status)
                                    @case('Revisada')
                                    <div class="col-start-1 col-end-2 mr-10 md:mx-auto relative">
                                        <div class="h-full w-8 flex items-center justify-center">
                                            <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                                        </div>
                                        <div
                                            class="w-8 h-8 absolute top-1/2 -mt-1 rounded-full bg-gray-300 text-center">
                                            <i class="bi bi-stopwatch-fill text-xl text-gray-500"></i>
                                        </div>
                                    </div>
                                    <div class=" col-start-3 col-end-13  my-1 mr-auto w-full">
                                        <div class="text-base font-semibold text-gray-600 pb-1">Estado de la solicitud
                                        </div>
                                        <div class="bg-gray-200 py-2 px-4 rounded-md w-full">
                                            <h3 class="font-normal font-semibold text-gray-500">En espera</h3>
                                        </div>
                                    </div>
                                    @break
                                    @case('Aceptada')
                                    @case('En proceso')
                                    @case('Terminada')
                                    @case('Pendiente a comentarios')
                                    @case('Cerrada')
                                    <div class="col-start-1 col-end-2 mr-10 md:mx-auto relative">
                                        <div class="h-full w-8 flex items-center justify-center">
                                            <div class="h-full w-1 bg-blue-300 pointer-events-none"></div>
                                        </div>
                                        <div
                                            class="w-8 h-8 absolute top-1/2 -mt-1 rounded-full bg-blue-300 text-center">
                                            <i class="bi bi-patch-check-fill text-xl text-blue-500"></i>
                                        </div>
                                    </div>
                                    <div class=" col-start-3 col-end-13   my-1 mr-auto w-full">
                                        <div class="text-base font-semibold text-gray-600 pb-1">Estado de la solicitud
                                        </div>
                                        <div class="bg-blue-100 py-2 px-4 rounded-md w-full">
                                            <h3 class="font-normal font-semibold text-blue-500">Aceptada</h3>
                                        </div>
                                    </div>
                                    @break
                                    @case('Rechazada')
                                    <div class="col-start-1 col-end-2 mr-10 md:mx-auto relative">
                                        <div class="h-full w-8 flex items-center justify-center">
                                            <div class="h-full w-1 bg-red-300 pointer-events-none"></div>
                                        </div>
                                        <div class="w-8 h-8 absolute top-1/2 -mt-1 rounded-full bg-red-300 text-center">
                                            <i class="bi bi-clipboard-x-fill text-xl text-red-500"></i>
                                        </div>
                                    </div>
                                    <div class=" col-start-3 col-end-13  my-1 mr-auto w-full">
                                        <div class="text-base font-semibold text-gray-600 pb-1">Estado de la solicitud
                                        </div>
                                        <div class="bg-red-100 py-2 px-4 rounded-md w-full">
                                            <h3 class="font-normal font-semibold text-red-500">Rechazada</h3>
                                        </div>
                                    </div>
                                    @break
                                    @default
                                    <div class="col-start-1 col-end-2 mr-10 md:mx-auto relative">
                                        <div class="h-full w-8 flex items-center justify-center">
                                            <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                                        </div>
                                        <div
                                            class="w-8 h-8 absolute top-1/2 -mt-1 rounded-full bg-gray-300 text-center">
                                            <i class="bi bi-stopwatch-fill text-xl text-gray-500"></i>
                                        </div>
                                    </div>
                                    <div class=" col-start-3 col-end-13   my-1 mr-auto w-full">
                                        <div class="text-base font-semibold text-gray-600 pb-1">Estado de la solicitud
                                        </div>
                                        <div class="bg-gray-200 py-2 px-4 rounded-md w-full">
                                            <h3 class="font-normal font-semibold text-gray-500">Pendiente</h3>
                                        </div>
                                    </div>
                                    @endswitch
                                </div>
                                <div class="flex md:contents">
                                    @switch($denouncement->status)
                                    @case('Terminada')
                                    @case('Pendiente a comentarios')
                                    @case('Cerrada')
                                    <div class="col-start-1 col-end-2 mr-10 md:mx-auto relative">
                                        <div class="h-full w-8 flex items-center justify-center">
                                            <div class="h-full w-1 bg-blue-300 pointer-events-none"></div>
                                        </div>
                                        <div
                                            class="w-8 h-8 absolute top-1/2 -mt-1 rounded-full bg-blue-300 text-center">
                                            <i class="bi bi-patch-check-fill text-xl text-blue-500"></i>
                                        </div>
                                    </div>
                                    <div class=" col-start-3 col-end-13  my-1 mr-auto w-full">
                                        <div class="text-base font-semibold text-gray-600 pb-1">Estado de la solucion
                                        </div>
                                        <div class="bg-blue-100 py-2 px-4 rounded-md w-full">
                                            <h3 class="font-normal font-semibold text-blue-500">Terminada</h3>
                                        </div>
                                    </div>
                                    @break

                                    @case('En proceso')
                                    <div class="col-start-1 col-end-2 mr-10 md:mx-auto relative">
                                        <div class="h-full w-8 flex items-center justify-center">
                                            <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                                        </div>
                                        <div
                                            class="w-8 h-8 absolute top-1/2 -mt-1 rounded-full bg-gray-300 text-center">
                                            <i class="bi bi-gear-fill text-xl text-gray-500"></i>
                                        </div>
                                    </div>
                                    <div class=" col-start-3 col-end-13   my-1 mr-auto w-full">
                                        <div class="text-base font-semibold text-gray-600 pb-1">Estado de la solucion
                                        </div>
                                        <div class="bg-gray-200 py-2 px-4 rounded-md w-full">
                                            <h3 class="font-normal font-semibold text-gray-500">En proceso</h3>
                                        </div>
                                    </div>
                                    @break
                                    @case('Rechazada')
                                    <div class="col-start-1 col-end-2 mr-10 md:mx-auto relative">
                                        <div class="h-full w-8 flex items-center justify-center">
                                            <div class="h-full w-1 bg-red-300 pointer-events-none"></div>
                                        </div>
                                        <div
                                            class="w-8 h-8 absolute top-1/2 -mt-1 rounded-full bg-red-300 text-center flex">
                                            <i class="fas fa-exclamation-circle text-xl text-red-500 m-auto"></i>
                                        </div>
                                    </div>
                                    <div class=" col-start-3 col-end-13  my-1 mr-auto w-full">
                                        <div class="text-base font-semibold text-gray-600 pb-1">Estado de la solucion
                                        </div>
                                        <div class="bg-red-100 py-2 px-4 rounded-md w-full">
                                            <h3 class="font-normal font-semibold text-red-500">Rechazada</h3>
                                        </div>
                                    </div>
                                    @break
                                    @default
                                    <div class="col-start-1 col-end-2 mr-10 md:mx-auto relative">
                                        <div class="h-full w-8 flex items-center justify-center">
                                            <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                                        </div>
                                        <div
                                            class="w-8 h-8 absolute top-1/2 -mt-1 rounded-full bg-gray-300 text-center">
                                            <i class="bi bi-stopwatch-fill text-xl text-gray-500"></i>
                                        </div>
                                    </div>
                                    <div class=" col-start-3 col-end-13   my-1 mr-auto w-full">
                                        <div class="text-base font-semibold text-gray-600 pb-1">Estado de la solucion
                                        </div>
                                        <div class="bg-gray-200 py-2 px-4 rounded-md w-full">
                                            <h3 class="font-normal font-semibold text-gray-500">Pendiente</h3>
                                        </div>
                                    </div>
                                    @endswitch
                                </div>
                                <div class="flex md:contents">
                                    @switch($denouncement->status)
                                    @case('Cerrada')
                                    <div class="col-start-1 col-end-2 mr-10 md:mx-auto relative">
                                        <div class="h-full w-8 flex items-center justify-center">
                                            <div class="h-full w-1 bg-blue-300 pointer-events-none"></div>
                                        </div>
                                        <div
                                            class="w-8 h-8 absolute top-1/2 -mt-1 rounded-full bg-blue-300 text-center">
                                            <i class="bi bi-patch-check-fill text-xl text-blue-500"></i>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-blue-100 col-start-3 col-end-13   py-2 px-4 rounded-md mt-4 mr-auto w-full">
                                        <h3 class="font-normal font-semibold text-blue-500">Cerrada</h3>
                                    </div>
                                    @break
                                    @case('Rechazada')
                                    <div class="col-start-1 col-end-2 mr-10 md:mx-auto relative">
                                        <div class="h-full w-8 flex items-center justify-center">
                                            <div class="h-full w-1 bg-red-300 pointer-events-none"></div>
                                        </div>
                                        <div
                                            class="w-8 h-8 absolute top-1/2 -mt-1 rounded-full bg-red-300 text-center flex">
                                            <i class="fas fa-exclamation-circle text-xl text-red-500 m-auto"></i>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-red-100 col-start-3 col-end-13   py-2 px-4 rounded-md mt-4 mr-auto w-full">
                                        <h3 class="font-normal font-semibold text-red-500">Rechazada</h3>
                                    </div>
                                    @break
                                    @default
                                    <div class="col-start-1 col-end-2 mr-10 md:mx-auto relative">
                                        <div class="h-full w-8 flex items-center justify-center">
                                            <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                                        </div>
                                        <div
                                            class="w-8 h-8 absolute top-1/2 -mt-1 rounded-full bg-gray-300 text-center">
                                            <i class="bi bi-stopwatch-fill text-xl text-gray-500"></i>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-gray-200 col-start-3 col-end-13   py-2 px-4 rounded-md mt-4 mr-auto w-full">
                                        <h3 class="font-normal font-semibold text-gray-500">Pendiente</h3>
                                    </div>
                                    @endswitch
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Status Report -->
                <div class="min-h-24 w-full col-span-2  lg:mt-0">
                    <section>
                        @if ($denouncement->status == "Rechazada")
                        <div
                            class="lg:mt-0 mt-3 w-full mb-2 border-l-4 border-red-300 bg-red-100 p-3 font-medium rounded">
                            Su solicitud ha sido rechazada verifique los comentarios.</div>
                        @elseif($denouncement->status == "Terminada")
                        <div
                            class="lg:mt-0 mt-3 w-full mb-2 border-l-4 border-orange-300 bg-orange-100 p-4 font-medium rounded">
                            Pendiente a comentarios finales y agradecimientos adicionales.</div>
                        @elseif($denouncement->status == "Cerrada")
                        <div
                            class="lg:mt-0 mt-3 w-full mb-2 select-none border-l-4 border-blue-400 bg-blue-100 p-4 font-medium hover:border-blue-500">
                            Su peticion ha sido cumplida.</div>
                        @elseif(session('success'))
                        <div
                            class="lg:mt-0 mt-3 w-full mb-2 select-none border-l-4 border-indigo-400 bg-indigo-100 p-4 font-medium hover:border-indigo-500">
                            {{ session('success') }}</div>
                        @endif
                    </section>

                    @if ($denouncement->status == "Rechazada")
                    <div class="mt-4">
                        <x-label for="final_comments" class="block text-sm font-medium text-gray-700"
                            :value="__('Razones de rechazo')" />
                        <textarea type="text"
                            class="mt-1 p-2 w-full border rounded-md text-sm text-gray-700 max-h-40 capitalize  "
                            id="final_comments" name="final_comments" style=""
                            disabled>{{$denouncement->final_comments}}</textarea>
                    </div>
                    @endif

                    @if($denouncement->status=="Terminada" || $denouncement->status=="Cerrada")
                    <form id="upload-form" class="" method="POST" action="{{ route('user.close.case') }}">
                        @csrf
                        <div class="row g-3">
                            <input class="form-control" type="text" value="{{$denouncement->id}}" name="id" hidden>
                            <div class="col-md-12 ">
                                @if($denouncement->status=="Cerrada" && $denouncement->final_comments!="")
                                <x-label for="final_comments" class="block text-sm font-medium text-gray-700"
                                    :value="__('Comentarios Finales')" />
                                <textarea type="text"
                                    class="mt-1 p-2 w-full border rounded-md disabled text-sm text-gray-700"
                                    id="final_comments" name="final_comments" style="height:150px;"
                                    disabled>{{$denouncement->final_comments}}</textarea>
                                @else
                                <x-label for="final_comments" class="block text-sm font-medium text-gray-700"
                                    :value="__('Comentarios o Agradecimientos')" />
                                <textarea type="text"
                                    class="mt-1 p-2 w-full border rounded-md text-sm font-light text-gray-700"
                                    id="final_comments" name="final_comments" style="height:150px;"></textarea>
                                @endif
                            </div>
                            @if($denouncement->status!="Cerrada")

                            <div class=" flex justify-end">
                                <button type="submit"
                                    class=" bg-slate-950 text-white rounded border-0 py-2 px-5 hover:bg-slate-800"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">Enviar</button>
                            </div>
                            @endif
                        </div>
                    </form>
                    @endif
                    <div class="flex flex-col space-y-5 mt-3 ">
                        <h3 class="text-xl font-semibold leading-7 text-gray-900 col-span-2">Informacion de la peticion</h3>
                        <div>
                            <x-label for="case_name" class="block text-sm font-medium text-gray-700"
                                :value="__('Asunto')" />
                            <input id="case_name" class="mt-1 p-2 w-full border rounded-md disabled text-gray-500"
                                aria-label="Default select example " name="case_name"
                                value="{{$denouncement->case_name}}" disabled></input>
                        </div>
                        <div>
                            <x-label for="id_type_denouncement" class="block text-sm font-medium text-gray-700"
                                :value="__('Tipo de peticion')" />
                            <div class="relative">
                                <select id="id_type_denouncement" name="id_type_denouncement"
                                    class="mt-1 p-2 w-full border rounded-md appearance-none disabled "
                                    aria-label="Default select example" disabled>
                                    <option value="">Selecciona una opción</option>
                                    <option value="{{$denouncement->type->id}}"
                                        {{ old('id_type_denouncement', $denouncement->id_type_denouncement) == $denouncement->type->id ? 'selected' : '' }}>
                                        {{$denouncement->type->type_service}}
                                    </option>
                                </select>
                                <svg class="pointer-events-none absolute right-3 top-0 h-full w-6 text-gray-400 mt-1"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <x-label for="quill-editor" class="block text-sm font-medium text-gray-700 mb-1"
                                :value="__('Contenido de la peticion')" />
                            <div id="quill-editor"
                                class="quill-editor-default p-2 w-full border rounded-b-md border-slate-300 "
                                style="height: 250px; background-color:#fff; " disabled></div>
                        </div>
                        <div class="grid grid-col-1 lg:grid-cols-3 gap-3 ">
                            <h3 class="text-xl font-semibold leading-7 text-gray-900 lg:col-span-3">Informacion de la peticion</h3>
                            <div>
                                <x-label for="postal_code" class="block text-sm font-medium text-gray-700"
                                    :value="__('Codigo Postal')" />
                                <input id="postal_code" class="mt-1 p-2 w-full border rounded-md text-gray-500 bg-white"
                                    aria-label="Default select example " name="postal_code" value="#{{$denouncement->contact->suburb->postal_code}}"
                                    disabled></input>
                            </div>
                            <div class="lg:col-span-2">
                                <x-label for="phone" class="block text-sm font-medium text-gray-700"
                                    :value="__('Colonia o Fraccionamiento')" />
                                <input id="phone" class="mt-1 p-2 w-full border rounded-md text-gray-500 bg-white"
                                    aria-label="Default select example " name="phone" value="{{$denouncement->contact->suburb->name}}"
                                    disabled></input>
                            </div>
                            <div class="lg:col-span-3">
                                <x-label for="address" class="block text-sm font-medium text-gray-700"
                                    :value="__('Direccion')" />
                                <input id="address" class="mt-1 p-2 w-full border rounded-md text-gray-500 bg-white"
                                    aria-label="Default select example " name="address" value="{{$denouncement->contact->address}}"
                                    disabled></input>
                            </div>
                            <div class="lg:col-span-2">
                                <x-label for="phone" class="block text-sm font-medium text-gray-700"
                                    :value="__('Telefono')" />
                                <input id="phone" class="mt-1 p-2 w-full border rounded-md text-gray-500 bg-white"
                                    aria-label="Default select example " name="phone" value="{{$denouncement->contact->phone}}"
                                    disabled></input>
                            </div>
                            <div>
                                <x-label for="contact_schedule" class="block text-sm font-medium text-gray-700"
                                    :value="__('Horario de contacto')" />
                                <input id="contact_schedule"
                                    class="mt-1 p-2 w-full border rounded-md text-gray-500 bg-white "
                                    aria-label="Default select example " name="contact_schedule"
                                    value="{{$denouncement->contact->contact_schedule}}" disabled></input>
                            </div>
                        </div>
                        <div class=" py-3 lg:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <h3 class="text-xl font-semibold leading-7 text-gray-900 sm:col-span-3">Evidencia</h3>
                            <dt class="block text-sm font-medium text-gray-700">Evidencia</dt>
                            <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                <ul role="list"
                                    class="divide-y divide-gray-100 rounded-md border border-gray-200 max-h-72 overflow-y-auto">
                                    @if(!empty($imagePaths))
                                    @foreach($imagePaths as $image)
                                    <li onclick="openModal('{{ asset($image)}}')"
                                        class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6 hover:bg-blue-400 group">
                                        <div class="flex w-0 flex-1 items-center">
                                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-white"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                <span class="truncate font-medium group-hover:text-white">Evidencia
                                                    {{ $loop->iteration }}</span>
                                            </div>
                                        </div>
                                        <div class="ml-4 flex-shrink-0">
                                            <a href="{{$image}}" download
                                                class="font-medium text-indigo-600 group-hover:text-indigo-50">Descagar</a>
                                        </div>
                                    </li>
                                    @endforeach
                                    @else
                                    <p>No hay evidencia inicial.</p>
                                    @endif
                                </ul>
                            </dd>
                        </div>
                        @if($denouncement->status == "Terminada" || $denouncement->status == "Cerrada")

                        <div class=" py-3 lg:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="block text-sm font-medium text-gray-700">Evidencia Final</dt>
                            <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                <ul role="list"
                                    class="divide-y divide-gray-100 rounded-md border border-gray-200 max-h-72 overflow-y-auto">
                                    @if(!empty($finalImagePaths))
                                    @foreach($finalImagePaths as $imagen)
                                    <li onclick="openModal('{{ asset($imagen)}}')"
                                        class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6 hover:bg-blue-400 group">
                                        <div class="flex w-0 flex-1 items-center">
                                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-white"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                <span class="truncate font-medium group-hover:text-white">Evidencia
                                                    {{ $loop->iteration }}</span>
                                            </div>
                                        </div>
                                        <div class="ml-4 flex-shrink-0">
                                            <a href="{{$imagen}}" download
                                                class="font-medium text-indigo-600 group-hover:text-indigo-50">Descagar</a>
                                        </div>
                                    </li>
                                    @endforeach
                                    @else
                                    <li
                                        class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6 group">
                                        <div class="flex w-0 flex-1 items-center">
                                            <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                <span class="truncate font-medium">No hay evidencia inicial</span>
                                            </div>
                                        </div>
                                    </li>
                                    @endif
                                </ul>
                            </dd>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div
    class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster bg-gray-900 bg-opacity-50">
    <div
        class="border border-gray-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Evidencia</p>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </div>
            </div>
            <!--Body-->
            <div class="my-5">
                <img id="ImageModal" alt="nature" class="h-96 w-96 mx-auto object-cover object-center" />
            </div>
            <!--Footer-->
            <div class="flex justify-end pt-2">
                <a
                    class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300 cursor-pointer">Atras</a>
                <a id="down" download href=""
                    class="focus:outline-none px-4 bg-slate-950 p-3 ml-3 rounded-lg text-white hover:bg-slate-800 cursor-pointer">Descargar</a>
            </div>
        </div>
    </div>
</div>

<script>
const modal = document.querySelector('.main-modal');
const closeButton = document.querySelectorAll('.modal-close');

const modalClose = () => {
    modal.classList.remove('fadeIn');
    modal.classList.add('fadeOut');
    setTimeout(() => {
        modal.style.display = 'none';
    }, 500);
}

const openModal = (imagen) => {
    modal.classList.remove('fadeOut');
    modal.classList.add('fadeIn');
    modal.style.display = 'flex';
    let im = document.getElementById("ImageModal");
    let descargar = document.getElementById("down")
    im.src = imagen;
    descargar.href = imagen;
}

for (let i = 0; i < closeButton.length; i++) {

    const elements = closeButton[i];

    elements.onclick = (e) => modalClose();

    modal.style.display = 'none';

    window.onclick = function(event) {
        if (event.target == modal) modalClose();
    }
}
</script>
<style>
@keyframes rotate-x {
    0% {
        transform: rotateX(0deg);
    }

    50% {
        transform: rotateX(180deg);
    }

    100% {
        transform: rotateX(360deg);
    }
}

.animate-rotate-x-infinite {
    animation-name: rotate-x;
    animation-iteration-count: infinite;
    animation-duration: 4000ms;
}

.se {
    --tw-bg-opacity: 1;
    scrollbar-width: thin;
    /* "auto" or "thin" */
    scrollbar-color: rgb(209 213 219) rgb(249 250 251);
    scrollbar-b
}

.ql-toolbar.ql-snow {
    border-radius: 0.375rem 0.375rem 0 0 !important;
    border-width: 1px !important;
    box-sizing: border-box !important;
    border-style: solid !important;
    border-color: #e5e7eb !important;
}

#quill-editor {
    border-radius: 0 0 0.375rem 0.375rem !important;

    border-width: 1px !important;
    box-sizing: border-box !important;
    border-style: solid !important;
    border-top: 0 !important;
    border-color: #e5e7eb !important;
}

.hasImage:hover section {
    background-color: rgba(5, 5, 5, 0.4);
}

.hasImage:hover button:hover {
    background: rgba(5, 5, 5, 0.45);
}

#overlay.draggedover {
    background-color: rgba(255, 255, 255, 0.7);
}


.group:hover .group-hover\:text-blue-800 {
    color: #2b6cb0;
}

select {
    -moz-appearance: none;
    text-indent: 0.01px;
    text-overflow: '';
    color: black;
    background: white;
    -webkit-appearance: none;
    -ms-appearance: none;
    -o-appearance: none;
    appearance: none;
}

.ql-toolbar.ql-snow {
    border-radius: 0.375rem 0.375rem 0 0 !important;
    border-width: 1px !important;
    box-sizing: border-box !important;
    border-style: solid !important;
    border-color: #e5e7eb !important;
}

#quill-editor {
    border-radius: 0 0 0.375rem 0.375rem !important;

    border-width: 1px !important;
    box-sizing: border-box !important;
    border-style: solid !important;
    border-top: 0 !important;
    border-color: #e5e7eb !important;
}

.animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}

.animated.faster {
    -webkit-animation-duration: 500ms;
    animation-duration: 500ms;
}

.fadeIn {
    -webkit-animation-name: fadeIn;
    animation-name: fadeIn;
}

.fadeOut {
    -webkit-animation-name: fadeOut;
    animation-name: fadeOut;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

@keyframes fadeOut {
    from {
        opacity: 1;
    }

    to {
        opacity: 0;
    }
}
</style>
</style>


<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
<script src="{{asset('public/assets/vendor/quill/quill.js')}}"></script>

<script>
$(document).ready(function() {
    var selectedFiles = [];

    var quill = new Quill('#quill-editor', {
        theme: 'snow',
        readOnly: true,
    });
    quill.root.innerHTML = `{!! $denouncement->description !!}`;
});
</script>
@endsection
