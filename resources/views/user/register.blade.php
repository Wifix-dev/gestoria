@component('components.layout')
<style>
    #preview {
    width: 500px; /* Fija el ancho del contenedor */
    overflow-x: auto; /* Asegura que el scroll sea horizontal */
    white-space: nowrap; /* Impide el quiebre de línea dentro del contenedor */
}
#preview::-webkit-scrollbar {
            height: 12px; /* Altura de la barra de desplazamiento horizontal */
        }
        #preview::-webkit-scrollbar-thumb {
            background-color: #ccc; /* Color de la parte draggable de la barra */
            border-radius: 10px; /* Bordes redondeados */
        }
        #preview::-webkit-scrollbar-track {
            border-radius: 10px;
            background-color: #f1f1f1; /* Color de la pista */
        }

        /* Estilo para scrollbar en Firefox */
        #preview {
            border-radius: 10px;
            scrollbar-width: thin; /* Ancho de la barra de desplazamiento */
            scrollbar-color: #ccc #f1f1f1; /* Color de la barra y la pista */
        }
</style>
<form method="POST" action="/denouncement/save">
@csrf
<div class="pagetitle px-md-4 bg-white">
    <h1 class="fs-3 fw-bold">Crear Denuncia</h1>
    <nav>
        <ol class="breadcrumb fs-6">
            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
            <li class="breadcrumb-item">Denuncia</li>
            <li class="breadcrumb-item active">Crear</li>
        </ol>
    </nav>
    <button class="btn btn-dark" type="submit">Registrar</button>
</div><!-- End Page Title -->

<section class="section px-md-4 pb-md-3">
    <div class="row ">
    <div class="col-lg-8 pr-md-2">
    <div class="card shadow-sm border ">
            <div class="card-body ">
              <h5 class="card-title fw-bold fs-5">Redacta tu Denuncia</h5>

              <!-- Floating Labels Form -->
              <div class="row g-3">
              <div class="col-md-12">
                  <div class="form-floating">
                  <select id="id_type_denouncement" class="form-select text-muted"
                                    aria-label="Default select example " name="id_type_denouncement" :value="old('id_type_denouncement')">
                                    <option selected>Denuncias</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                    <x-label for="id_type_denouncement" class="col-sm-3 col-form-label" :value="__('Tipo de Denuncias')" />
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating ">
                    <textarea class="form-control" placeholder="Address" id="description" style="height: 320px;" name="description" :value="old('description')"></textarea>
                    <label for="description ">Descripcion</label>
                  </div>
                </div>
              </div><!-- End floating Labels Form -->

            </div>
          </div>



        </div>
        <div class="col-lg-4 pl-md-2 ">
        <div class="card shadow-sm border" style="height:480px;">
            <div class="card-body p-0 p-4 ">
            <div class="rounded-3 d-flex justify-content-center align-items-center" style="border:1px dashed #ccc; height:300px;">
        <div class="text-center">
            <div class="mt-5">
                <input class="form-control" type="file" id="formFile" multiple accept="image/*" hidden>
                <a class="btn btn-light py-2" id="btn-logo-img">
                    <svg width="77px" height="77px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" stroke-width="0.00024000000000000003" transform="matrix(1, 0, 0, 1, 0, 0)">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 15.75C12.4142 15.75 12.75 15.4142 12.75 15V4.02744L14.4306 5.98809C14.7001 6.30259 15.1736 6.33901 15.4881 6.06944C15.8026 5.79988 15.839 5.3264 15.5694 5.01191L12.5694 1.51191C12.427 1.34567 12.2189 1.25 12 1.25C11.7811 1.25 11.573 1.34567 11.4306 1.51191L8.43056 5.01191C8.16099 5.3264 8.19741 5.79988 8.51191 6.06944C8.8264 6.33901 9.29988 6.30259 9.56944 5.98809L11.25 4.02744L11.25 15C11.25 15.4142 11.5858 15.75 12 15.75Z" fill="#1C274C"></path>
                            <path d="M16 9C15.2978 9 14.9467 9 14.6945 9.16851C14.5853 9.24148 14.4915 9.33525 14.4186 9.44446C14.25 9.69667 14.25 10.0478 14.25 10.75L14.25 15C14.25 16.2426 13.2427 17.25 12 17.25C10.7574 17.25 9.75004 16.2426 9.75004 15L9.75004 10.75C9.75004 10.0478 9.75004 9.69664 9.58149 9.4444C9.50854 9.33523 9.41481 9.2415 9.30564 9.16855C9.05341 9 8.70227 9 8 9C5.17157 9 3.75736 9 2.87868 9.87868C2 10.7574 2 12.1714 2 14.9998V15.9998C2 18.8282 2 20.2424 2.87868 21.1211C3.75736 21.9998 5.17157 21.9998 8 21.9998H16C18.8284 21.9998 20.2426 21.9998 21.1213 21.1211C22 20.2424 22 18.8282 22 15.9998V14.9998C22 12.1714 22 10.7574 21.1213 9.87868C20.2426 9 18.8284 9 16 9Z" fill="#1C274C"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <p class="text-muted py-1" style="width: 200px;">Para verificar que se trata de un caso real, por favor sube fotos o evidencia relevante.</p>
        </div>
    </div>
                <div class="mt-3 w-100 d-flex overflow-auto" id="preview" style="width: 500px;"></div>

            </div>
          </div>
        </div>
    </div>

