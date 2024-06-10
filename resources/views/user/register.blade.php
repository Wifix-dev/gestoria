@component('components.layout')
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
    /* Altura de la barra de desplazamiento horizontal */
}

#preview::-webkit-scrollbar-thumb {
    background-color: #ccc;
    /* Color de la parte draggable de la barra */
    border-radius: 10px;
    /* Bordes redondeados */
}

#preview::-webkit-scrollbar-track {
    border-radius: 10px;
    background-color: #f1f1f1;
    /* Color de la pista */
}

/* Estilo para scrollbar en Firefox */
#preview {
    border-radius: 10px;
    scrollbar-width: thin;
    /* Ancho de la barra de desplazamiento */
    scrollbar-color: #ccc #f1f1f1;
    /* Color de la barra y la pista */
}
</style>
<form class="m-0" method="POST" action="/denouncement/save" enctype="multipart/form-data">
    @csrf
    <div class="pagetitle  py-3 px-4 px-md-5 pb-2">
        <h1 class="fs-3 fw-bold pr-2"><i class="bi bi-flag fs-5 pr-5 pw-bold"></i><span class="px-2">Crear Denuncia</span></h1>
    </div><!-- End Page Title -->

    <section class="section pb-md-3 px-4 px-md-5">

        <div class="row ">
            <div class="col-lg-8 pr-md-2">
                <div class="card p-0 shadow-sm  rounded-3">
                    <div class="card-body border-none p-4  ">
                        <div class="row mb-3">
                            <x-label for="id_type_denouncement" class="col-sm-2 col-form-label" :value="__('Tipo')" />
                            <div class="col-sm-10">
                                <select id="id_type_denouncement" class="form-select text-muted bg-light"
                                    aria-label="Default select example " name="id_type_denouncement"
                                    :value="old('id_type_denouncement')">
                                    <option selected>Denuncias</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-sm-2 col-form-label">Denuncia</label>
                            <div class="col-sm-10">
                                <textarea class="form-control bg-light" placeholder="Descripcion de tu caso"
                                    id="description" style="height: 320px;" name="description"
                                    :value="old('description')"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pl-md-2 ">
                <div class="card shadow-sm rounded-3 " style="height:440px;">
                    <div class="card-body p-0 p-4 ">
                        <div  id="btn-logo-img" class="rounded-3 d-flex btn btn-light justify-content-center align-items-center"
                            style="border:1px dashed #ccc; height:250px;">
                            <div class="text-center">
                                <div class="mt-5">
                                    <input class="form-control" type="file" id="initial_evidence"
                                        name="initial_evidence[]" multiple accept="image/*" hidden>
                                    <a class="">
                                        <svg width="77px" height="77px" viewBox="0 0 24.00 24.00" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"
                                            stroke-width="0.00024000000000000003" transform="matrix(1, 0, 0, 1, 0, 0)">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12 15.75C12.4142 15.75 12.75 15.4142 12.75 15V4.02744L14.4306 5.98809C14.7001 6.30259 15.1736 6.33901 15.4881 6.06944C15.8026 5.79988 15.839 5.3264 15.5694 5.01191L12.5694 1.51191C12.427 1.34567 12.2189 1.25 12 1.25C11.7811 1.25 11.573 1.34567 11.4306 1.51191L8.43056 5.01191C8.16099 5.3264 8.19741 5.79988 8.51191 6.06944C8.8264 6.33901 9.29988 6.30259 9.56944 5.98809L11.25 4.02744L11.25 15C11.25 15.4142 11.5858 15.75 12 15.75Z"
                                                    fill="#1C274C"></path>
                                                <path
                                                    d="M16 9C15.2978 9 14.9467 9 14.6945 9.16851C14.5853 9.24148 14.4915 9.33525 14.4186 9.44446C14.25 9.69667 14.25 10.0478 14.25 10.75L14.25 15C14.25 16.2426 13.2427 17.25 12 17.25C10.7574 17.25 9.75004 16.2426 9.75004 15L9.75004 10.75C9.75004 10.0478 9.75004 9.69664 9.58149 9.4444C9.50854 9.33523 9.41481 9.2415 9.30564 9.16855C9.05341 9 8.70227 9 8 9C5.17157 9 3.75736 9 2.87868 9.87868C2 10.7574 2 12.1714 2 14.9998V15.9998C2 18.8282 2 20.2424 2.87868 21.1211C3.75736 21.9998 5.17157 21.9998 8 21.9998H16C18.8284 21.9998 20.2426 21.9998 21.1213 21.1211C22 20.2424 22 18.8282 22 15.9998V14.9998C22 12.1714 22 10.7574 21.1213 9.87868C20.2426 9 18.8284 9 16 9Z"
                                                    fill="#1C274C"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <p class="text-muted py-1" style="width: 200px;">Sube fotos de tu caso</p>
                            </div>
                        </div>
                        <div class="mt-3 w-100 d-flex overflow-auto" id="preview" style="width: 500px;"></div>
                    </div>
                </div>
                <button class="btn btn-dark" type="submit">Registrar</button>

            </div>
        </div>
    </section>
</form>

<script>
$(document).ready(function() {
    var selectedFiles = [];

    $("#btn-logo-img").click(function() {
        var subir_btn = document.getElementById("initial_evidence");
        subir_btn.click();
    });

    $('#initial_evidence').change(function() {
        // Cuando cambie el input, añade los nuevos archivos seleccionados a la lista existente
        selectedFiles = selectedFiles.concat(Array.from(this.files));
        updatePreview(selectedFiles);
        updateInput(selectedFiles);
    });

    // Función para actualizar la vista previa y mostrar todos los archivos seleccionados
    function updatePreview(files) {
        $('#preview').empty(); // Limpia la vista previa antes de volver a agregar los archivos

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

                const btnRemove = $('<button>').html(`<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256">
<g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M10,2l-1,1h-4c-0.6,0 -1,0.4 -1,1c0,0.6 0.4,1 1,1h2h10h2c0.6,0 1,-0.4 1,-1c0,-0.6 -0.4,-1 -1,-1h-4l-1,-1zM5,7v13c0,1.1 0.9,2 2,2h10c1.1,0 2,-0.9 2,-2v-13zM9,9c0.6,0 1,0.4 1,1v9c0,0.6 -0.4,1 -1,1c-0.6,0 -1,-0.4 -1,-1v-9c0,-0.6 0.4,-1 1,-1zM15,9c0.6,0 1,0.4 1,1v9c0,0.6 -0.4,1 -1,1c-0.6,0 -1,-0.4 -1,-1v-9c0,-0.6 0.4,-1 1,-1z"></path></g></g>
</svg>`).addClass('btn btn-dark position-absolute top-0 start-0 btn-sm m-2').click(function() {
                    // Al hacer clic en el botón de eliminar, elimina el archivo correspondiente de la lista y actualiza la vista previa
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

    // Función para actualizar el input de archivos
    function updateInput(files) {
        const input = $('#initial_evidence')[0]; // Obtén el elemento de input
        const dataTransfer = new DataTransfer();

        files.forEach(file => dataTransfer.items.add(file));
        input.files = dataTransfer.files;
    }
});



</script>
@endcomponent