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
            <div class="flex flex-col space-y-3 lg:space-y-0 lg:grid lg:gap-4 lg:grid-cols-3">
                <!-- component -->
                <!-- Created By Joker Banny -->
                <div class="flex items-center justify-center bg-white px-6     relative">
                    <div class="space-y-5 border-l-2 border-dashed sticky top-0">
                        <div class="relative w-full">
                            <p class="ml-6 text-base font-semibold">En espera a revision</p>
                            @switch($denouncement->status)
                            @case('En espera')
                            <div class="relative w-full">
                                <span
                                    class="absolute -top-0.5 z-10 -ml-3.5 h-9 w-9 text-2xl rounded-full text-gray-500">
                                    <i class="bi bi-hourglass-split"></i>
                                </span>
                                <div class="ml-6">
                                    <h4 class="text-md text-gray-500">Pendiente</h4>
                                </div>
                            </div>
                            @break
                            @case('Revisada')
                            @default
                            <div class="relative w-full">
                                <span
                                    class="absolute -top-0.5 z-10 -ml-3.5 h-9 w-9 text-2xl rounded-full text-blue-500">
                                    <i class="bi bi-patch-check-fill"></i>
                                </span>
                                <div class="ml-6">
                                    <h4 class="text-md text-blue-500">Revisada</h4>
                                </div>
                            </div>
                            @endswitch
                        </div>
                        <div class="relative w-full">

                        </div>
                        <div class="relative w-full">
                            <p class="ml-6 text-base font-semibold">Recepcion de solicitud</p>
                            @switch($denouncement->status)
                            @case('Revisada')
                            <div class="relative w-full">
                                <span
                                    class="absolute -top-0.5 z-10 -ml-3.5 h-9 w-9 text-2xl rounded-full text-gray-500">
                                    <i class="bi bi-hourglass-split"></i>
                                </span>
                                <div class="ml-6">
                                    <h4 class="text-md text-gray-500">En espera</h4>
                                </div>
                            </div>
                            @break
                            @case('Aceptada')
                            @case('En proceso')
                            @case('Terminada')
                            @case('Pendiente a comentarios')
                            @case('Cerrada')
                            <div class="relative w-full">

                                <span
                                    class="absolute -top-0.5 z-10 -ml-3.5 h-9 w-9 text-2xl rounded-full text-blue-500">
                                    <i class="bi bi-patch-check-fill "></i>
                                </span>
                                <div class="ml-6">
                                    <h4 class="text-md text-blue-500">Aceptada</h4>
                                </div>
                            </div>
                            @break
                            @case('Rechazada')
                            <div class="relative w-full">

                                <span class="absolute -top-0.5 z-10 -ml-3.5 h-9 w-9 text-2xl rounded-full text-red-500">
                                    <i class="bi bi-clipboard-x"></i>
                                </span>
                                <div class="ml-6">
                                    <h4 class="text-md text-red-500">Rechazada</h4>
                                </div>
                            </div>
                            @break
                            @default
                            <div class="relative w-full">
                                <span
                                    class="absolute -top-0.5 z-10 -ml-3.5 h-9 w-9 text-2xl rounded-full text-gray-500">
                                    <i class="bi bi-square"></i>
                                </span>
                                <div class="ml-6">
                                    <h4 class="text-md text-gray-500">Pendiente</h4>
                                </div>
                            </div>
                            @endswitch
                        </div>
                        <div class="relative w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="absolute -top-0.5 z-10 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="ml-6">
                                <h4 class="font-bold text-blue-500">Lead Ui/Ux Designer.</h4>
                            </div>
                        </div>
                        <div class="relative w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="absolute -top-0.5 z-10 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="ml-6">
                                <h4 class="font-bold text-blue-500">Lead Ui/Ux Designer.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.ql-toolbar {
    background: #f8f9fa;
    border: 1px solid rgba(0, 0, 0, .125) !important;
    border-bottom: 0px !important;
    border-radius: .25rem .25rem 0 0;
}

