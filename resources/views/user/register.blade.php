@extends('components.user')

@section('title', 'Detalle de la Denuncia')

@section('content')
<div class="bg-gray-200 dark:bg-gray-800">
    <div class="container flex items-center px-6 py-4 mx-auto overflow-x-auto whitespace-nowrap">
        <a href="#" class="text-gray-600 dark:text-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
        </a>

        <span class="mx-5 text-gray-500 dark:text-gray-300 rtl:-scale-x-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
        </span>

        <a href="#" class="flex items-center text-gray-600 -px-2 dark:text-gray-200 hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>

            <span class="mx-2">Account</span>
        </a>

        <span class="mx-5 text-gray-500 dark:text-gray-300 rtl:-scale-x-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
        </span>

        <a href="#" class="flex items-center text-gray-600 -px-2 dark:text-gray-200 hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
            </svg>

            <span class="mx-2">Profile</span>
        </a>

        <span class="mx-5 text-gray-500 dark:text-gray-300 rtl:-scale-x-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
        </span>

        <a href="#" class="flex items-center text-blue-600 -px-2 dark:text-blue-400 hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>

            <span class="mx-2">Settings</span>
        </a>
    </div>
</div>
<form id="upload-form" class="" method="POST" action="/denouncement/save" enctype="multipart/form-data">
    @csrf
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class=" d-flex justify-content-between">
                <div class="">
                    <nav aria-label="breadcrumb" class="-mb-2">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item "><a class="text-dark" href="index.html">Inicio</a></li>

                            <li class="breadcrumb-item active text-white" aria-current="page">Denuncia</li>
                        </ol>
                    </nav>
                    <h2 class="text-white ">Crear Solicitud</h2>
                </div>
                <div class="my-auto">
                    <a href="/dashboard" class="btn btn-link text-decoration-none rounded-1 text-dark">Atras</a>
                    <a type="button" class="btn btn-dark rounded-2" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Enviar</a>
                </div>
            </div>
        </div>
    </header>
    <style>
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
                    <div class="col-lg-3 p-lg-0 p-0 pb-4">
                        <nav class='animated bounceInDown bg-white rounded-1 border text-dark p-2'>
                            <ul>
                                <li><a class=" fs-6" href='#profile'>Crear Denuncia</a></li>
                                <li><a class=" fs-6" href='#message'>Mis Denuncias</a></li>
                                <li><a class=" fs-6" href='#message'>Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-9 p-0 ps-0 ps-lg-3">
                        <div class="card shadow-none border">
                            <div class="card-header bg-light"><span class="pagetitle fs-5 ">Peticion o
                                    Denuncia.</span></div>
                            <div class="card-body pt-4">
                                <div class="card shadow-none p-0 mb-3 rounded bg-light">
                                    <div class="card-header pb-1 pt-3 bg-light border-0 ">
                                        <div class="pagetitle ">
                                            <h3 class="fs-6 fw-normal">Informacion de la denuncia.</h3>
                                        </div>
                                    </div>
                                    <div class="card-body p-lg-4 pt-3 ">
                                        <div class="row pt-1 pb-3">
                                            <x-label for="case_name"
                                                class="col-sm-3 col-form-label fs-6 fw-normal text-muted"
                                                :value="__('Asunto')" />
                                            <div class="col-sm-9">
                                                <input id="case_name" class="form-control text-muted bg-light "
                                                    aria-label="Default select example " name="case_name"
                                                    :value="old('case_name')">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="row pt-1">
                                            <x-label for="id_type_denouncement"
                                                class="col-sm-3 col-form-label fs-6 fw-normal text-muted"
                                                :value="__('Tipo')" />
                                            <div class="col-sm-9">
                                                <select id="id_type_denouncement"
                                                    class="form-select text-muted bg-light "
                                                    aria-label="Default select example " name="id_type_denouncement"
                                                    :value="old('id_type_denouncement')">
                                                    <option selected>Denuncias</option>
                                                    @foreach($list as $option)
                                                    <option value="{{$option->id}}">{{$option->type_service}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
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
                                                            <div id="quill-editor"
                                                                class="relative rounded-bottom border"
                                                                style="height: 250px; background-color:#fff; "></div>
                                                            <textarea class="form-control bg-light"
                                                                placeholder="Descripcion de tu caso" id="description"
                                                                style="height: 320px;" name="description"
                                                                :value="old('description')" hidden></textarea>
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
                                                        <div class=" rounded-bottom text-capitalize"
                                                            style="height:200px;">
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
                                    <div class="card-body ">
                                        <div class="row g-3 mt-1 text-muted">
                                            <div class="col-md-12">
                                                <label for="address" class="form-label">Direccion</label>
                                                <input type="text" class="form-control bg-light" id="address"
                                                    name="address">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="phone" class="form-label">Numero de Telefono</label>
                                                <input type="numeric" class="form-control bg-light" id="phone"
                                                    name="phone">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="contact_schedule" class="form-label">Horario de
                                                    Contacto</label>
                                                <input type="text" class="form-control bg-light" id="contact_schedule"
                                                    name="contact_schedule">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    <div class="modal fade overflow-hidden h-100 position-fixed" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
</form>
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
