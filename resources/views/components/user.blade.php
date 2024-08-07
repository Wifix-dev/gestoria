<!doctype html>
<html lang="en" class="h-full w-full bg-white overflow-visible">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Topic Listing Bootstrap 5 Template</title>

    <!-- CSS FILES -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{asset('public/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="{{asset('public/assets/user/css/bootstrap-icons.css')}}" rel="stylesheet">

    <!--
    <link href="public/build/assets/app-CCo-TTxN.css" rel="stylesheet">
    <link href="assets/user/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/user/css/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/user/css/templatemo-topic-listing.css" rel="stylesheet">
    <link href="public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

    <link href="public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="public/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <link href="public/assets/css/style.css" rel="stylesheet">
-->
    <style>
    @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
    </style>
</head>

<body class="bg-white font-family-karla flex w-full h-full overflow-visible ">
    <div class="w-full h-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header
        <header class="w-full items-center bg-white py-2 px-6 hidden lg:flex lg:flex-col fixed z-10 top-0 shadow">
            <div class="max-w-7xl w-full mx-auto flex flex-wrap flex-col md:flex-row justify-between">
                <div class="lg:flex lg:items-center lg:justify-between w-full">
                    <div class="flex items-center justify-between">



                    <a href="{{route('home')}}" class="flex flex-row">
                            <img class="w-auto h-[60px]" src="{{asset('public/assets/img/SOS2.png')}}" alt="">
                            <span class="font-extrabold text-2xl my-auto pl-3 ">S.O.S</span>
                        </a>

                        <div class="flex lg:hidden">
                            <button x-cloak @click="isOpen = !isOpen" type="button"
                                class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                                aria-label="toggle menu">
                                <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                                </svg>

                                <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                        class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-800 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
                        <div class="flex flex-col -mx-6 lg:flex-row lg:items-center lg:mx-8">
                            <a href="#"
                                class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Inicio</a>
                            @if (auth()->check() && auth()->user()->role == 'admin')
                            <a href="#"
                                class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Crear
                                Denuncias</a>
                            @elseif (auth()->check() && auth()->user()->role == 'user')
                                <p>Bienvenido, Usuario!</p>
                            @elseif (auth()->check() && auth()->user()->role == 'manager')
                                <a href="{{route('manager.denouncements.list')}}"
                                class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Crear
                                Denuncias</a>
                            @else
                            <p>Por favor, inicia sesión.</p>
                            @endif

                        </div>

                        <div class="flex items-center mt-4 lg:mt-0">

                            <div x-data="{ isOpen: false }" class="relative flex justify-end">

                                <button @click="isOpen = !isOpen"
                                    class="w-8 h-8 overflow-hidden border-2 border-gray-400 rounded-full">
                                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"
                                        class="object-cover w-full h-full" alt="avatar">
                                </button>
                                <button x-show="isOpen" @click="isOpen = false"
                                    class="h-full w-full fixed inset-0 cursor-default"></button>
                                <div x-show="isOpen"
                                    class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-11 shadow-sm border border-gray-50">
                                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="w-1/2"></div>

        </header>
         -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <nav id="menu" class="border-gray-200 z-30 hidden lg:block ">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-3 py-1">
                <a href="#" class="flex items-center">
                    <img id="logo" src="{{asset('public/assets/img/SOSB.png')}}" class="h-20 mr-3"
                        alt="Flowbite Logo" />
                </a>
                <div class="flex md:order-2">
                    <div class="flex items-center mt-4 lg:mt-0 relative hidden md:block text-sm space-x-1">
                        @if (auth()->check())
                        <div x-data="{ Open: false }" class="relative flex justify-end">
                            <button @click="Open = !Open"
                                class="w-9 h-9 overflow-hidden bg-blue-600 rounded-full flex justify-center items-center text-md uppercase text-white font-normal">
                                <span>{{auth()->user()->name[0]}}</span>
                                <span>{{auth()->user()->name[1]}}</span>
                            </button>
                            <div x-show="Open"
                                class="absolute w-40 bg-white rounded-lg shadow-lg p-1.5 mt-11 shadow-sm border border-gray-100 text-sm text-gray-700">
                                <a href="#"
                                    class="block px-4 py-2 account-link hover:bg-gray-100 rounded hover:text-blue-700"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt mr-.5"></i>
                                    Cerrar Sesión
                                </a>
                            </div>
                        </div>
                        @else
                        <a id="is" href="{{route('login')}}"
                            class="text-white rounded-3xl py-2.5 px-5 ring-2 ring-white ring-inset">Iniciar
                            Sesion</a>
                        <a href="{{route('register')}}"
                            class="bg-slate-900 text-white rounded-3xl py-2.5 px-5 ">Registro</a>

                        @endif
                    </div>
                    <button data-collapse-toggle="navbar-search" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-search" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                    <div class="relative mt-3 md:hidden">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="search-navbar"
                            class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search...">
                    </div>
                    <ul id="options"
                        class="flex flex-col p-4 md:p-0 mt-4 font-normal font-sans border font-semibold border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 text-white">
                        <li>
                            <a href="#" class="block py-2 px-3 rounded-md hover:text-blue-600 hover:bg-gray-50/20"
                                aria-current="page">Inicio</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 rounded-md hover:text-blue-600 hover:bg-gray-50/20">Acerca de</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 rounded-md hover:text-blue-600 hover:bg-gray-50/20 ">Servicios</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 rounded-md hover:text-blue-600 hover:bg-gray-50/20 ">Denuncias</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 rounded-md hover:text-blue-600 hover:bg-gray-50/20 ">Contacto</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 rounded-md hover:text-blue-600 hover:bg-gray-50/20 ">Noticias</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

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

        <div class="w-full h-full overflow-x-hidden border-t fixed flex flex-col">
            <main id="main-content" class="w-full h-full overflow-auto">
                @yield('content')
                <footer class="bg-slate-900 dark:bg-gray-900 relative z-10">
    <div class="container px-6 py-12 mx-auto">
        <div class="md:flex md:-mx-3 md:items-center md:justify-between">
            <h1 class="text-xl font-semibold tracking-tight text-gray-800 md:mx-3 xl:text-2xl dark:text-white">Subscribe our newsletter to get update.</h1>

            <div class="mt-6 md:mx-3 shrink-0 md:mt-0 md:w-auto">
                <a href="#" class="inline-flex items-center justify-center w-full px-4 py-2 text-sm text-white duration-300 bg-gray-800 rounded-lg gap-x-3 hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                    <span>Sign Up Now</span>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>

        <hr class="my-6 border-gray-200 md:my-10 dark:border-gray-700">

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <div>
                <p class="font-semibold text-gray-800 dark:text-white">Quick Link</p>

                <div class="flex flex-col items-start mt-5 space-y-2">
                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Home</a>
                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Who We Are</a>
                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Our Philosophy</a>
                </div>
            </div>

            <div>
                <p class="font-semibold text-gray-800 dark:text-white">Industries</p>

                <div class="flex flex-col items-start mt-5 space-y-2">
                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Retail & E-Commerce</a>
                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Information Technology</a>
                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Finance & Insurance</a>
                </div>
            </div>

            <div>
                <p class="font-semibold text-gray-800 dark:text-white">Services</p>

                <div class="flex flex-col items-start mt-5 space-y-2">
                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Translation</a>
                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Proofreading & Editing</a>
                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Content Creation</a>
                </div>
            </div>

            <div>
                <p class="font-semibold text-gray-800 dark:text-white">Contact Us</p>

                <div class="flex flex-col items-start mt-5 space-y-2">
                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">+880 768 473 4978</a>
                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">info@merakiui.com</a>
                </div>
            </div>
        </div>

        <hr class="my-6 border-gray-200 md:my-10 dark:border-gray-700">

        <div class="flex flex-col items-center justify-between sm:flex-row">
            <a href="#">
                <img class="w-auto h-7" src="https://merakiui.com/images/full-logo.svg" alt="">
            </a>

            <p class="mt-4 text-sm text-gray-500 sm:mt-0 dark:text-gray-300">© Copyright 2021. All Rights Reserved.</p>
        </div>
    </div>
</footer>
            </main>

        </div>
    </div>
    <script src="{{asset('public/assets/vendor/quill/quill.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
    <script>
    document.getElementById('main-content').addEventListener('scroll', function() {
        const menu = document.getElementById('menu');
        const options = document.getElementById('options');
        const logo = document.getElementById('logo');
        const iss=document.getElementById('is');
        if (this.scrollTop > 80) {
            menu.classList.add('shadow-sm', 'bg-white');
            options.classList.remove('text-white');
            options.classList.add('text-gray-900');

            iss.classList.remove('ring-white','text-white');
            iss.classList.add('ring-blue-500','text-blue-500');
            logo.setAttribute("src", "{{asset('public/assets/img/SOSN.png')}}");
        } else {
            options.classList.remove('text-gray-900');
            options.classList.add('text-white');

            iss.classList.add('ring-white','text-white');
            iss.classList.remove('ring-blue-500','text-blue-500');

            menu.classList.remove('shadow-sm', 'bg-white');
            logo.setAttribute("src", "{{asset('public/assets/img/SOSB.png')}}");
        }
    });
    </script>
</body>

</html>
