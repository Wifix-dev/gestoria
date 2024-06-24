@extends('components.user')

@section('title', 'Detalle de la Denuncia')

@section('content')

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
    text:#000 !important;
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
	float:right;
}
nav ul ul {
	background: rgba(0, 0, 0, 0.2);
}
nav ul li ul li a {

	border-left: 4px solid transparent;
	padding: 10px 20px;
}

nav ul li:hover {
    border:1px solid #9ec5fe;
    background:rgba(207, 226, 255,.7);
    border-radius:5px;
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
            <div class="col-lg-3 p-lg-0 p-0 pb-4">
                <nav class='animated bounceInDown bg-white rounded-1 border text-dark p-2'>
                    <ul>
                        <li><a class=" fs-6" href='#profile'>Crear Denuncia</a></li>
                        <li><a class=" fs-6"  href='#message'>Mis Denuncias</a></li>
                        <li><a class=" fs-6"  href='#message'>Logout</a></li>
                    </ul>
                </nav>
            </div>
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
                                                    @switch($denouncement->status)
                                                    @case('En espera')
                                                    <span class="text-secondary"><i
                                                            class="bi bi-hourglass-split me-1"></i>
                                                        En espera</span>
                                                    @break

                                                    @case('Revisada')
                                                    @default
                                                    <span class="text-success"><i
                                                            class="bi bi-patch-check-fill me-1"></i>
                                                        Revisada</span>
                                                    @endswitch
                                                </span>

                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-light text-secondary">Recepcion de solicitud</div>
                                                </div>
                                                <span class="text-muted">
                                                    @switch($denouncement->status)
                                                    @case('Revisada')
                                                    <span class="text-secondary"><i
                                                            class="bi bi-hourglass-split me-1"></i>
                                                        En espera</span>
                                                    @break

                                                    @case('Aceptada')
                                                    @case('En proceso')
                                                    @case('Terminada')
                                                    @case('Pendiente a comentarios')
                                                    @case('Cerrada')
                                                    <span class="text-success"><i
                                                            class="bi bi-patch-check-fill me-2"></i>
                                                        Aceptada</span>
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
                                        <a href="{{ $image }}" download class="btn btn-dark m-2 position-absolute"><i
                                                class="bi bi-download"></i> </a>
                                        <img src="{{ $image }}" alt="Evidencia Inicial" style="height: 200px;"
                                            class="rounded-3 " data-bs-toggle="modal" data-bs-target="#imageModal"
                                            onclick="showImageModal('{{ $image }}')">
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
$(".sub-menu a").click(function () {
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
