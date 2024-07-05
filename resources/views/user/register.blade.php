@extends('components.user')

@section('title', 'Detalle de la Denuncia')

@section('content')

<div class="h-44 lg:h-48  relative overflow-hidden bg-indigo-950 z-0 ">
    <x-fondo class="max-w-full "></x-fondo>
</div>
<div class="w-full max-w-6xl mt-24 absolute   mx-auto z-10 inset-x-0 top-0">
    <div class="flex items-center pb-6 overflow-x-auto whitespace-nowrap px-5 lg:px-0">
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
        <form id="upload-form" class="" method="POST" action="{{ route('denouncement.save') }}" enctype="multipart/form-data">
            @csrf
            <div class="grid lg:grid-cols-2 gap-4">
                <div>
                    <x-label for="case_name" class="block text-sm font-medium text-gray-700" :value="__('Asunto')" />
                    <input id="case_name" class="mt-1 p-2 w-full border rounded-md "
                        aria-label="Default select example " name="case_name" :value="old('case_name')"></input>
                </div>
                <div>
                    <x-label for="id_type_denouncement" class="block text-sm font-medium text-gray-700"
                        :value="__('Tipo')" />
                    <div class="relative">
                        <select id="id_type_denouncement" name="id_type_denouncement"
                            class="mt-1 p-2 w-full border rounded-md appearance-none"
                            aria-label="Default select example" :value="old('id_type_denouncement')">
                            @foreach($list as $option)
                                <option value="{{$option->id}}">{{$option->type_service}}</option>
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
                <div class="lg:col-span-2">
                    <div id="quill-editor" class=" p-2 w-full border rounded-b-md border-slate-300 "
                        style="height: 250px; background-color:#fff; "></div>
                    <textarea class="form-control bg-light" placeholder="Descripcion de tu caso" id="description"
                        style="height: 320px;" name="description" :value="old('description')" hidden></textarea>
                </div>
                <div class="lg:col-span-2">
                    <x-label for="address" class="block text-sm font-medium text-gray-700" :value="__('Direccion')" />
                    <input id="address" class="mt-1 p-2 w-full border rounded-md " aria-label="Default select example " name="address" :value="old('address')"></input>
                </div>
                <div >
                    <x-label for="phone" class="block text-sm font-medium text-gray-700" :value="__('Telefono')" />
                    <input id="phone" class="mt-1 p-2 w-full border rounded-md " aria-label="Default select example " name="phone" :value="old('phone')"></input>
                </div>
                <div >
                    <x-label for="contact_schedule" class="block text-sm font-medium text-gray-700" :value="__('Horario de contacto')" />
                    <input id="contact_schedule" class="mt-1 p-2 w-full border rounded-md " aria-label="Default select example " name="contact_schedule" :value="old('contact_schedule')"></input>
                </div>
                <div class="lg:col-span-2">
                    <article aria-label="File Upload Modal" class="relative h-full flex flex-col " ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">
                        <div id="overlay" class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
                            <i>
                                <svg class="fill-current w-12 h-12 mb-3 text-blue-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479-1.092l4 4h-3v4h-2v-4h-3l4-4z" />
                                </svg>
                            </i>
                            <p class="text-lg text-blue-700">Drop files to upload</p>
                        </div>
                        <section class="h-full w-full h-full flex flex-col">
                                <header
                                    class="border-dashed border py-12 flex flex-col justify-center items-center rounded-md">
                                    <p class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
                                        <span>Arrastra y suelta tus</span>&nbsp;<span> archivos en cualquier lugar o</span>
                                    </p>
                                    <input id="hidden-input" type="file"  name="initial_evidence[]" multiple accept="image/*" multiple class="hidden" />
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

                            <!-- sticky footer -->
                            <footer class="flex justify-end px-8 pb-8 pt-4">
                                <button id="submit"
                                    class="rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none">
                                    Upload now
                                </button>
                                <button id="cancel"
                                    class="ml-3 rounded-sm px-3 py-1 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                                    Cancel
                                </button>
                            </footer>
                        </article>
                </div>

                <template id="file-template">
                    <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                        <article tabindex="0"
                            class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
                            <img alt="upload preview"
                                class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />

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
                                class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

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

                <button type="submit" class="btn btn-dark rounded-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Enviar</>


            </div>
        </form>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<script>
                const fileTempl = document.getElementById("file-template"),
                    imageTempl = document.getElementById("image-template"),
                    empty = document.getElementById("empty");

                // use to store pre selected files
                let FILES = {};

                // check if file is of type image and prepend the initialied
                // template to the target element
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

                // use to check if a file is being dragged
                const hasFiles = ({
                        dataTransfer: {
                            types = []
                        }
                    }) =>
                    types.indexOf("Files") > -1;

                // use to drag dragenter and dragleave events.
                // this is to know if the outermost parent is dragged over
                // without issues due to drag events on its children
                let counter = 0;

                // reset counter and append file to gallery when file is dropped
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

                // event delegation to caputre delete events
                // fron the waste buckets in the file preview cards
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
                </style>

                <a href="/dashboard" class="btn btn-link text-decoration-none rounded-1 text-dark">Atras</a>
                <a type="button" class="btn btn-dark rounded-2" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">Enviar</a>