.ql-editor {
    font-size: 16px !important;
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
}

#preview::-webkit-scrollbar-thumb {
    background-color: #ccc;
    border-radius: 10px;
}

#preview::-webkit-scrollbar-track {
    border-radius: 10px;
    background-color: #f1f1f1;
}

#preview {
    border-radius: 10px;
    scrollbar-width: thin;
    scrollbar-color: #ccc #f1f1f1;
}

#parallelogram {
    width: 150px;
    height: 100px;
    -webkit-transform: skew(20deg);
    -moz-transform: skew(20deg);
    -o-transform: skew(20deg);
    background: red;
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

<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class=" d-flex justify-content-between">
            <div class="">
                <nav aria-label="breadcrumb" class="-mb-2 bg-transparent">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item "><a class="text-dark" href="#">Inicio</a></li>
                        <li class="breadcrumb-item " aria-current="page"><a class="text-dark" href="#">Denuncia</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $denouncement->id }}</li>
                    </ol>
                </nav>
                <h2 class="text-white ">Detalle de la solicitud</h2>
            </div>
        </div>
    </div>
</header>
<div class="container px-0 px-lg-0 pb-0 ">
    <section class="section pb-0 px-3 pt-4">
        @if ($denouncement->status == "Rechazada")
        <div class="row">
            <div class="alert alert-danger" role="alert">
                Su solicitud ha sido rechazada verifique los comentarios al final de la pagina.
            </div>
        </div>
        @elseif($denouncement->status == "Terminada")
        <div class="row">
            <div class="alert alert-info" role="alert">
                Pendiente a comentarios finales y agradecimientos adicionales.
            </div>
        </div>
        @elseif($denouncement->status == "Cerrada")
        <div class="row">
            <div class="alert alert-primary" role="alert">
                Su peticion ha sido cumplida
            </div>
        </div>
        @elseif(session('success'))
        <div class="alert alert-primary" role="alert">{{ session('success') }}</div>
        @endif
    </section>
