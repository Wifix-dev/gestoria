@extends('components.layout')

@section('title', 'Detalle de la Denuncia')

@section('content')
@if(session('success'))
<div>{{ session('success') }}</div>
@endif
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

#preview {
    border-radius: 10px;
    scrollbar-width: thin;
    scrollbar-color: #ccc #f1f1f1;
}
</style>

<div class="section  pt-4 px-0 px-md-2">
    <div class="px-4 px-md-5 d-flex justify-content-between">
        <div class="my-auto flex">
            <h6 class=" fw-bold text-uppercase my-auto">Crear solicitud</h6>
            <nav class="my-auto flex">
                <ol class="breadcrumb my-auto">
                    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="#">Denuncia</a></li>
                    <li class="breadcrumb-item active">{{ $denouncement->id }}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="m-0 px-sm-0 px-md-2">
    <section class="section pb-md-3 px-4 px-md-5 pt-4">
        @if ($denouncement->status == "Rechazada")
        <div class="row">
            <div class="alert alert-danger mx-0" role="alert">
                Su solicitud ha sido rechazada verifique los comentarios al final de la pagina.
            </div>
        </div>
        @elseif($denouncement->status == "Terminada")
        <div class="row">
            <div class="alert alert-info  mx-0" role="alert">
                Pendiente a comentarios finales y agradecimientos adicionales.
            </div>
        </div>
        @elseif($denouncement->status == "Cerrada")
            <div class="row">
                <div class="alert alert-primary" role="alert">
                    La peticion ha sido atendida
                </div>
            </div>
        @endif
        <div class="row ">
            <div class="col-lg-5 pr-md-2">
                <div class="row">
                    <div class="card shadow-sm p-0 border m-0 rounded-0 rounded-top ">
                        <div class="card-header pb-1 pt-3 bg-light ">
                            <div class="pagetitle ">
                                <h3 class="fs-6 fw-bold text-uppercase">Estado de la Denuncia</h3>
                            </div>
                        </div>
                        <div class="card-body p-4 pt-3">
                            <div class="row pt-1 pb-3">
                                <div class="col-sm-12">
                                    <ol class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-light text-secondary ">
                                                    En espera a revisión
                                                </div>
                                            </div>
                                            <span class="text-muted fs-6">
                                                @switch($denouncement->status)
                                                @case('En espera')
                                                <span class="text-secondary"><i class="bi bi-hourglass-split me-1"></i>
                                                    En espera</span>
                                                @break

                                                @case('Revisada')
                                                @default
                                                <span class="text-success"><i class="bi bi-patch-check-fill me-1"></i>
                                                    Revisada</span>
                                                @endswitch
                                            </span>

                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-light text-secondary">Recepcion de solicitud</div>
                                            </div>
                                            <span class="text-muted">
                                                @switch($denouncement->status)
                                                @case('Revisada')
                                                <span class="text-secondary"><i class="bi bi-hourglass-split me-1"></i>
                                                    En espera</span>
                                                @break

                                                @case('Aceptada')
                                                @case('En proceso')
                                                @case('Terminada')
                                                @case('Pendiente a comentarios')
                                                @case('Cerrada')
                                                <span class="text-success"><i class="bi bi-patch-check-fill me-2"></i>
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
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-light text-secondary">Solucion</div>
                                            </div>
                                            <span class="text-muted">
                                                @switch($denouncement->status)
                                                @case('Terminada')
                                                @case('Pendiente a comentarios')
                                                @case('Cerrada')
                                                <span class="text-success"><i class="bi bi-patch-check-fill me-2"></i>
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
                </div>
                <div class="row" >
                    <div class="card shadow-sm border border-top-0 p-0 mb-3 rounded-0 rounded-bottom ">
                        <div class="card-header pb-1 pt-3 bg-light ">
                            <div class="pagetitle ">
                                <h3 class="fs-6 fw-bold text-uppercase">Evidencia</h3>
                            </div>
                        </div>
                        <div class="card-body p-md-4 ">
                            <div id="preview"class="d-flex flex-row overflow-auto p-0 m-0">
                                @if(!empty($imagePaths))
                                @foreach($imagePaths as $image)
                                <div class=" m-0 pe-3 mt-sm-3 mt-md-0" style="margin-right: 10px;">
                                    <img src="{{ $image }}" alt="Evidencia Inicial" style="height: 250px;"
                                        class="rounded">
                                </div>
                                @endforeach
                                @else
                                <p>No hay evidencia inicial.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card shadow-sm border p-0 mb-3 rounded ">
                        <div class="card-header pb-1 pt-3 bg-light ">
                            <div class="pagetitle ">
                                <h3 class="fs-6 fw-bold text-uppercase">Contacto</h3>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row g-3 mt-1 text-muted">
                                <div class="col-md-12">
                                    <label for="address" class="form-label">Direccion</label>
                                    <input type="text" class="form-control text-muted disabled" id="address"
                                        name="address" value="{{$contact->address}}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Numero de Telefono</label>
                                    <input type="numeric" class="form-control text-muted disabled" id="phone"
                                        name="phone" value="{{$contact->phone}}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="contact_schedule" class="form-label">Horario de Contacto</label>
                                    <input type="text" class="form-control text-muted disabled" id="contact_schedule"
                                        name="contact_schedule" value="{{$contact->contact_schedule}}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if($denouncement->status=="En espera" || $denouncement->status=="Revisada" ||
                $denouncement->status=="Rechazada")
                <div class="row">
                    <div class="card shadow-sm border p-0 mb-3 rounded ">
                        <div class="card-header pb-1 pt-3 bg-light ">
                            <div class="pagetitle ">
                                <h3 class="fs-6 fw-bold text-uppercase">Acciones</h3>
                            </div>
                        </div>
                        <div class="card-body p-md-4 ">
                            <form id="upload-form" class="" method="POST" action="/denouncements/response">
                                @csrf

                                <div class="row g-3">
                                    <div class="col-md-12 ">
                                        <label for="inputState" class="form-label text-muted mt-3 mt-sm-0">¿Aceptará
                                            esta petición?</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="id" value="{{$denouncement->id}}" hidden>
                                        <select id="inputState" class="form-select text-muted" name="status">
                                            <option selected>Opciones</option>
                                            <option value="En proceso">Sí</option>
                                            <option value="Rechazada">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 " id="conditionalDiv" style="display: none;">
                                        <label for="final_comments" class="form-label text-muted">Razones de
                                            rechazo</label>
                                        <textarea type="text" class="form-control text-muted disabled"
                                            id="final_comments" name="final_comments" style="height:150px;"></textarea>
                                    </div>

                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary rounded-1 w-full mt-sm-2 mt-md-0"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
                @if($denouncement->status == "En proceso")
                <form id="upload-form" class="" method="POST" action="/denouncements/update"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row ">
                        <div class="card shadow-sm border p-0 rounded ">
                            <div class="card-header pb-1 pt-3 bg-light ">
                                <div class="pagetitle ">
                                    <h3 class="fs-6 fw-bold text-uppercase">Evidencia Final</h3>
                                </div>
                            </div>
                            <div class="card-body p-md-4 ">
                                <div class="row ">
                                    <x-label for="final_evidence"
                                        class="col-sm-2 col-form-label fs-6 fw-normal text-muted"
                                        :value="__('Evidencia')" />
                                    <div class="col-md-10">
                                        <div id=""
                                            class="rounded-3 d-flex justify-content-between align-items-center p-3 border"
                                            style=" background:#f8f9fa;">
                                            <p class="my-auto text-muted" style="">Subir evidencia final del caso.</p>
                                            <div class="">
                                                <input class="form-control" type="text" value="{{$denouncement->id}}"
                                                    name="id" hidden>
                                                <input class="form-control" type="file" id="final_evidence"
                                                    name="final_evidence[]" multiple accept="image/*" hidden>
                                                <a id="btn-logo-img" class="btn btn-primary">
                                                    Explorar
                                                </a>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-100 d-flex overflow-auto" id="preview"
                                            style="width: 500px; height:120px"></div>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-end">
                                    <button type="submit" class="btn btn-dark rounded-1" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">Guardar Evidencia</>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                @endif
                @if($denouncement->status == "Terminada" || $denouncement->status == "Cerrada")
                <div class="row">
                    <div class="card shadow-sm border p-0">
                        <div class="card-header pb-1 pt-3 bg-light ">
                            <div class="pagetitle ">
                                <h3 class="fs-6 fw-bold text-uppercase">Evidencia Final</h3>
                            </div>
                        </div>
                        <div class="card-body p-md-4 ">
                            <div class="d-flex flex-row overflow-auto p-0 m-0">
                                @if(!empty($finalImagePaths))
                                @foreach($finalImagePaths as $imagen)
                                <div class=" m-0 pe-3 mt-sm-3 mt-md-0" style="margin-right: 10px;">
                                    <img src="{{ $imagen }}" alt="Evidencia Inicial" style="height: 250px;"
                                        class="rounded">
                                </div>
                                @endforeach
                                @else
                                <p>No hay evidencia inicial.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-lg-7 ps-xl-4 ">
                <div class="row p-0 ">
                    <div class="card shadow-sm p-0 border m-0 rounded-0 rounded-top  ">
                        <div class="card-header pb-1 pt-3 bg-light ">
                            <div class="pagetitle ">
                                <h3 class="fs-6 fw-bold text-uppercase">Denuncia</h3>
                            </div>
                        </div>
                        <div class="card-body p-4 pt-3">
                            <div class="row pt-1 pb-3 mx-auto">
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
                            <p class="text-center pt-1 fw-bold">{{$denouncement->case_name}}</p>
                            <div class="row">
                                <div class="col-12">
                                    <p class="pt-3 ms-md-3">Me dirijo a usted para solicitar su apoyo y asistencia en:
                                    </p>
                                    <div class="col-12">
                                        <div class="px-md-3 ">
                                            <div id="quill-editor" class="quill-editor-default rounded-bottom"
                                                style="height:250px;" disabled>
                                                {!! $denouncement->description !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-0">
                                <div class="col-12">
                                    <p class="pt-3 ms-md-3">Agradezco su consideracion y cualquier apoyo que me pueda
                                        brindar.
                                        Estoy disponible para discutir esta solicitud con mas detalladamente y para
                                        cualquier informacion adiconal que requiera
                                    </p>
                                    <div class="col-12">
                                        <div class="px-md-3 ">
                                            <div class=" rounded-bottom text-capitalize" style="height:200px;">
                                                <p class="fw-bold">Atentamente</p>
                                                {{$nombre}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if(($denouncement->status=="Terminada" || $denouncement->status=="Cerrada") && $denouncement->final_comments != '')
                <div class="row pt-4">
                    <div class="card shadow-sm border p-0 rounded ">
                        <div class="card-header pb-1 pt-3 bg-light ">
                            <div class="pagetitle ">
                                <h3 class="fs-6 fw-bold text-uppercase">Comentarios Finales.</h3>
                            </div>
                        </div>
                        <div class="card-body p-md-4 ">
                                <div class="row g-3">
                                    <input class="form-control" type="text" value="{{$denouncement->id}}" name="id"
                                        hidden>
                                    <div class="col-md-12 ">
                                        <textarea type="text" class="form-control text-muted disabled"
                                            id="final_comments" name="final_comments" style="height:150px;"
                                            disabled>{{$denouncement->final_comments}}</textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
            </div>
    </section>
</div>

<script>
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
        div.style.display = 'block';
    } else {
        div.style.display = 'none';
    }
});
</script>
@endsection
