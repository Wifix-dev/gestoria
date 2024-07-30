@extends('components.user')

@section('title', 'Detalle de la Denuncia')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<div id="carga" class="absolute w-full h-full bg-gray-900 flex items-center z-10  bg-opacity-70 hidden">
    <div id="preloader5" class="mx-auto ">
        <div class="inner"></div>
    </div>


</div>

<style></style>
<div class="bg-[url('{{ asset('/public/assets/img/fondo.jpg') }}')] bg-cover bg-center lg:bg-right-top  items-center ">
    <div class="bg-blue-400 py-12  bg-opacity-80 h-full w-full overflow-y-auto ">
        <div class="mx-auto w-full flex flex-col items-center py-12">
            <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col mb-5 sm:mb-10">
                <h1
                    class="text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl text-center text-gray-800 dark:text-white font-black leading-10">
                    Consulta tu
                    <span
                        class="bg-gradient-to-l from-blue-600 to-blue-800 bg-clip-text text-transparent">Denuncia</span>
                </h1>
                <p class="mt-5 sm:mt-10 lg:w-10/12 text-gray-100 font-normal text-center text-xl">
                    Si deseas consultar tu caso, por favor ingresa el número de caso asignado.
                </p>
            </div>
            <div class="flex w-11/12 md:w-8/12 xl:w-6/12">
                <div class="flex rounded-md w-full">
                    <input type="text" name="q"
                        class="w-full p-3 rounded-md rounded-r-none border border-2 border-gray-200 placeholder-current "
                        placeholder="keyword" id="idCase" />
                    <button onclick="search()"
                        class="inline-flex items-center gap-2 bg-blue-700 text-white text-lg font-semibold py-3 px-6 rounded-r-md">
                        <span>Buscar</span>
                        <svg class="text-gray-200 h-5 w-5 p-0 fill-current" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                            xml:space="preserve">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="w-full max-w-7xl bg-white mt-8 mx-auto z-0 inset-x-0 top-0 pb-12  relative grid lg:grid-cols-3">
    <div class="lg:col-span-1"></div>
    <div class=" lg:mx-0 p-4 lg:p-8 lg:col-span-2 ">
        <div id="result" class="hidden">
            <div>
                <div class="flex justify-between">
                    <div>
                        <h3 class="text-xl font-semibold leading-7 text-gray-900">Informacion de la peticion</h3>
                        <p class="mt-1 max-w-2xl  leading-6 text-gray-500">Detalles de la peticion</p>
                    </div>
                </div>
                <div class="mt-3 border-t border-gray-100 text-sm">
                    <dl class="divide-y divide-gray-100">
                        <div class="lg:px-4 py-3 lg:py-4 sm:grid sm:grid-cols-3 sm:gap-4 ">
                            <dt class="leading-6 text-gray-900">Nombre del ciudadano</dt>
                            <dd class="mt-1 leading-6 text-gray-600 sm:col-span-2 sm:mt-0" id="full_name"></dd>
                        </div>
                        <div class="lg:px-4 py-3 lg:py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="leading-6 text-gray-900">Nombre del caso</dt>
                            <dd class="mt-1  leading-6 text-gray-600 sm:col-span-2 sm:mt-0" id="case">
                            </dd>
                        </div>
                        <div class="lg:px-4 py-3 lg:py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="leading-6 text-gray-900">Estado</dt>
                            <dd class="mt-1  leading-6 text-gray-600 sm:col-span-2 sm:mt-0">
                                <span id="status"></span>
                            </dd>
                        </div>
                        <div class="lg:px-4 py-3 lg:py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="leading-6 text-gray-900">Descripcion</dt>
                            <dd class="mt-1  leading-6 text-gray-600 sm:col-span-2 sm:mt-0">
                                <div id="quill-editor" class=" rounded-bottom h-64" disabled></div>
                            </dd>
                        </div>
                        <div class="lg:px-4 py-3 lg:py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class=" leading-6 text-gray-900">Evidencia</dt>
                            <dd class="mt-2  text-gray-900 sm:col-span-2 sm:mt-0">
                                <ul id="list" role="list"
                                    class="divide-y divide-gray-100 rounded-md border border-gray-200 max-h-72 overflow-y-auto">
                                </ul>
                            </dd>
                        </div>
                    </dl>
                </div>
                <div class="mb-3">
                    <h3 class="text-base font-semibold leading-7 text-gray-900">Acesor</h3>
                    <div id="user" class="pt-1" >

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<style>
#preloader5 {
    position: relative;
    width: 50px;
    height: 50px;
    background: transparent;
    border-radius: 50px;
    z-index: 10;
}

