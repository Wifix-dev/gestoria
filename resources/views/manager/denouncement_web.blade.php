@extends('components.layout')

@section('title', 'Detalle de la Denuncia')

@section('content')
<style>
.ql-toolbar {
    background: #f8f9fa;
    border: 1px solid rgba(0, 0, 0, .125) !important;
    border-bottom: 0px !important;
    border-radius: .25rem .25rem 0 0;
}

#preview {
    border-radius: 10px;
    scrollbar-width: thin;
    scrollbar-color: #ccc #f1f1f1;
}

#preview {
    overflow-x: auto;
    white-space: nowrap;
}

#preview::-webkit-scrollbar {
    height: 12px;
    border-radius: 10px;

}

#preview::-webkit-scrollbar-thumb {
    background-color: #ccc;
    border-radius: 10px;
}

#preview::-webkit-scrollbar-track {
    border-radius: 10px;
    background-color: #f1f1f1;
}

#previewphoto {
    border-radius: 10px;
    scrollbar-width: thin;
    scrollbar-color: #ccc #f1f1f1;
}

#previewphoto {
    overflow-x: auto;
    white-space: nowrap;
}

#previewphoto::-webkit-scrollbar {
    height: 12px;
    border-radius: 10px;


}

#previewphoto::-webkit-scrollbar-thumb {
    background-color: #ccc;
    border-radius: 10px;
}

#previewphoto::-webkit-scrollbar-track {
    border-radius: 10px;
    background-color: #f1f1f1;
}

#previewphoto {
    border-radius: 10px;
    scrollbar-width: thin;
    scrollbar-color: #ccc #f1f1f1;
}
</style>

<div class="flex items-center pb-4 overflow-x-auto whitespace-nowrap lg:px-0 ">
    <a href="#" class="text-slate-900 ">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path
                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
        </svg>
    </a>

    <span class="mx-5 text-slate-900 ">
        /
    </span>

    <a href="#" class="text-slate-900 ">
        Denuncia o Peticion
    </a>

    <span class="mx-5 text-slate-900 ">
        /
    </span>
    <a href="#" class=" text-slate-900 ">
        Detalles
    </a>
    <span class="mx-5 text-slate-900 ">
        /
    </span>
    <a href="#" class=" text-slate-900 ">
        {{ $denouncement->id }}
    </a>
</div>

