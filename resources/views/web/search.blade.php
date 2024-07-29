@extends('components.user')

@section('title', 'Detalle de la Denuncia')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<div id="carga" class="absolute w-full h-full bg-gray-900 flex items-center  bg-opacity-70 hidden">
    <div id="preloader5" class="mx-auto ">
        <div class="inner"></div>
    </div>


</div>

<style></style>
<div class="bg-[url('{{ asset('/public/assets/img/fondo.jpg') }}')] bg-cover bg-center lg:bg-right-top  items-center ">
    <div class="bg-blue-400 py-12 sm:py-24 bg-opacity-80 h-full w-full overflow-y-auto ">
        <div class="mx-auto w-full flex flex-col items-center py-12 sm:py-24">
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
<div id="result" class="w-full max-w-7xl bg-white mt-16 mx-auto z-0 inset-x-0 top-0 pb-12 hidden">
    <div class="mx-2 lg:mx-0 p-4 lg:p-8 ">
        <div class="relative">
            <div>
                <div class="px-4 sm:px-0">
                    <h3 class="text-base font-semibold leading-7 text-gray-900">Applicant Information</h3>
                    <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details and
                        application.</p>
                </div>
                <div class="mt-6 border-t border-gray-100">
                    <dl class="divide-y divide-gray-100">
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Full name</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Margot
                                Foster</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Application for</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Backend
                                Developer
                            </dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Email address</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                margotfoster@example.com</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Salary expectation</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">$120,000
                            </dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">About</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Fugiat
                                ipsum ipsum
                                deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat.
                                Excepteur
                                qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea
                                officia
                                proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit
                                deserunt qui eu.
                            </dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Attachments</dt>
                            <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                                    <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                        <div class="flex w-0 flex-1 items-center">
                                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                <span class="truncate font-medium">resume_back_end_developer.pdf</span>
                                                <span class="flex-shrink-0 text-gray-400">2.4mb</span>
                                            </div>
                                        </div>
                                        <div class="ml-4 flex-shrink-0">
                                            <a href="#"
                                                class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                                        </div>
                                    </li>
                                    <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                        <div class="flex w-0 flex-1 items-center">
                                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                <span
                                                    class="truncate font-medium">coverletter_back_end_developer.pdf</span>
                                                <span class="flex-shrink-0 text-gray-400">4.5mb</span>
                                            </div>
                                        </div>
                                        <div class="ml-4 flex-shrink-0">
                                            <a href="#"
                                                class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                                        </div>
                                    </li>
                                </ul>
                            </dd>
                        </div>
                    </dl>
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
    border-top: 30px solid #000;
    border-bottom: 30px solid #000;
    border-left: 10px solid #000;
    border-right: 10px solid transparent;
    border-radius: 50px;
    content: '';
    padding: 5;
    z-index: 0;
    top: 15px;
    left: 15px;
    animation: preloader_5_after2 1.5s infinite linear;
}

#preloader5:after {
    position: absolute;
    width: 100px;
    height: 100px;
    border-top: 40px solid rgb(0, 84, 140);
    border-bottom: 40px solid rgb(0, 84, 140);
    border-left: 10px solid rgb(0, 84, 140);
    border-right: 10px solid transparent;
    border-radius: 60px;
    content: '';
    z-index: 0;
    top: -15px;
    left: -15px;
    animation: preloader_5_after 1.5s infinite linear;
}

#preloader5 .inner::after {
    position: absolute;
    width: 70px;
    height: 70px;
    border-top: 10px solid #000;
    border-bottom: 10px solid #000;
    border-left: 10px solid #000;
    border-right: 10px solid transparent;
    border-radius: 60px;
    content: '';
    z-index: 0;
    animation: preloader_5_after1 1.5s infinite linear;
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
</style>
<script>
function search() {
    let code = document.getElementById('idCase').value; // Obtener el valor del input
    let result = document.getElementById('result');
    let log = document.getElementById('carga');

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
            result.classList.remove('block');
            setTimeout(function() {

                log.classList.add('block');
                log.classList.remove('hidden');
            }, 2000);

            result.classList.add('hidden');
        },
        success: function(response) {
            result.classList.remove('hidden');
            result.classList.add('block');
            log.classList.add('hidden');
        },
        error: function(xhr, status, error) {
            console.log('Error:', error);
        }
    });
}
</script>
@endsection