<style>
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

#preview {
    width: 500px;
    /* Fija el ancho del contenedor */
    overflow-x: auto;
    /* Asegura que el scroll sea horizontal */
    white-space: nowrap;
    /* Impide el quiebre de línea dentro del contenedor */
}

#preview::-webkit-scrollbar {
    height: 12px;
}

#preview::-webkit-scrollbar-thumb {
    background-color: #ccc;
    border-radius: 10px;
}

#preview::-webkit-scrollbar-track {
    border-radius: 10px;
    background-color: #f1f1f1;
}


.ql-toolbar.ql-snow{
    border-radius: 0.375rem 0.375rem 0 0 !important;
    border-width: 1px !important;
    box-sizing: border-box !important;
    border-style: solid !important;
    border-color: #e5e7eb !important;
}

#quill-editor{
    border-radius: 0 0 0.375rem 0.375rem !important;

    border-width: 1px !important;
    box-sizing: border-box !important;
    border-style: solid !important;
    border-top:0 !important;
    border-color: #e5e7eb !important;
}

#preview {
    border-radius: 10px;
    scrollbar-width: thin;
    scrollbar-color: #ccc #f1f1f1;
}

nav {
    position: relative;
    width: 100%;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    /* Sub Menu */
}

nav ul li a {
    display: block;
    padding: 10px 15px;
    text-decoration: none;
    text: #000 !important;
    -webkit-transition: 0.2s linear;
    -moz-transition: 0.2s linear;
    -ms-transition: 0.2s linear;
    -o-transition: 0.2s linear;
    transition: 0.2s linear;
}

nav ul li a .fa {
    width: 16px;
    text-align: center;
    margin-right: 5px;
    float: right;
}

nav ul ul {
    background: rgba(0, 0, 0, 0.2);
}

nav ul li ul li a {

    border-left: 4px solid transparent;
    padding: 10px 20px;
}

nav ul li:hover {
    border: 1px solid #9ec5fe;
    background: rgba(207, 226, 255, .7);
    border-radius: 5px;
}
</style>

