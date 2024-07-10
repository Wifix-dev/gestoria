@extends('components.user')

@section('title', 'Detalle de la Denuncia')

@section('content')
<form id="upload-form" class="" method="POST" action="{{ route('denouncement.save') }}" enctype="multipart/form-data">
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

            <span class="mx-5 text-white ">
                /
            </span>

            <a href="#" class="text-white ">
                Denuncia o Peticion
            </a>

            <span class="mx-5 text-white ">
                /
            </span>
            <a href="#" class=" text-blue-400 ">
                Crear
            </a>
        </div>
        <div class="mx-2 lg:mx-0 bg-white p-6 lg:p-12 rounded shadow">
            <div class="relative">

                @csrf
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
                                        <p class="px-6 py-4 text-red-900 font-semibold text-base">Es necesario verificar que los campos estén correctos o que los datos sean precisos.</p>
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
                            <p class="text-lg text-blue-700">Drop files to upload</p>
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
                    <a class="group relative h-12 w-48 overflow-hidden rounded text-lg shadow flex justify-between bg-gray-900 text-white flex transition ease-in-out delay-150 hover:bg-gray-700 "onclick="openModal()">
                        <span class="m-auto">Enviar</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>

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
                        class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancelar</a>
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