<div class="w-full min-h-96 shadow rounded-lg bg-white border border-gray-200">
    <div class="flex flex-col space-y-3 lg:space-y-0 lg:grid lg:gap-4 lg:grid-cols-3 p-6 lg:p-8">
        <div class="font-bold p-2 ">
            <div class="space-y-5 sticky top-10 ">
                <div class="">
                    <h4 class="text-xl text-gray-900 font-bold ">Estado de la Denuncia</h4>
                </div>
                <div id="imf" class="border-l-2 border-dashed border-left flex flex-col gap-3 pl-2">
                    <div class="relative w-full pt-0 mt-0 ">
                        <p class="text-base font-normal  mt-0 pl-3">En espera a revision</p>
                        @switch($denouncement->status)
                        @case('En espera')
                        <div class="relative w-full">
                            <span
                                class="absolute -top-0.5 z-10 h-9 w-9 -ml-5 text-2xl rounded-full text-gray-300 animate-rotate-x-infinite ">
                                <i class="bi bi-hourglass "></i>
                            </span>
                            <div class="ml-6">
                                <h4 class="text-md text-gray-300 -ml-3 pt-1">Pendiente</h4>
                            </div>
                        </div>
                        @break
                        @case('Revisada')
                        @default
                        <div class="relative w-full">
                            <span class="absolute -top-0.5 z-10 h-9 w-9 -ml-5  text-2xl rounded-full text-blue-500">
                                <i class="bi bi-patch-check-fill"></i>
                            </span>
                            <div class="ml-6">
                                <h4 class="text-md text-blue-500 -ml-3 pt-1">Revisada</h4>
                            </div>
                        </div>
                        @endswitch
                    </div>
                    <div class="relative w-full">
                        <p class="text-base font-normal pl-3">Recepcion de solicitud</p>
                        @switch($denouncement->status)
                        @case('Revisada')
                        <div class="relative w-full">
                            <span
                                class="absolute -top-0.5 z-10 h-9 w-9 text-2xl -ml-5 rounded-full text-gray-500 animate-rotate-x-infinite">
                                <i class="bi bi-hourglass"></i>
                            </span>

                            <div class="ml-6">
                                <h4 class="text-md text-gray-500 -ml-3 pt-1">En espera</h4>
                            </div>
                        </div>
                        @break
                        @case('Aceptada')
                        @case('En proceso')
                        @case('Terminada')
                        @case('Pendiente a comentarios')
                        @case('Cerrada')
                        <div class="relative w-full">
                            <span class="absolute -top-0.5 z-10 h-9 w-9 -ml-5 text-2xl rounded-full text-blue-500">
                                <i class="bi bi-patch-check-fill "></i>
                            </span>
                            <div class="ml-6">
                                <h4 class="text-md text-blue-500 -ml-3 pt-1">Aceptada</h4>
                            </div>
                        </div>
                        @break
                        @case('Rechazada')
                        <div class="relative w-full">
                            <span
                                class="absolute -top-0.5 z-10 h-9 w-9 -ml-5 text-2xl rounded-full text-red-500 animate-bounce ">
                                <i class="bi bi-clipboard-x-fill"></i>
                            </span>
                            <div class="ml-6">
                                <h4 class="text-md text-red-500 -ml-3 pt-1">Rechazada</h4>
                            </div>
                        </div>
                        @break
                        @default
                        <div class="relative w-full">
                            <span class="absolute -top-0.5 z-10 h-9 w-9 -ml-5 text-2xl rounded-full text-gray-300">
                                <i class="bi bi-stopwatch-fill"></i>
                            </span>
                            <div class="ml-6">
                                <h4 class="text-md text-gray-300 -ml-3 pt-1">Pendiente</h4>
                            </div>
                        </div>
                        @endswitch
                    </div>
                    <div class="relative w-full">
                        <p class="text-base font-normal pl-3">Solucion</p>
                        @switch($denouncement->status)
                        @case('Terminada')
                        @case('Pendiente a comentarios')
                        @case('Cerrada')
                        <div class="relative w-full">
                            <span class="absolute -top-0.5 z-10 h-9 w-9 -ml-5 text-2xl rounded-full text-blue-500">
                                <i class="bi bi-patch-check-fill "></i>
                            </span>
                            <div class="ml-6">
                                <h4 class="text-md text-blue-500 -ml-3 pt-1">Terminada</h4>
                            </div>
                        </div>
                        @break

                        @case('En proceso')
                        <div class="relative w-full">
                            <span
                                class="absolute -top-0.5 z-10 h-9 w-9 text-2xl -ml-5 rounded-full text-blue-400  animate-bounce ">
                                <i class="bi bi-gear-fill"></i>
                            </span>
                            <div class="ml-6">
                                <h4 class="text-md text-blue-400 -ml-3 pt-1">En proceso</h4>
                            </div>
                        </div>
                        @break
                        @case('Rechazada')
                        <div class="relative w-full">
                            <span class="absolute -top-0.5 z-10 h-9 w-9 -ml-5 text-2xl rounded-full text-red-500  ">
                                <i class="bi bi-clipboard-x-fill"></i>
                            </span>
                            <div class="ml-6">
                                <h4 class="text-md text-red-500 -ml-3 pt-1">Rechazada</h4>
                            </div>
                        </div>
                        @break

                        @default
                        <div class="relative w-full">
                            <span class="absolute -top-0.5 z-10 h-9 w-9 -ml-5 text-2xl rounded-full text-gray-300">
                                <i class="bi bi-stopwatch-fill"></i>
                            </span>
                            <div class="ml-6">
                                <h4 class="text-md text-gray-300 -ml-3 pt-1">Pendiente</h4>
                            </div>
                        </div>
                        @endswitch
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-2 ">
            <h4 class="text-xl text-gray-900 font-bold pt-5 pb-3">Peticion o denuncia</h4>
            @if ($errors->any())
            <div class="flex flex-col space-y-3 lg:space-y-0 lg:grid lg:gap-4 lg:grid-cols-2">
                <div class="col-span-2" id="msgE">
                    <div class="bg-red-50 border-l-8 border-red-900">
                        <div class="flex items-center">
                            <div class="p-.5">
                                <div class="flex items-center">
                                    <div class="ml-2" onclick="cerrarElemento()">
                                        <svg class="h-8 w-8 text-red-900 mr-2 cursor-pointer"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <p class="px-6 py-4 text-red-900 font-semibold text-base">Es necesario verificar que
                                        los campos estén correctos o que los datos sean precisos.</p>
                                </div>
                                <div class="px-16 mb-4">
                                    @foreach ($errors->all() as $error)
                                    <li class="text-md font-bold text-red-500 text-sm">{{ $error }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if($denouncement->status == "Rechazada" || $denouncement->status == "Terminada" ||
            $denouncement->status ==
            "Cerrada" || session('success'))
            <section class="pt-2 pb-5">
                @if ($denouncement->status == "Rechazada")
                <div
                    class="lg:mt-0 mt-3 hover:red-yellow-500 w-full mb-2 select-none border-l-4 border-red-400 bg-red-100 p-3 font-medium">
                    Estar a al pendiente en dado caso del contacto del ciudadano
                </div>
                @elseif($denouncement->status == "Terminada")
                <div
                    class="lg:mt-0 mt-3 w-full mb-2 select-none border-l-4 border-orange-400 bg-orange-100 p-4 font-medium hover:border-orange-500">
                    Pendiente a comentarios finales y agradecimientos adicionales.
                </div>
                @elseif($denouncement->status == "Cerrada")
                <div
                    class="lg:mt-0 mt-3 w-full mb-2 select-none border-l-4 border-blue-400 bg-blue-100 p-4 font-medium hover:border-blue-500">
                    La peticion ha sido atendida
                </div>
                @elseif(session('success'))
                <div
                    class="lg:mt-0 mt-3 w-full mb-2 select-none border-l-4 border-indigo-400 bg-indigo-100 p-4 font-medium hover:border-indigo-500">
                    {{ session('success') }}
                </div>
                @endif
            </section>
            @endif

            @if($denouncement->status=="Terminada")
                    <form id="upload-form" class="" method="POST" action="{{ route('manager.close.case') }}">
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

            @if($denouncement->status=="En espera" || $denouncement->status=="Revisada" ||
            $denouncement->status=="Rechazada")
            <div class=" bg-gray-50 border border-gray-200 p-4 lg:p-6 rounded-lg">
                <div class="">
                    <form id="upload-form" class="" method="POST" action="{{route('manager.set.web.response')}}">
                        @csrf
                        <div class="">
                            <div>
                                <div>
                                    <h3 class="text-base font-semibold text-gray-900">Acciones a tomar</h3>
                                </div>
                                <div class="mt-2 ">
                                    <dl class="">
                                        <div class=" py-4 grid lg:grid-cols-3 gap-3 lg:px-0">
                                            <dt>
                                                <label for="inputState"
                                                    class="block text-md text-gray-500 py-auto">¿Aceptará esta
                                                    petición?</label>
                                            </dt>
                                            <dd class=" text-sm leading-6 text-gray-700 lg:col-span-2 lg:mt-0">
                                                <input type="text" name="id" value="{{$denouncement->id}}" hidden>
                                                <div class="relative">
                                                    <select id="inputState" name="status"
                                                        class="mt-1 p-2 w-full border rounded-md appearance-none"
                                                        aria-label="Default select example">
                                                        <option selected>Opciones</option>
                                                        <option value="En proceso">Sí</option>
                                                        <option value="Rechazada">No</option>
                                                    </select>

                                                    <svg class="pointer-events-none absolute right-3 top-0 h-full w-6 text-gray-400 mt-1"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </dd>
                                        </div>
                                        <div id="conditionalDiv" class="hidden pb-4 grid lg:grid-cols-3 gap-3 lg:px-0 "
                                            style="">
                                            <dt class="col-span-1">
                                                <label for="final_comments"
                                                    class="block text-md text-gray-500 py-auto">Razones de
                                                    rechazo</label>
                                            </dt>
                                            <dd class="col-span-2">
                                                <textarea type="text"
                                                    class="border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                    id="final_comments" name="final_comments"
                                                    style="height:150px;"></textarea>
                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit"
                                    class="bg-black text-white p-2 px-4 w-full rounded-md md:w-auto mt-sm-2 mt-md-0"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @endif
            <div class="mt-5">
                <div class="">
                    <h3 class="text-xl font-semibold leading-7 text-gray-900">Informacion de la peticion</h3>
                    <p class="mt-1 max-w-2xl text-base leading-6 text-gray-500">Informacion
                    </p>
                </div>
                <div class="mt-6 border-t border-gray-100">
                    <dl class="divide-y divide-gray-100 text-base">
                        <div class="lg:px-4 py-3 lg:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class=" leading-6 text-gray-900">Nombre Completo</dt>
                            <dd class="mt-1 leading-6 text-gray-500 sm:col-span-2 sm:mt-0">{{$denouncement->name}} {{$denouncement->last_name}}</dd>
                        </div>
                        <div class="lg:px-4 py-3 lg:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class=" leading-6 text-gray-900">Tipo de denuncia</dt>
                            <dd class="mt-1 leading-6 text-gray-500 sm:col-span-2 sm:mt-0">{{$denouncement->type->type_service}}</dd>
                        </div>
                        <div class="lg:px-4 py-3 lg:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class=" leading-6 text-gray-900">Colonia</dt>
                            <dd class="mt-1 leading-6 text-gray-500 sm:col-span-2 sm:mt-0">{{$denouncement->contact->suburb->name}}
                            </dd>
                        </div>
                        <div class="lg:px-4 py-3 lg:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class=" leading-6 text-gray-900">Direccion</dt>
                            <dd class="mt-1 leading-6 text-gray-500 sm:col-span-2 sm:mt-0">{{$denouncement->contact->address}}
                            </dd>
                        </div>

                        <div class="lg:px-4 py-3 lg:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class=" leading-6 text-gray-900">Numero de Telefono</dt>
                            <dd class="mt-1 leading-6 text-gray-500 sm:col-span-2 sm:mt-0">{{$denouncement->contact->phone}}</dd>
                        </div>
                        <div class="lg:px-4 py-3 lg:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class=" leading-6 text-gray-900">Horario de Contacto</dt>
                            <dd class="mt-1 leading-6 text-gray-500 sm:col-span-2 sm:mt-0">
                                {{$denouncement->contact->contact_schedule}}</dd>
                        </div>
                        <div class="lg:px-4 py-3 lg:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class=" leading-6 text-gray-900">Descripcion</dt>
                            <dd class="mt-1 leading-6 text-gray-500 sm:col-span-2 sm:mt-0">
                                <div id="quill-editor" class=" rounded-bottom h-64" disabled>
                                    {!! $denouncement->description !!}
                                </div>
                            </dd>
                        </div>
                        <div class="lg:px-4 py-3 lg:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-base leading-6 text-gray-900">Evidencia</dt>
                            <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                <ul role="list"
                                    class="divide-y divide-gray-100 rounded-md border border-gray-200 h-72 overflow-y-auto">
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
                    </dl>
                </div>
            </div>
            @if($denouncement->status == "En proceso")
            <form id="upload-form" class="" method="POST" action="{{route('manager.setEvidence.web')}}"
                enctype="multipart/form-data">
                @csrf
                <h4 class="text-xl text-gray-900 font-bold py-3">Evidencia Final</h4>
                <div class="bg-gray-50 p-5 rounded-md border border-gray-100">
                    <article aria-label="File Upload Modal" class="relative h-full flex flex-col "
                        ondrop="dropHandler(event);" ondragover="dragOverHandler(event);"
                        ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">
                        <div id="overlay"
                            class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
                            <i>
                                <svg class="fill-current w-12 h-12 mb-3 text-blue-700"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479-1.092l4 4h-3v4h-2v-4h-3l4-4z" />
                                </svg>
                            </i>
                            <p class="text-lg text-blue-700">Drop files to upload</p>
                        </div>
                        <section class="h-full w-full h-full flex flex-col">
                            <header
                                class="border-dashed border py-12 flex flex-col justify-center items-center rounded-md">
                                <p class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
                                    <span>Arrastra y suelta tus</span>&nbsp;<span> archivos en cualquier lugar
                                        o</span>
                                </p>
                                <input class="form-control" type="text" value="{{$denouncement->id}}" name="id" hidden>
                                <input id="hidden-input" type="file" name="final_evidence[]" multiple accept="image/*"
                                    class="hidden" />
                                <a type="button" id="button"
                                    class="mt-2 rounded px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                                    Cargar un archivo
                                </a>
                            </header>

                            <h1 class="pt-8 pb-3 font-semibold sm:text-lg text-gray-900">
                                Evidencia a subir
                            </h1>

                            <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
                                <li id="empty"
                                    class="h-full w-full text-center flex flex-col items-center justify-center items-center">
                                    <img class="mx-auto w-32  h-full max-h-32"
                                        src="https://user-images.githubusercontent.com/507615/54591670-ac0a0180-4a65-11e9-846c-e55ffce0fe7b.png"
                                        alt="no data" />
                                    <span class="text-small text-gray-500">Archivos no seleccionados</span>
                                </li>
                            </ul>
                        </section>

                    </article>
                    <div class="mt-4 flex justify-end">
                        <button type="submit"
                            class="bg-slate-950 hover:bg-slate-900 px-4 py-3 rounded-lg text-white md:w-auto w-full"
                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">Guardar Evidencia</button>
                    </div>
                </div>

                <template id="file-template">
                    <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                        <article tabindex="0"
                            class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
                            <img alt="upload preview"
                                class="img-preview hidden w-full h-full object-cover rounded-md bg-fixed" />
                            <section
                                class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                <h1 class="flex-1 group-hover:text-blue-800"></h1>
                                <div class="flex">
                                    <span class="p-1 text-blue-800">
                                        <i>
                                            <svg class="fill-current w-4 h-4 ml-auto pt-1"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                                            </svg>
                                        </i>
                                    </span>
                                    <p class="p-1 size text-xs text-gray-700"></p>
                                    <button
                                        class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                                        <svg class="pointer-events-none fill-current w-4 h-4 ml-auto"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path class="pointer-events-none"
                                                d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                        </svg>
                                    </button>
                                </div>
                            </section>
                        </article>
                    </li>
                </template>

                <template id="image-template">
                    <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                        <article tabindex="0"
                            class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
                            <img alt="upload preview"
                                class="img-preview w-full h-full object-cover rounded-md bg-fixed" />
                            <section
                                class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                <h1 class="flex-1"></h1>
                                <div class="flex">
                                    <span class="p-1">
                                        <i>
                                            <svg class="fill-current w-4 h-4 ml-auto pt-"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                                            </svg>
                                        </i>
                                    </span>

                                    <p class="p-1 size text-xs"></p>
                                    <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                                        <svg class="pointer-events-none fill-current w-4 h-4 ml-auto"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path class="pointer-events-none"
                                                d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                        </svg>
                                    </button>
                                </div>
                            </section>
                        </article>
                    </li>
                </template>
            </form>
            @endif
            @if($denouncement->status == "Terminada" || $denouncement->status == "Cerrada")

            <div class=" py-3 lg:py-5 sm:grid sm:grid-cols-3 sm:gap-4 md:px-4 px-0">
                <dt class="text-base font-bold leading-6 text-gray-900">Evidencia Final</dt>
                <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                    <ul role="list"
                        class="divide-y divide-gray-100 rounded-md border border-gray-200 h-72 overflow-y-auto">
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
                        <p>No hay evidencia inicial.</p>
                        @endif
                    </ul>
                </dd>
            </div>
            @endif

            @if(($denouncement->status=="Terminada" || $denouncement->status=="Cerrada") &&
            $denouncement->final_comments != '')
            <div class="lg:px-4 py-3 lg:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class=" font-bold leading-6 text-gray-900">Comentarios Finales</dt>
                <dd class="mt-1 leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                    <textarea type="text"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="final_comments" name="final_comments"
                        style="height:150px;" disabled>{{$denouncement->final_comments}}
                    </textarea>
                </dd>
            </div>
            @endif
        </div>
    </div>
</div>

<div
    class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn delay-150 bg-gray-900 bg-opacity-50">
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

document.addEventListener('DOMContentLoaded', function() {

    var quill = new Quill('#quill-editor', {
        theme: 'snow',
        readOnly: true,
        modules: {
            toolbar: false // Oculta la barra de herramientas
        }
    });
    quill.root.innerHTML = `{!! $denouncement->description !!}`;
});

$(document).ready(function() {
    var selectedFiles = [];

    $("#btn-logo-img").click(function() {
        var subir_btn = document.getElementById("final_evidence");
        subir_btn.click();
    });
    // Al enviar el formulario, sincroniza el contenido del editor Quill con el textarea
    $('#upload-form').on('submit', function() {
        var editorContent = quill.root.innerHTML;
        $('#description').val(editorContent);
    });

    $('#final_evidence').change(function() {
        selectedFiles = selectedFiles.concat(Array.from(this.files));
        updatePreview(selectedFiles);
        console.log(selectedFiles);


        updateInput(selectedFiles);
    });

    function updatePreview(files) {
        $('#preview').empty();
        files.forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = $('<img>').attr('src', e.target.result).addClass('p-2 rounded-3')
                    .css({
                        'width': '120px',
                        'height': '120px',
                        'margin-right': '10px',
                        'border-style': 'dashed',
                        'border': '1px dashed #ccc'
                    });

                const btnRemove = $('<button>').html('&#10006;').addClass(
                    'btn btn-dark position-absolute top-0 start-0 btn-sm m-2').click(
                    function() {
                        selectedFiles.splice(index, 1);
                        updatePreview(selectedFiles);
                        updateInput(selectedFiles);
                    });

                const container = $('<div>').addClass('preview-item position-relative flex')
                    .append(img).append(btnRemove);
                $('#preview').append(container);
            };
            reader.readAsDataURL(file);
        });
    }

    function updateInput(files) {
        const input = $('#final_evidence')[0];
        const dataTransfer = new DataTransfer();
        files.forEach(file => dataTransfer.items.add(file));
        input.files = dataTransfer.files;
    }
});