<div class="container px-0 pt-4">
    <section class="section pb-md-3 px-3">
        <div class="row p-0">

            <div class="col-lg-9 p-0 ps-0 ps-lg-3">
                <div class="card shadow-none border">
                    <div class="card-header bg-light"><span class="pagetitle fs-5 ">Peticion o
                            Denuncia.</span></div>
                    <div class="card-body pt-4">

                        <div class="card shadow-sm p-0 mb-3  rounded-0 ">
                            <div class="decorations"></div>

                            <div class="card-body p-3 p-lg-4 pt-3 ">
                                <div class="row pt-1 pb-3 position-relative" style="z-index:0;">
                                    <div class="col-6 col-md-4 px-0 "><img class="w-100"
                                            src="{{asset('storage/rsc/cnt.png')}}"></img></div>
                                    <div class="col-6 col-md-8 d-flex justify-content-end"><span
                                            class="fw-light mt-md-3 fs-6">H. Matamoros Tamaulipas a
                                            <span id="fecha"></span></div>
                                </div>
                                <div class="row pt-1 pb-3 position-relative">
                                    <div class="col-12 pt-3"><span class="pt-5 ms-md-3">A quien
                                            corresponda</span></div>
                                    <div class="col-12 "><span class="fw-bold pt-2 ms-md-3">Central Noticias
                                            Tamaulipas</span></div>
                                </div>
                                <p class="text-center pt-1 fw-bold"></p>
                                <div class="row">
                                    <div class="col-12">
                                        <p class="pt-3 ms-md-3 fs-6">Me dirijo a usted para solicitar su apoyo y
                                            asistencia
                                            en:
                                        </p>
                                        <div class="col-12">
                                            <div class="px-md-3 ">
                                                <div class="outline-primary ">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-0">
                                    <div class="col-12">
                                        <p class="pt-3 ms-md-3 fs-6">Agradezco su consideracion y cualquier
                                            apoyo que me
                                            pueda
                                            brindar.
                                            Estoy disponible para discutir esta solicitud con mas detalladamente
                                            y para
                                            cualquier informacion adiconal que requiera
                                        </p>
                                        <div class="col-12">
                                            <div class="px-md-3 ">
                                                <div class=" rounded-bottom text-capitalize" style="height:200px;">
                                                    <p class="fw-bold">Atentamente</p>
                                                    {{ Auth::user()->name." ". Auth::user()->last_name }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="decoration"></div>
                        </div>
                        <div class="card shadow-none p-0 rounded bg-light">
                            <div class="card-header pb-1 pt-3 bg-light border-0">
                                <div class="pagetitle ">
                                    <h3 class="fs-6 fw-normal">Fotografias</h3>
                                </div>
                            </div>
                            <div class="card-body p-md-4 ">
                                <div class="row ">
                                    <x-label for="initial_evidence"
                                        class="col-sm-3 col-form-label fs-6 fw-normal text-muted"
                                        :value="__('Evidencia')" />
                                    <div class="col-md-9">
                                        <div id=""
                                            class="rounded-3 d-flex justify-content-between align-items-center p-3 border"
                                            style=" background:#f8f9fa;">
                                            <p class="my-auto text-muted" style="">Subir evidencia.</p>
                                            <div class="">
                                                <input class="form-control" type="file" id="initial_evidence"
                                                    name="initial_evidence[]" multiple accept="image/*" hidden>
                                                <a id="btn-logo-img" class="btn btn-primary">
                                                    Explorar
                                                </a>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-100 d-flex overflow-auto" id="preview"
                                            style="width: 500px; height:120px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none p-0 rounded bg-light">
                            <div class="card-header pb-1 pt-3 bg-light ">
                                <div class="pagetitle ">
                                    <h3 class="fs-6 fw-normal">Contacto</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="modal fade overflow-hidden h-100 position-fixed" id="staticBackdrop" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered h-100 position-relative">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <span class="fw-bold">¿Está seguro de que desea enviar su caso?</span><br> Tenga en cuenta que no
                podrá realizar modificaciones posteriormente.
            </div>
            <div class="modal-footer border-0 flex justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Atras</button>
                <button class="btn btn-dark rounded-1" type="submit">Registrar</button>
            </div>
        </div>
    </div>
</div>
<script>
var month = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre',
    'Noviembre', 'Diciembre'
]
var date = new Date()
let fecha = document.getElementById('fecha');
fecha.textContent = date.getDate() + " de " + month[date.getMonth()] + " del " + date.getFullYear();
$(document).ready(function() {
    var selectedFiles = [];

    $("#btn-logo-img").click(function() {
        var subir_btn = document.getElementById("initial_evidence");
        subir_btn.click();
    });

    var quill = new Quill('#quill-editor', {
        theme: 'snow'
    });

    // Al enviar el formulario, sincroniza el contenido del editor Quill con el textarea
    $('#upload-form').on('submit', function() {
        var editorContent = quill.root.innerHTML;
        $('#description').val(editorContent);
    });

    $('#initial_evidence').change(function() {
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
        const input = $('#initial_evidence')[0];
        const dataTransfer = new DataTransfer();
        files.forEach(file => dataTransfer.items.add(file));
        input.files = dataTransfer.files;
    }
});
</script>
@endsection
