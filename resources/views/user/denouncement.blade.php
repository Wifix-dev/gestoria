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
</style>
<div class="  py-4 px-4 px-md-5 bg-white shadow-sm">
    <div class=" px-md-5 d-flex justify-content-between">
        <div class="my-auto flex">
            <h6 class=" fw-bold text-uppercase my-auto">Detalle de la Denuncia.</h6>
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
<div class="m-0 px-sm-0 px-md-5">
    <section class="section pb-md-3 px-4 px-md-5 pt-4">
        <div class="row ">
            <div class="col-lg-5 pr-md-2 ">
                <div class="row p-0">
                    <div class="card shadow-sm p-0 border m-0 rounded-0 rounded-top ">
                        <div class="card-header pb-1 pt-3 bg-light ">
                            <div class="pagetitle ">
                                <h3 class="fs-6 fw-bold text-uppercase">Estado de la Denuncia</h3>
                            </div>
                        </div>
                        <div class="card-body p-4 pt-3">
                            <div class="row pt-1 pb-3">
                                <span class="col-sm-3 col-form-label fs-6 fw-normal text-muted">Estado</span>
                                <div class="col-sm-9">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="false" aria-controls="collapseOne">
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is
                                                    shown by default, until the collapse plugin adds the appropriate
                                                    classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS
                                                    transitions. You can modify any of this with custom CSS or
                                                    overriding our default variables. It's also worth noting that just
                                                    about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Accordion Item #2
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the second item's accordion body.</strong> It is
                                                    hidden by default, until the collapse plugin adds the appropriate
                                                    classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS
                                                    transitions. You can modify any of this with custom CSS or
                                                    overriding our default variables. It's also worth noting that just
                                                    about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Accordion Item #3
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the third item's accordion body.</strong> It is
                                                    hidden by default, until the collapse plugin adds the appropriate
                                                    classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS
                                                    transitions. You can modify any of this with custom CSS or
                                                    overriding our default variables. It's also worth noting that just
                                                    about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card shadow-sm border border-top-0 p-0 rounded-0 rounded-bottom ">
                        <div class="card-header pb-1 pt-3 bg-light ">
                            <div class="pagetitle ">
                                <h3 class="fs-6 fw-bold text-uppercase">Evidencia</h3>
                            </div>
                        </div>
                        <div class="card-body p-md-4 ">
                            <div class="row ">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 ps-xl-5">
                <div class="row p-0 ">
                    <div class="card shadow-sm p-0 border m-0 rounded-0 rounded-top ">
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
                            <div class="row pt-2">
                                <div class="col-12">
                                    <p class="pt-3 ms-md-3">Me dirijo a usted para solicitar su apoyo y asistencia en:
                                    </p>
                                    <div class="col-12">
                                        <div class="px-md-3 ">
                                            <div id="quill-editor" class="quill-editor-default rounded-bottom" style="height:250px;" disabled>
                                                {!! $denouncement->description !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-0">
                                <div class="col-12">
                                    <p class="pt-3 ms-md-3">Agradezco su consideracion y cualquier apoyo que me pueda brindar.
                                        Estoy disponible para discutir esta solicitud con mas detalladamente y para cualquier informacion adiconal que requiera
                                    </p>
                                    <div class="col-12">
                                        <div class="px-md-3 ">
                                            <div id="quill-editor" class="quill-editor-default rounded-bottom" style="height:250px;" disabled>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card shadow-sm border border-top-0 p-0 rounded-0 rounded-bottom ">


                    </div>
                </div>
            </div>
    </section>
</div>

<h1>Detalle de la Denuncia</h1>

<div>
    <p><strong>ID:</strong> {{ $denouncement->id }}</p>

    <p><strong>Descripción:</strong> </p>
    <p><strong>Tipo de Denuncia:</strong> {{ $denouncement->id_type_denouncement }}</p>
    @if(!empty($imagePaths))
    @foreach($imagePaths as $image)
    <img src="{{ $image }}" alt="Evidencia Inicial" style="max-width: 100%; height: auto;">
    @endforeach
    @else
    <p>No hay evidencia inicial.</p>
    @endif

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
</script>
@endsection