document.getElementById('inputState').addEventListener('change', function() {
    var selectedValue = this.value;
    var div = document.getElementById('conditionalDiv');

    if (selectedValue === 'Rechazada') {
        div.classList.remove('hidden');
    } else {
        div.classList.add('hidden');
    }
});
</script>

<script>
function cerrarElemento() {
    var elemento = document.getElementById('msgE');
    if (elemento) {
        elemento.style.display = 'none';
    }
}
const fileTempl = document.getElementById("file-template"),
    imageTempl = document.getElementById("image-template"),
    empty = document.getElementById("empty");

let FILES = {};

function addFile(target, file) {
    const isImage = file.type.match("image.*"),
        objectURL = URL.createObjectURL(file);

    const clone = isImage ?
        imageTempl.content.cloneNode(true) :
        fileTempl.content.cloneNode(true);

    clone.querySelector("h1").textContent = file.name;
    clone.querySelector("li").id = objectURL;
    clone.querySelector(".delete").dataset.target = objectURL;
    clone.querySelector(".size").textContent =
        file.size > 1024 ?
        file.size > 1048576 ?
        Math.round(file.size / 1048576) + "mb" :
        Math.round(file.size / 1024) + "kb" :
        file.size + "b";

    isImage &&
        Object.assign(clone.querySelector("img"), {
            src: objectURL,
            alt: file.name
        });

    empty.classList.add("hidden");
    target.prepend(clone);

    FILES[objectURL] = file;
}

