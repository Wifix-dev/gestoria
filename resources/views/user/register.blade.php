@extends('components.user')

@section('title', 'Detalle de la Denuncia')

@section('content')
<form id="upload-form" class="" method="POST" action="{{ route('denouncement.save') }}" enctype="multipart/form-data">
@csrf

<meta name="csrf-token" content="{{ csrf_token() }}">

<header class="bg-gradient-to-l from-blue-500 to-blue-700 py-24 pb-6">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 xl:flex xl:items-center xl:justify-between">
        <div class="min-w-0 flex-1">
            <nav aria-label="breadcrumb">
                <ol class="flex w-full flex-wrap items-center rounded-md bg-blue-gray-50 bg-opacity-60 text-white font-semibold">
                    <li
                        class="flex cursor-pointer items-center font-sans text-sm leading-normal text-blue-gray-900 transition-colors duration-300 hover:text-red-600">
                        <a class="opacity-70" href="#">
                            <span>Inicio</span>
                        </a>
                        <span
                            class="pointer-events-none mx-2 select-none font-sans text-sm leading-normal  antialiased">
                            /
                        </span>
                    </li>
                    <li
                        class="flex cursor-pointer items-center font-sans text-sm leading-normal  antialiased transition-colors duration-300 hover:text-red-600">
                        <a class="opacity-70" href="#">
                            <span> Mis Peticiones</span>
                        </a>
                        <span
                            class="pointer-events-none mx-2 select-none font-sans text-sm font-normal leading-normal  antialiased">
                            /
                        </span>
                    </li>
                    <li
                        class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased transition-colors duration-300 hover:text-red-600">
                        <a class="font-medium text-blue-gray-900 transition-colors hover:text-red-500" href="#">
                            Registro
                        </a>
                    </li>
                </ol>
            </nav>
            <h1 class="mt-2 text-2xl font-bold leading-7 text-white sm:truncate sm:text-3xl sm:tracking-tight">
                Registro de Peticion</h1>
        </div>
        <div class="mt-5 flex xl:mt-0 xl:ml-4">
            <div x-data="Components.listbox({ modelName: 'selected', open: false, selectedIndex: 0, activeIndex: 0, items: [{&quot;name&quot;:&quot;Published&quot;,&quot;description&quot;:&quot;This job posting can be viewed by anyone who has the link.&quot;,&quot;current&quot;:true},{&quot;name&quot;:&quot;Draft&quot;,&quot;description&quot;:&quot;This job posting will no longer be publicly accessible.&quot;,&quot;current&quot;:false}] })"
                x-init="init()" class="sm:ml-3">
                <label id="listbox-label" class="sr-only" @click="$refs.button.focus()"> Change published status
                </label>
                <div class="relative">
                    <div class="inline-flex rounded-md shadow-sm">
                        <a  onclick="openModal()"
                                class="inline-flex cursor-pointer  items-center rounded-md border border-transparent bg-slate-950 hover:bg-slate-900 py-2 pl-3 pr-4 text-white shadow-sm">
                                <svg class="h-5 w-5" x-description="Heroicon name: mini/check"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p x-text="selected.name" class="ml-2.5 text-sm font-medium">Guardar</p>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="w-full max-w-7xl relative  mx-auto z-0 inset-x-0 top-0 pb-12">
    <div class="mx-2 lg:mx-0 p-4 lg:p-8 ">
        <div class="relative">
            <div class="flex flex-col space-y-3 lg:space-y-0 lg:grid lg:gap-4 lg:grid-cols-2">
                @if ($errors->any())
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
                                    <p class="px-6 py-4 text-red-900 font-semibold text-base">Es necesario verificar
                                        que los campos estén correctos o que los datos sean precisos.</p>
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
                @endif

                <h3 class="text-xl font-semibold leading-7 text-gray-900 col-span-2">Informacion de la peticion</h3>

                <div>
                    <x-label for="case_name" class="block text-sm font-medium text-gray-700" :value="__('Asunto')" />
                    <input id="case_name" class="mt-1 p-2 w-full border rounded-md "
                        aria-label="Default select example " name="case_name" :value="old('case_name')"></input>
                </div>
                <div>
                    <x-label for="id_type_denouncement" class="block text-sm font-medium text-gray-700"
                        :value="__('Tipo de peticion')" />
                    <div class="relative">
                        <select id="id_type_denouncement" name="id_type_denouncement"
                            class="mt-1 p-2 w-full border rounded-md appearance-none cursor-pointer "
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
                <h3 class="text-xl font-semibold leading-7 text-gray-900 col-span-2">Informacion de Contacto</h3>
                <div class="">
                    <x-label for="address" class="block text-sm font-medium text-gray-700"
                        :value="__('Codigo Postal')" />
                    <div class="relative group mt-1 ">
                        <button type="button" id="dropdown-button"
                            class="inline-flex justify-between w-full px-4 py-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-0 focus:ring-offset-gray-100 focus:ring-black">
                            <span class="mr-2">Seleccionar</span>
                            <svg class="pointer-events-none absolute right-3 top-0 h-full w-6 text-gray-400 "
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
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
                    <input id="suburb" class="mt-1 p-2 w-full border rounded-md " aria-label="Default select example "
                        name="suburb" :value="old('suburb')" disabled></input>
                </div>
                <div class="lg:col-span-2">
                    <x-label for="address" class="block text-sm font-medium text-gray-700" :value="__('Direccion')" />
                    <input id="address" class="mt-1 p-2 w-full border rounded-md " aria-label="Default select example "
                        name="address" :value="old('address')"></input>
                </div>
                <div>
                    <x-label for="phone" class="block text-sm font-medium text-gray-700" :value="__('Telefono')" />
                    <input id="phone" class="mt-1 p-2 w-full border rounded-md " aria-label="Default select example "
                        name="phone" :value="old('phone')"></input>
                </div>
                <div>
                    <x-label for="contact_schedule" class="block text-sm font-medium text-gray-700"
                        :value="__('Horario de contacto')" />
                    <input id="contact_schedule" class="mt-1 p-2 w-full border rounded-md "
                        aria-label="Default select example " name="contact_schedule"
                        :value="old('contact_schedule')"></input>
                </div>
                <h3 class="text-xl font-semibold leading-7 text-gray-900 col-span-2">Evidencia</h3>
                <div class="lg:col-span-2">
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
                            <p class="text-lg text-blue-700">Soltar archivos para subir</p>
                        </div>
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
                                    class="mt-2 rounded px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none cursor-pointer " >
                                    Cargar un archivo
                                </a>
                            </header>

                            <h1 class="pt-8 pb-3 font-semibold sm:text-sm text-gray-700">
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
                <div class="flex justify-center pt-3 lg:justify-end col-span-2">

                </div>
            </div>
        </div>
    </div>
</div>
<script>
// JavaScript to toggle the dropdown
const dropdownButton = document.getElementById('dropdown-button');
const dropdownMenu = document.getElementById('dropdown-menu');
const searchInput = document.getElementById('search-input');
let isOpen = false;
let suburb = document.getElementById('suburb');
let id = document.getElementById('id');

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
        url: '{{route('user.search.cp')}}',
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



<div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
    style="background: rgba(0,0,0,.7);">
    <div
        class="border border-black shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-end items-center pb-3">
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
            <div class="mb-5 text-center">
                <p>¿Estás seguro de que deseas enviar tu denuncia o petición? Ten en cuenta que no podrás realizar
                    cambios después de esto.</p>
            </div>
            <!--Footer-->
            <div class="flex justify-center pt-2">
                <a
                    class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg cursor-pointer  text-black hover:bg-gray-300">Cancelar</a>
                <button
                    class="focus:outline-none px-4 bg-slate-950 p-3 ml-3 rounded-lg text-white hover:bg-slate-900">Confirmar</button>
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

const openModal = () => {
    modal.classList.remove('fadeOut');
    modal.classList.add('fadeIn');
    modal.style.display = 'flex';
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
</form>

@endsection