</section>

</form>

<script>
  $(document).ready(function() {
            var selectedFiles = [];
            $("#btn-logo-img").click(function(){
        var subir_btn = document.getElementById("formFile");
        subir_btn.click();
    });
            $('#formFile').change(function() {
                $('#preview').html('');
                selectedFiles = [];

                var files = $(this)[0].files;
                if (files.length > 0) {
                    for (var i = 0; i < files.length; i++) {
                        var file = files[i];
                        selectedFiles.push(file);

                        var reader = new FileReader();
                        reader.onload = function(e) {
                            var img = $('<img>').attr('src', e.target.result).addClass('p-2 rounded-3').css({'width': '120px', 'height': '120px', 'margin-right': '10px', 'border-style': 'dashed', 'border':'1px dashed #ccc'});
                            var btnRemove = $('<button>').html(`<svg xmlns="http://www.w3.org/2000/svg" x="o0px" y="0px" width="20" height="20" viewBox="0,0,290,290">
<g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M21,0c-1.64453,0 -3,1.35547 -3,3v2h-7.8125c-0.125,-0.02344 -0.25,-0.02344 -0.375,0h-1.8125c-0.03125,0 -0.0625,0 -0.09375,0c-0.55078,0.02734 -0.98047,0.49609 -0.95312,1.04688c0.02734,0.55078 0.49609,0.98047 1.04688,0.95313h1.09375l3.59375,40.5c0.125,1.39844 1.31641,2.5 2.71875,2.5h19.1875c1.40234,0 2.59375,-1.10156 2.71875,-2.5l3.59375,-40.5h1.09375c0.35938,0.00391 0.69531,-0.18359 0.87891,-0.49609c0.17969,-0.3125 0.17969,-0.69531 0,-1.00781c-0.18359,-0.3125 -0.51953,-0.5 -0.87891,-0.49609h-10v-2c0,-1.64453 -1.35547,-3 -3,-3zM21,2h8c0.5625,0 1,0.4375 1,1v2h-10v-2c0,-0.5625 0.4375,-1 1,-1zM11.09375,7h27.8125l-3.59375,40.34375c-0.03125,0.34766 -0.40234,0.65625 -0.71875,0.65625h-19.1875c-0.31641,0 -0.6875,-0.30859 -0.71875,-0.65625zM18.90625,9.96875c-0.04297,0.00781 -0.08594,0.01953 -0.125,0.03125c-0.46484,0.10547 -0.79297,0.52344 -0.78125,1v33c-0.00391,0.35938 0.18359,0.69531 0.49609,0.87891c0.3125,0.17969 0.69531,0.17969 1.00781,0c0.3125,-0.18359 0.5,-0.51953 0.49609,-0.87891v-33c0.01172,-0.28906 -0.10547,-0.56641 -0.3125,-0.76172c-0.21094,-0.19922 -0.49609,-0.29687 -0.78125,-0.26953zM24.90625,9.96875c-0.04297,0.00781 -0.08594,0.01953 -0.125,0.03125c-0.46484,0.10547 -0.79297,0.52344 -0.78125,1v33c-0.00391,0.35938 0.18359,0.69531 0.49609,0.87891c0.3125,0.17969 0.69531,0.17969 1.00781,0c0.3125,-0.18359 0.5,-0.51953 0.49609,-0.87891v-33c0.01172,-0.28906 -0.10547,-0.56641 -0.3125,-0.76172c-0.21094,-0.19922 -0.49609,-0.29687 -0.78125,-0.26953zM30.90625,9.96875c-0.04297,0.00781 -0.08594,0.01953 -0.125,0.03125c-0.46484,0.10547 -0.79297,0.52344 -0.78125,1v33c-0.00391,0.35938 0.18359,0.69531 0.49609,0.87891c0.3125,0.17969 0.69531,0.17969 1.00781,0c0.3125,-0.18359 0.5,-0.51953 0.49609,-0.87891v-33c0.01172,-0.28906 -0.10547,-0.56641 -0.3125,-0.76172c-0.21094,-0.19922 -0.49609,-0.29687 -0.78125,-0.26953z"></path></g></g>
</svg>`).addClass('btn btn-dark position-absolute top-0 start-0 btn-sm m-2').click(function() {
    var index = $(this).index() / 2; // Índice del botón / 2
                                $(this).prev('img').remove();
                                $(this).remove();
                                selectedFiles.splice(index, 1);
                                console.log(selectedFiles); // Mostrar archivos restantes en la consola
                            });
                            var container = $('<div>').addClass('preview-item position-relative flex').append(img).append(btnRemove);
                            $('#preview').append(container);
                        }
                        reader.readAsDataURL(file);
                    }
                }
            });
        });
</script>
@endcomponent