const gallery = document.getElementById("gallery"),
    overlay = document.getElementById("overlay");

// click the hidden input of type file if the visible button is clicked
// and capture the selected files
const hidden = document.getElementById("hidden-input");
document.getElementById("button").onclick = () => hidden.click();
hidden.onchange = (e) => {
    for (const file of e.target.files) {
        addFile(gallery, file);
    }
};

const hasFiles = ({
        dataTransfer: {
            types = []
        }
    }) =>
    types.indexOf("Files") > -1;


let counter = 0;

function dropHandler(ev) {
    ev.preventDefault();
    for (const file of ev.dataTransfer.files) {
        addFile(gallery, file);
        overlay.classList.remove("draggedover");
        counter = 0;
    }
}

// only react to actual files being dragged
function dragEnterHandler(e) {
    e.preventDefault();
    if (!hasFiles(e)) {
        return;
    }
    ++counter && overlay.classList.add("draggedover");
}

function dragLeaveHandler(e) {
    1 > --counter && overlay.classList.remove("draggedover");
}

function dragOverHandler(e) {
    if (hasFiles(e)) {
        e.preventDefault();
    }
}


gallery.onclick = ({
    target
}) => {
    if (target.classList.contains("delete")) {
        const ou = target.dataset.target;
        document.getElementById(ou).remove(ou);
        gallery.children.length === 1 && empty.classList.remove("hidden");
        delete FILES[ou];
    }
};