</div>
<div class="container px-0 ">
    <section class="section pb-md-3 px-3">
        <div class="row p-0">
            <div class="col-lg-9 p-0 ps-0 ps-lg-3">
                @if($denouncement->status=="Terminada" || $denouncement->status=="Cerrada")
                <div class="card shadow-none border p-0 rounded ">
                    <div class="card-header pb-1 pt-3 bg-light ">
                        <div class="pagetitle ">
                            <h3 class="fs-6 fw-normal ">Comentarios Finales.</h3>
                        </div>
                    </div>
                    <div class="card-body p-md-4 p-3">
                        <form id="upload-form" class="" method="POST" action="/denouncement/close">
                            @csrf

                            <div class="row g-3">
                                <input class="form-control" type="text" value="{{$denouncement->id}}" name="id" hidden>
                                <div class="col-md-12 ">
                                    @if($denouncement->status=="Cerrada" && $denouncement->final_comments!="")

                                    <textarea type="text" class="form-control text-muted disabled" id="final_comments"
                                        name="final_comments" style="height:150px;"
                                        disabled>{{$denouncement->final_comments}}</textarea>
                                    @else
                                    <textarea type="text" class="form-control text-muted disabled" id="final_comments"
                                        name="final_comments" style="height:150px;"></textarea>
                                    @endif
                                </div>
                                @if($denouncement->status!="Cerrada")

                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary rounded-1 w-full mt-sm-2 mt-md-0"
                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">Enviar</button>
                                </div>
                                @endif

                            </div>
                        </form>
                    </div>
                </div>
                @endif
                @if ($denouncement->status == "Rechazada")
                <div class="card shadow-sm border p-0 rounded shadow-none ">
                    <div class="card-header pb-1 pt-3 bg-light ">
                        <div class="pagetitle ">
                            <h3 class="fs-6 fw-normal">Comentarios</h3>
                        </div>
                    </div>
                    <div class="card-body p-md-4 ">
                        <div class="row g-3">
                            <div class="col-md-12 " id="conditionalDiv">
                                <label for="final_comments" class="form-label text-muted">Razones de
                                    rechazo</label>
                                <textarea type="text" class="form-control text-muted disabled bg-light"
                                    id="final_comments" name="final_comments" style="height:100px;"
                                    disabled>{{$denouncement->final_comments}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <div class="card shadow-none border">
                    <div class="card-header bg-light"><span class="pagetitle fs-6 ">Peticion o
                            Denuncia.</span></div>
                    <div class="card-body p-2 p-lg-4">
                        <div class="card shadow-none border-none mb-3 rounded bg-light">
                            <div class="card-header pb-1 pt-3 bg-light border-0 ">
                                <div class="pagetitle ">
                                    <h3 class="fs-6 fw-normal">Estado de la Denuncia</h3>
                                </div>
                            </div>
                            <div class="card-body p-3 pt-3">
                                <div class="row pt-1">
                                    <div class="col-sm-12">
                                        <ol class="list-group">
                                            <li
                                                class="list-group-item d-flex flex-rows justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-light text-secondary ">
                                                        En espera a revisión
                                                    </div>
                                                </div>
                                                <span class="text-muted">

                                                </span>

                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-light text-secondary">Recepcion de solicitud</div>
                                                </div>
                                                <span class="text-muted">

                                                </span>

                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-light text-secondary">Solucion</div>
                                                </div>
                                                <span class="text-muted">
                                                    @switch($denouncement->status)
                                                    @case('Terminada')
                                                    @case('Pendiente a comentarios')
                                                    @case('Cerrada')
                                                    <span class="text-success"><i
                                                            class="bi bi-patch-check-fill me-2"></i>
                                                        Terminada</span>
                                                    @break

                                                    @case('En proceso')
                                                    <span class="text-secondary"><i class="bi bi-gear-fill me-2"></i> En
                                                        proceso</span>
                                                    @break

                                                    @case('Rechazada')
                                                    <span class="text-danger"><i class="bi bi-clipboard-x me-2"></i>
                                                        Rechazada</span>
                                                    @break

                                                    @default
                                                    <span class="text-secondary"><i class="bi bi-square me-2"></i>
                                                        Pendiente</span>
                                                    @endswitch
                                                </span>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-sm p-0 mb-3  rounded-0 ">
                            <div class="decorations"></div>
                            <div class="card-body p-4 pt-3">
                                <div class="row pt-1 pb-3 mx-auto position-relative">
                                    <div class="col-6 col-md-4 px-0"><img class="w-100"
                                            src="{{asset('storage/rsc/cnt.png')}}"></img></div>
                                    <div class="col-6 col-md-8 d-flex justify-content-end px-0"><span
                                            class="fw-light mt-md-3 fs-6">H. Matamoros Tamaulipas a
                                            {{$denouncement->created_at->format('Y-m-d')}}</span></div>
                                </div>
                                <div class="row pt-1 pb-3">
                                    <div class="col-12 pt-3"><span class="pt-5 ms-md-3">A quien corresponda</span></div>
                                    <div class="col-12 "><span class="fw-bold pt-2 ms-md-3">Central Noticias
                                            Tamaulipas</span></div>
                                </div>
                                <p class="text-center pt-1 fw-bold " style="font: size 16px !important; ">
                                    {{$denouncement->case_name}}</p>

                                <div class="row pt-2">
                                    <div class="col-12">
                                        <p class="pt-3 ms-md-3 fs-6">Me dirijo a usted para solicitar su apoyo y
                                            asistencia
                                            en:
                                        </p>
                                        <div class="col-12">
                                            <div class="px-md-3 ">
                                                <div id="quill-editor"
                                                    class="quill-editor-default rounded-bottom fw-normal "
                                                    style="height:250px;   font-size: 40px !important; " disabled>
                                                    {!! $denouncement->description !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-0">
                                    <div class="col-12">
                                        <p class="pt-3 ms-md-3 fs-6">Agradezco su consideracion y cualquier apoyo que me
                                            pueda
                                            brindar.
                                            Estoy disponible para discutir esta solicitud con mas detalladamente y para
                                            cualquier informacion adiconal que requiera
                                        </p>
                                        <div class="col-12">
                                            <div class="px-md-3 ">
                                                <div class=" rounded-bottom text-capitalize" style="height:200px;">
                                                    <p class="fw-bold">Atentamente</p>
                                                    {{Auth::user()->name }} {{Auth::user()->last_name }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="decoration"></div>
                        </div>
                        <div class="card shadow-none border-none mb-3 rounded bg-light">
                            <div class="card-header bg-light border-0">
                                <div class="pagetitle ">
                                    <h3 class="fs-6 fw-normal">Evidencia</h3>
                                </div>
                            </div>
                            <div class="card-body p-3 pt-0">
                                <div id="preview" class="d-flex flex-row overflow-auto m-0 rounded">
                                    @if(!empty($imagePaths))
                                    @foreach($imagePaths as $image)
                                    <div class="m-0 pe-3 mt-sm-3 mt-md-0 position-relative" style="margin-right: 10px;">
                                        <a href="{{ asset($image)}}" download
                                            class="btn btn-dark m-2 position-absolute"><i class="bi bi-download"></i>
                                        </a>
                                        <img src="{{ asset($image)}}" alt="Evidencia Inicial" style="height: 200px;"
                                            class="rounded-3 " data-bs-toggle="modal" data-bs-target="#imageModal"
                                            onclick="showImageModal('{{ asset($image)}}')">
                                    </div>
                                    @endforeach
                                    @else
                                    <p>No hay evidencia inicial.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none border-none rounded bg-light">
                            <div class="card-header bg-light border-0">
                                <div class="pagetitle ">
                                    <h3 class="fs-6 fw-normal">Contacto</h3>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row g-3 pt-0 text-muted">
                                    <div class="col-md-12">
                                        <label for="address" class="form-label">Direccion</label>
                                        <input type="text" class="form-control text-muted" id="address" name="address"
                                            value="{{$contact->address}}" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Numero de Telefono</label>
                                        <input type="numeric" class="form-control text-muted" id="phone" name="phone"
                                            value="{{$contact->phone}}" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="contact_schedule" class="form-label">Horario de Contacto</label>
                                        <input type="text" class="form-control text-muted" id="contact_schedule"
                                            name="contact_schedule" value="{{$contact->contact_schedule}}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <img src="{{ $imagen }}" alt="Evidencia Inicial" style="height: 200px;"
                                    class="rounded-3 " data-bs-toggle="modal" data-bs-target="#imageModal"
                                    onclick="showImageModal('{{ $imagen }}')">
                            </div>
                            @endforeach
                            @else
                            <p>No hay evidencia inicial.</p>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
</div>

<div class="modal fade " id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-1">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="imageModalLabel">Evidencia</h5>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body d-flex justify-content-center ">
                <img id="modalImage" src="" alt="Evidencia Inicial" class="img-fluid rounded">
            </div>
            <div class="modal-footer border-0">
                <a id="down" href="#" download class="btn btn-outline-primary ms-2 p-1 px-2">
                    <i class="bi bi-download"></i><span class="ms-2">Descargar</span>
                </a>
            </div>
        </div>
    </div>
</div>
<script>
function showImageModal(imageSrc) {
    document.getElementById('modalImage').src = imageSrc;
    document.getElementById('down').href = imageSrc;
}
$('.sub-menu ul').hide();
$(".sub-menu a").click(function() {
    $(this).parent(".sub-menu").children("ul").slideToggle("100");
    $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
});
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
</script>
@endsection
