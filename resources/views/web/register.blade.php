@extends('components.user')

@section('title', 'Detalle de la Denuncia')

@section('content')
@if(session('success'))
<div>{{ session('success') }}</div>
@endif
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
.hasImage:hover section {
    background-color: rgba(5, 5, 5, 0.4);
}

.hasImage:hover button:hover {
    background: rgba(5, 5, 5, 0.45);
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

<div class="bg-gradient-to-l from-blue-500 to-blue-700 bg-cover bg-center  items-center ">
    <div class=" py-12 h-full w-full overflow-y-auto ">
        <div class="mx-auto w-full flex flex-col items-center mt-12">
            <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col mt-12 sm:mb-10">
                <h1
                    class="text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl text-center text-white dark:text-white font-black leading-10">
                    Crear <span class="bg-clip-text">Denuncia</span>
                </h1>
                <p class="mt-5 sm:mt-10 lg:w-10/12 text-gray-100 font-normal text-center text-xl">
                </p>
            </div>
        </div>
    </div>
</div>


<div class="w-full max-w-7xl bg-white mt-4 mx-auto z-0 top-0 pb-12  relative ">

<div class="w-full ">
    <div class=" space-y-2">
        <form id="upload-form" class="" method="POST" action="{{ route('web.save.denouncement') }}" enctype="multipart/form-data">
        @csrf
        <div class="grid  grid-cols-1 lg:grid-cols-2 gap-y-4">

            <div class="bg-white rounded col-span-2">
                <div class="p-6 pb-2">
                    <span class="sm:text-lg text-lg font-bold title-font mb-4 text-gray-600">Informacion del
                        cuidadano</span>
                </div>
                <div class="p-6 pt-0">
                    <div class="grid grid-col-1 lg:grid-cols-3 gap-x-3 gap-y-3">
                        <div>
                            <x-label for="name" class="block text-sm font-medium text-gray-700" :value="__('Nombre')" />
                            <input id="name" class="mt-1 p-2 w-full border rounded-md "
                                aria-label="Default select example " name="name" :value="old('name')"></input>
                        </div>
                        <div class="lg:col-span-2 ">
                            <x-label for="last_name" class="block text-sm font-medium text-gray-700"
                                :value="__('Apellido')" />
                            <input id="last_name" class="mt-1 p-2 w-full border rounded-md "
                                aria-label="Default select example " name="last_name" :value="old('last_name')"></input>
                        </div>
                        <div>
                            <x-label for="phone" class="block text-sm font-medium text-gray-700"
                                :value="__('Telefono')" />
                            <input id="phone" class="mt-1 p-2 w-full border rounded-md "
                                aria-label="Default select example " name="phone" :value="old('phone')"></input>
                        </div>
                        <div>
                            <x-label for="contact_schedule" class="block text-sm font-medium text-gray-700"
                                :value="__('Horario de contacto')" />
                            <input id="contact_schedule" class="mt-1 p-2 w-full border rounded-md "
                                aria-label="Default select example " name="contact_schedule"
                                :value="old('contact_schedule')"></input>
                        </div>
                        <div class="">
                            <x-label for="address" class="block text-sm font-medium text-gray-700"
                                :value="__('Codigo Postal')" />
                            <div class="relative group mt-1 ">
                                <button type="button" id="dropdown-button"
                                    class="inline-flex justify-between w-full px-4 py-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-0 focus:ring-offset-gray-100 focus:ring-black">
                                    <span class="mr-2">Selecionar</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 -mr-1"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M6.293 9.293a1 1 0 011.414 0L10 11.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div id="dropdown-menu"
                                    class="hidden absolute mt-1 w-full right-0 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 p-1 space-y-1 z-10">
                                    <!-- Search input -->
                                    <input id="search-input"
                                        class="block w-full px-4 py-2 text-gray-800 border rounded-md  border-gray-300 focus:outline-none"
                                        type="text" placeholder="Buscar CP" autocomplete="off">
                                    <!-- Dropdown content goes here -->
                                    <div id="results" class="max-h-56 overflow-y-auto">

                                    </div>
                                </div>
                            </div>

                        </div>
                        <input id="id" class="mt-1 p-2 w-full border rounded-md " aria-label="Default select example "
                            name="id" hidden></input>
                        <div>
                            <x-label for="suburb" class="block text-sm font-medium text-gray-700"
                                :value="__('Colonia o Fraccionamiento')" />
                            <input id="suburb" class="mt-1 p-2 w-full border rounded-md "
                                aria-label="Default select example " name="suburb" :value="old('suburb')" disabled></input>
                        </div>
                        <div class="lg:col-span-2">
                            <x-label for="address" class="block text-sm font-medium text-gray-700"
                                :value="__('Calles')" />
                            <input id="address" class="mt-1 p-2 w-full border rounded-md "
                                aria-label="Default select example " name="address" :value="old('address')"></input>
                        </div>

                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg  col-span-2">
                <div class="p-6 pb-2">
                    <span class="sm:text-lg text-lg font-bold title-font mb-4 text-gray-600">Detalles de la
                        petición</span>
                </div>
                <div class="p-6 pt-0 grid grid-cols-1 lg:grid-cols-2 gap-3">
                    <div>
                        <x-label for="case_name" class="block text-sm font-medium text-gray-700"
                            :value="__('Asunto')" />
                        <input id="case_name" class="mt-1 p-2 w-full border rounded-md "
                            aria-label="Default select example " name="case_name" :value="old('case_name')"></input>
                    </div>
                    <div>
                        <x-label for="id_type_denouncement" class="block text-sm font-medium text-gray-700"
                            :value="__('Tipo de peticion')" />
                        <div class="relative">
                            <select id="id_type_denouncement" name="id_type_denouncement"
                                class="mt-1 p-2 w-full border rounded-md appearance-none"
                                aria-label="Default select example">
                                <option value="">Selecciona una opción</option>
                                @foreach($list as $option)
                                <option value="{{ $option->id }}"
                                    {{ old('id_type_denouncement') == $option->id ? 'selected' : '' }}>
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
                    <div class=" lg:col-span-2">
                        <x-label for="quill-editor" class="block text-sm font-medium text-gray-700 mb-1"
                            :value="__('Contenido de la peticion')" />
                        <div id="quill-editor" class=" p-2 w-full border rounded-b-md border-slate-300 "
                            style="height: 250px; background-color:#fff; "></div>
                        <textarea class="form-control bg-light" placeholder="Descripcion de tu caso" id="description"
                            style="height: 320px;" name="description" :value="old('description')" hidden></textarea>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded relative col-span-2">
                <div class="p-6 pb-2">
                    <span class="sm:text-lg text-lg font-bold title-font mb-4 text-gray-600">Evidencia del caso</span>
                </div>
                <div id="overlay"
                    class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
                    <i>
                        <svg class="fill-current w-12 h-12 mb-3 text-blue-700" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479-1.092l4 4h-3v4h-2v-4h-3l4-4z" />
                        </svg>
                    </i>
                    <p class="text-lg text-blue-700">Soltar archivos para subir</p>
                </div>
                <div class="p-6">
                    <article aria-label="File Upload Modal" class="relative h-full flex flex-col "
                        ondrop="dropHandler(event);" ondragover="dragOverHandler(event);"
                        ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">

                        <section class="h-full w-full h-full flex flex-col">
                            <header
                                class="border-dashed border py-12 flex flex-col justify-center items-center rounded-md">
                                <p class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
                                    <span>Arrastra y suelta tus</span>&nbsp;<span> archivos en cualquier lugar
                                        o</span>
                                </p>
                                <input id="hidden-input" type="file" name="initial_evidence[]" multiple accept="image/*"
                                    multiple class="hidden" />
                                <a type="button" id="button"
                                    class="mt-2 rounded px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                                    Cargar un archivo
                                </a>
                            </header>

                            <h1 class="pt-8 pb-3 font-semibold sm:text-lg text-gray-600">
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

                    <template id="file-template">
                        <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                            <article tabindex="0"
                                class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative ">
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
                                class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white ">
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
                                        <button
                                            class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
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
                </div>
            </div>
            <div class="p-6 bg-white rounded relative col-span-2 flex justify-end">
                <button class="px-6 py-3 bg-slate-900 text-white rounded-lg" type="submit" >Confirmar</button>
            </div>
            </div>
        </form>

        <div class="bg-white rounded">
        </div>
    </div>
</div>
</div>
<script src="{{asset('public/js/upload.js')}}"></script>
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
<script>
// JavaScript to toggle the dropdown
const dropdownButton = document.getElementById('dropdown-button');
const dropdownMenu = document.getElementById('dropdown-menu');
const searchInput = document.getElementById('search-input');
let isOpen = false;
let suburb = document.getElementById('suburb');
let id =document.getElementById('id');
function toggleDropdown() {
    isOpen = !isOpen;
    dropdownMenu.classList.toggle('hidden', !isOpen);
}
dropdownButton.addEventListener('click', () => {
    toggleDropdown();
});

let results = document.getElementById('results');

function SelectSuburb(slct, name) {
    id.value = slct;
    suburb.value = name;
    toggleDropdown();
}
searchInput.addEventListener('input', () => {
    const searchTerm = searchInput.value.toLowerCase();
    var parametros = {
        "id": searchTerm,
    };
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: parametros,
        url: '{{route('web.search.cp')}}',
        type: 'post',
        beforeSend: function() {
            console.log("Espera por favor...")
        },
        success: function(response) {
            $("#results").html("");
            response.forEach(element => {
                var item = $(
                    `<a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer rounded-md">
                    ${element.name}
                    <p class="text-gray-500 text-sm -mt-1"> ${element.type_suburb}</p>
                    </a>`
                );

                item.on('click', function(event) {
                    event.preventDefault();
                    SelectSuburb(element.id, element.name);
                });

                $("#results").append(item);
            });
        }
    });
});
</script>
@endsection