// print all selected files
document.getElementById("submit").onclick = () => {
    alert(`Submitted Files:\n${JSON.stringify(FILES)}`);
    console.log(FILES);
};

// clear entire selection
document.getElementById("cancel").onclick = () => {
    while (gallery.children.length > 0) {
        gallery.lastChild.remove();
    }
    FILES = {};
    empty.classList.remove("hidden");
    gallery.append(empty);
};
</script>
<style>
.hasImage:hover section {
    background-color: rgba(5, 5, 5, 0.4);
}

.hasImage:hover button:hover {
    background: rgba(5, 5, 5, 0.45);
}

#imf div div span i {
    opacity: 1 !important;
}

#overlay p,
i {
    opacity: 0;
}

#overlay.draggedover {
    background-color: rgba(255, 255, 255, 0.7);
}

#overlay.draggedover p,
#overlay.draggedover i {
    opacity: 1;
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
</style>
<script>
$(document).ready(function() {
    var selectedFiles = [];

    var quill = new Quill('#quill-editor', {
        theme: 'snow'
    });

    // Al enviar el formulario, sincroniza el contenido del editor Quill con el textarea
    $('#upload-form').on('submit', function() {
        var editorContent = quill.root.innerHTML;
        $('#description').val(editorContent);
    });
});
</script>
<style>
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
@endsection
