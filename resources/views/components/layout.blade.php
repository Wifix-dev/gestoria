<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Admin Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="{{asset('public/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/user/css/bootstrap-icons.css')}}" rel="stylesheet">

    <style>
    @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

    * {
        font-family: 'ui-sans', sans-serif;
    }


    .bg-sidebar {
        background: #3d68ff;
    }

    .cta-btn {
        color: #3d68ff;
    }

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

    .upgrade-btn {
        background: #1947ee;
    }

    .upgrade-btn:hover {
        background: #0038fd;
    }

    .active-nav-link {
        background: #1947ee;
    }

    .nav-item:hover {
        background: #1947ee;
    }

    .account-link:hover {
        background: #3d68ff;
    }
    </style>
</head>

<body class="bg-gray-100 font-family-karla flex">

    <aside class="relative bg-slate-900 h-screen w-96 hidden lg:block shadow-xl p-6">
        <div class="h-full relative grid grid-rows-12 grid-flow-col">

            <nav class="text-white relative w-full text-base text-white  relative font-normal pt-3 h-full  row-span-10 overflow-y-auto">
                <a href="index.html" class="flex items-center rounded-lg py-4 px-6 hover:bg-gray-100 hover:bg-opacity-10">
                    Denuncias
                </a>
            </nav>
            <div class="row-span-2 relative flex flex-col text-white">
                <div class="absolute w-full bottom-0 flex flex-col space-y-2">
                @if (auth()->check())
                <div class="relative w-full flex justify-start items-center px-4">
                    <button
                        class="w-9 h-9 overflow-hidden bg-blue-600 rounded-full flex justify-center items-center text-md uppercase text-white font-normal">
                        <span>{{auth()->user()->name[0]}}</span>
                        <span>{{auth()->user()->last_name[0]}}</span>
                    </button>
                    <span class="text-white text-sm ml-4">
                        <span>{{auth()->user()->name}}</span>
                        <span>{{auth()->user()->last_name}}</span>
                    </span>
                </div>

                @endif
            <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block  w-full  py-4 px-6 account-link hover:bg-gray-100 hover:bg-opacity-10 rounded-lg ">
                        <i class="fas fa-sign-out-alt mr-1"></i>
                        Cerrar Sesión
                    </a>
                    </div>
            </div>

        </div>

    </aside>

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-2 px-6 hidden lg:flex">
            <div class="w-1/2"></div>
            @if (auth()->check())
            <div x-data="{ Open: false }" class="relative w-1/2 flex justify-end">
                <button @click="Open = !Open"
                    class="w-9 h-9 overflow-hidden bg-blue-600 rounded-full flex justify-center items-center text-md uppercase text-white font-normal">
                    <span>{{auth()->user()->name[0]}}</span>
                    <span>{{auth()->user()->last_name[0]}}</span>
                </button>
                <div x-show="Open"
                    class="absolute w-40 z-10 bg-white rounded-lg shadow-lg p-1.5 mt-11 shadow-sm border border-gray-100 text-sm text-gray-700">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 account-link hover:bg-gray-100 rounded hover:text-blue-700">
                        <i class="fas fa-sign-out-alt mr-.5"></i>
                        Cerrar Sesión
                    </a>
                </div>
            </div>
            @endif
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }"
            class="w-full bg-sidebar py-1 px-6 sticky top-0 bg-white shadow lg:hidden z-10"
            :class="{'pb-3': isOpen, ' pb-0': !isOpen}">
            <div class="flex items-center justify-between">
                <a href="#" class="flex items-center">
                    <img src="{{asset('public/assets/img/SOSN.png')}}" class="h-16 mr-3" alt="Flowbite Logo" />
                </a>
                <div class="flex flex-row gap-2">
                    @if (auth()->check())
                    <div
                        class="w-8 h-8 overflow-hidden bg-blue-600 rounded-full flex justify-center items-center text-md uppercase text-white font-normal">
                        <span>{{auth()->user()->name[0]}}</span>
                        <span>{{auth()->user()->name[1]}}</span>
                    </div>
                    @endif
                    <button
                        class="text-gray-500 w-8 h-8 relative focus:outline-none bg-white rounded border border-gray-200"
                        @click="isOpen = !isOpen">
                        <span class="sr-only">Open main menu</span>
                        <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                            <span aria-hidden="true"
                                class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out"
                                :class="{'rotate-45': isOpen,' -translate-y-1.5': !isOpen }"></span>
                            <span aria-hidden="true"
                                class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out"
                                :class="{'opacity-0': isOpen } "></span>
                            <span aria-hidden="true"
                                class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out"
                                :class="{'-rotate-45': isOpen, ' translate-y-1.5': !isOpen}"></span>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4 text-gray-500">

                @if (auth()->check())
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="flex items-center opacity-75 hover:opacity-100 py-2 pl-4 hover:bg-gray-100 hover:rounded hover:text-gray-600">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Cerrar Sesión
                </a>
                @endif
            </nav>
        </header>

        <div class="w-full h-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-3 lg:p-6 relative">
                @yield('content')
            </main>
        </div>

    </div>

    <script src="{{asset('public/assets/vendor/quill/quill.js')}}"></script>
    <script src="{{asset('public/js/upload.js')}}"></script>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
    @csrf
</form>
    </body>

</html>