#preloader5::before {
    position: absolute;
    width: 40px;
    height: 40px;
    border-top: 10px solid #000;
    border-bottom: 10px solid #000;
    border-left: 10px solid #000;
    border-right: 10px solid transparent;
    border-radius: 50px;
    content: '';
    padding: 5;
    z-index: 0;
    top: 15px;
    left: 15px;
    animation: preloader_5_after2 1.5s infinite linear;
    animation-delay: 0.5s;
}

#preloader5:after {
    position: absolute;
    width: 100px;
    height: 100px;
    border-top: 10px solid rgb(0, 84, 140);
    border-bottom: 10px solid rgb(0, 84, 140);
    border-left: 10px solid rgb(0, 84, 140);
    border-right: 10px solid transparent;
    border-radius: 60px;
    content: '';
    z-index: 0;
    top: -15px;
    left: -15px;
    animation: preloader_5_after 1.5s infinite linear;
    animation-delay: 0.5s;
}

#preloader5 .inner::after {
    position: absolute;
    width: 70px;
    height: 70px;
    border-top: 10px solid rgb(1, 128, 183);
    border-bottom: 10px solid rgb(1, 128, 183);
    border-left: 10px solid rgb(1, 128, 183);
    border-right: 10px solid transparent;
    border-radius: 60px;
    content: '';
    z-index: 0;
    animation: 1.5s preloader_5_after1 infinite linear;
    animation-delay: 0.5s;
    background-color: transparent;
}

@keyframes preloader_5_after {
    0% {
        border-top: 10px solid rgb(0, 84, 140);
        border-bottom: 10px solid rgb(0, 84, 140);
        border-left: 10px solid rgb(0, 84, 140);
        transform: rotate(0deg);

    }

    50% {
        transform: rotate(180deg);
    }

    100% {
        border-top: 10px solid rgb(0, 84, 140);
        border-bottom: 10px solid rgb(0, 84, 140);
        border-left: 10px solid rgb(0, 84, 140);
        transform: rotate(360deg);
    }
}

@keyframes preloader_5_after1 {
    0% {
        border-top: 10px solid rgb(1, 128, 183);
        border-bottom: 10px solid rgb(1, 128, 183);
        border-left: 10px solid rgb(1, 128, 183);
        transform: rotate(-0deg);

    }

    50% {
        transform: rotate(-180deg);
    }

    100% {
        border-top: 10px solid rgb(1, 128, 183);
        border-bottom: 10px solid rgb(1, 128, 183);
        border-left: 10px solid rgb(1, 128, 183);
        transform: rotate(-360deg);
    }
}

