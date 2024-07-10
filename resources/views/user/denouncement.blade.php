@extends('components.user')

@section('title', 'Detalle de la Denuncia')

@section('content')


<div class="h-48 lg:h-56  relative overflow-hidden bg-indigo-950 z-0  ">
    <x-fondo class="max-w-full "></x-fondo>
</div>
<div class="w-full max-w-6xl mt-24 absolute  mx-auto z-0 inset-x-0 top-0 pb-12">
    <div class="flex items-center pb-6 overflow-x-auto whitespace-nowrap px-5 pt-2 lg:pt-6 lg:px-0 ">
        <a href="#" class="text-white ">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path
                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
        </a>

        <span class="mx-3 text-white ">
            /
        </span>

        <a href="#" class="text-white ">
            Denuncia o Peticion
        </a>
        <span class="mx-3 text-white ">
            /
        </span>
        <a href="#" class="text-white ">
            Detalles
        </a>
        <span class="mx-3 text-white ">
            /
        </span>
        <a href="#" class=" text-blue-400 ">
            {{$denouncement->id}}
        </a>
    </div>
    <div class="mx-2 lg:mx-0 bg-white p-6 lg:p-12 rounded shadow">
        <div class="relative">
            <div class="flex flex-col space-y-3 lg:space-y-0 lg:grid lg:gap-4 lg:grid-cols-3">
                <!-- Status Report -->
                <div class="font-bold bg-white p-3">
                    <div class="space-y-5 sticky top-24 ">
                        <div class="">
                            <h4 class="text-xl text-gray-900 font-bold">Estado de la Denuncia</h4>
                        </div>
                        <div class="border-l-2 border-dashed border-left flex flex-col gap-3 pl-2">
                            <div class="relative w-full pt-0 mt-0 ">
                                <p class="text-base font-semibold  mt-0">En espera a revision</p>
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
                                <p class="text-base font-semibold">Recepcion de solicitud</p>
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
                                <p class="text-base font-semibold">Solucion</p>
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
                <!-- Status Report -->
                <div class="min-h-24 w-full col-span-2 rounded  lg:mt-0">
                    <h4 class="text-xl text-gray-900 font-bold pt-3">Peticion o denincia</h4>
                    <section>
                        @if ($denouncement->status == "Rechazada")
                        <div
                            class="lg:mt-0 mt-3 hover:red-yellow-500 w-full mb-2 select-none border-l-4 border-red-400 bg-red-100 p-3 font-medium">
                            Su solicitud ha sido rechazada verifique los comentarios.</div>
                        @elseif($denouncement->status == "Terminada")
                        <div
                            class="lg:mt-0 mt-3 w-full mb-2 select-none border-l-4 border-orange-400 bg-orange-100 p-4 font-medium hover:border-orange-500">
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
                            class="mt-1 p-2 w-full border rounded-md text-sm text-gray-700 capitalize  "
                            id="final_comments" name="final_comments" style="height:150px;"
                            disabled>{{$denouncement->final_comments}}</textarea>
                    </div>
                    @endif

                    @if($denouncement->status=="Terminada" || $denouncement->status=="Cerrada")
                    <form id="upload-form" class="" method="POST" action="{{ route('user.closecase') }}">
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
                                    @foreach($list as $option)
                                    <option value="{{ $option->id }}"
                                        {{ old('id_type_denouncement', $denouncement->id_type_denouncement) == $option->id ? 'selected' : '' }}>
                                        {{ $option->type_service }}
                                    </option>
                                    @endforeach
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
                        <div class="grid grid-col-1 lg:grid-cols-2 gap-3 ">
                            <div class="lg:col-span-2">
                                <x-label for="address" class="block text-sm font-medium text-gray-700"
                                    :value="__('Direccion')" />
                                <input id="address" class="mt-1 p-2 w-full border rounded-md text-gray-500 bg-white"
                                    aria-label="Default select example " name="address" value="{{$contact->address}}"
                                    disabled></input>
                            </div>
                            <div>
                                <x-label for="phone" class="block text-sm font-medium text-gray-700"
                                    :value="__('Telefono')" />
                                <input id="phone" class="mt-1 p-2 w-full border rounded-md text-gray-500 bg-white"
                                    aria-label="Default select example " name="phone" value="{{$contact->phone}}"
                                    disabled></input>
                            </div>
                            <div>
                                <x-label for="contact_schedule" class="block text-sm font-medium text-gray-700"
                                    :value="__('Horario de contacto')" />
                                <input id="contact_schedule"
                                    class="mt-1 p-2 w-full border rounded-md text-gray-500 bg-white "
                                    aria-label="Default select example " name="contact_schedule"
                                    value="{{$contact->contact_schedule}}" disabled></input>
                            </div>
                        </div>
                        <div class="pt-3">
                            <p class="block text-sm font-medium text-gray-700">Evidencia</p>
                            <div class="flex items-center pb-2 overflow-x-auto whitespace-nowrap px-5 lg:px-0 pt-1 se">
                                @if(!empty($imagePaths))
                                @foreach($imagePaths as $image)
                                <div class="mr-3 cursor-pointer">
                                    <div class="h-24 w-40 relative group bg-gray-50 rounded"
                                        data-dialog-target="image-dialog">
                                        <div onclick="openModal('{{ asset($image)}}')"
                                            class="w-full h-full absolute z-10 rounded">
                                        </div>
                                        <img src="{{ asset($image)}}" alt="Evidencia Inicial"
                                            class="w-full h-full object-cover rounded relative z-0"
                                            data-bs-toggle="modal" data-bs-target="#imageModal">
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <p>No hay evidencia inicial.</p>
                                @endif
                            </div>
                        </div>
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
</style>



@if($denouncement->status == "Terminada" || $denouncement->status == "Cerrada")
<div class="card shadow-none border p-0">
    <div class="card-header pb-1 pt-3 bg-light ">
        <div class="pagetitle ">
            <h3 class="fs-6 fw-normal">Evidencia Final</h3>
        </div>
    </div>
    <div class="card-body p-md-4 pt-3 ">
        <div class="d-flex flex-row p-0 m-0">
            @if(!empty($finalImagePaths))
            @foreach($finalImagePaths as $imagen)
            <div class="m-0 pe-3 mt-sm-3 mt-md-0 position-relative" style="margin-right: 10px;">
                <a href="{{ $imagen }}" download class="btn btn-dark m-2 position-absolute"><i
                        class="bi bi-download"></i> </a>
                <img src="{{ $imagen }}" alt="Evidencia Inicial" style="height: 200px;" class="rounded-3 "
                    data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImageModal('{{ $imagen }}')">
            </div>
            @endforeach
            @else
            <p>No hay evidencia inicial.</p>
            @endif
        </div>
    </div>
</div>
@endif
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