@keyframes preloader_5_after2 {
    0% {
        border-top: 10px solid rgb(0, 0, 0);
        border-bottom: 10px solid rgb(0, 0, 0);
        border-left: 10px solid rgb(0, 0, 0);
        transform: rotate(0deg);

    }

    50% {
        transform: rotate(180deg);
    }

    100% {
        border-top: 10px solid rgb(0, 0, 0);
        border-bottom: 10px solid rgb(0, 0, 0);
        border-left: 10px solid rgb(0, 0, 0);
        transform: rotate(360deg);
    }
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
let color = {
    'Revisada': 'blue',

}

document.addEventListener('DOMContentLoaded', function() {

    window.quill = new Quill('#quill-editor', {
        theme: 'snow',
        readOnly: true,
        modules: {
            toolbar: true // Oculta la barra de herramientas
        }
    });
});


let result = document.getElementById('result');
let log = document.getElementById('carga');
let full_name = document.getElementById('full_name');
let case_name = document.getElementById('case');
let description = document.getElementById('quill-editor');
let status = document.getElementById('status');

function search() {
    let code = document.getElementById('idCase').value; // Obtener el valor del input

    var parametros = {
        "id": code
    };
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: parametros,
        url: '{{ route('web.view.search.find')}}',
        type: 'POST',
        beforeSend: function() {
            setTimeout(function() {
                log.classList.add('hidden');
                log.classList.remove('block');
                result.classList.add('block');
                result.classList.remove('hidden');
            }, 2150);
        },
        success: function(response) {
            let evidencia = document.getElementById('list')
            evidencia.innerHTML='';
            log.classList.remove('hidden');
            log.classList.add('block');
            console.log(response);
            full_name.innerText = response[0].name + " " + response[0].last_name;
            case_name.innerText = response[0].case_name;
            status_color = color[response[0].status];
            let estado = `<div class="inline-flex items-center px-4 py-2 rounded-full gap-x-2 bg-${status_color}-100/60 ">
                                            <span class="h-1.5 w-1.5 rounded-full bg-${status_color}-500"></span>
                                            <h2 class="text-sm font-normal text-${status_color}-500 capitalize">
                            ${response[0].status}
                            </h2>
                        </div>`;
            let manager = document.getElementById('user');

            let user = document.createElement('div')
            user.classList.add('flex','items-center')


            if(response[0].manager==null){
                user.innerHTML=`
                        <div
                            class="relative w-8 h-8 rounded-full bg-gray-500 flex justify-center items-center text-md uppercase text-white font-normal">
                            <span>NA</span>
                        </div>
                        <span class="pl-2">Acesor no Asignado</span>`;
            }else{
                user.innerHTML=`
                        <div
                            class="relative w-8 h-8 rounded-full bg-gray-500 flex justify-center items-center text-md uppercase text-white font-normal">
                            <span>${response[0].manager.name[0]+response[0].manager.last_name[0]}</span>
                        </div>
                        <span class="pl-2">${response[0].manager.name+' '+response[0].manager.last_name}</span>`;
            }
            manager.innerHTML=""
            manager.appendChild(user);




            let src = JSON.parse(response[0].initial_evidence);
            src.forEach((element, index) => {
                console.log(element);
                let elemento = document.createElement('div');
                let evidencias = `<li onclick="openModal('${element}')"
                                        class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6 hover:bg-blue-400 group">
                                        <div class="flex w-0 flex-1 items-center">
                                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-white"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                <span class="truncate font-medium group-hover:text-white">Evidencia ${index+1}
                                                    </span>
                                            </div>
                                        </div>
                                    </li>`;
                elemento.innerHTML = evidencias;

                evidencia.appendChild(elemento)
            });
            quill.root.innerHTML = response[0].description;

            status.innerHTML = estado;
        },
        error: function(xhr, status, error) {
            console.log('Error:', error);
        }
    });
}
</script>
<div
    class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster bg-gray-900 bg-opacity-50">
    <div
        class="border border-gray-200 shadow-lg modal-container bg-white w-full max-w-5xl mx-auto rounded shadow-lg z-50 overflow-y-auto mx-3 mt-3">
        <div class="modal-content p-4 text-left ">
            <!--Title-->
            <div class="flex justify-between items-center">
                <p class="text-2xl font-bold">Evidencia</p>
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
            <div class="my-2 overflow-auto">
                <img id="ImageModal" alt="nature" class="h-96 w-full mx-auto object-contain object-center" />
            </div>
            <!--Footer-->
            <div class="flex justify-end pt-2">
                <a
                    class="focus:outline-none modal-close px-4 bg-gray-400 p-2 rounded-lg text-black hover:bg-gray-300 cursor-pointer">Atras</a>
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

const openModal = (imagen) => {
    modal.classList.remove('fadeOut');
    modal.classList.add('fadeIn');
    modal.style.display = 'flex';
    let im = document.getElementById("ImageModal");
    let descargar = document.getElementById("down")
    im.src = "public/" + imagen;
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
@endsection
