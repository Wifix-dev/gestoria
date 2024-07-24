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

        <nav id="menu" class="bg-white border-gray-200 z-30 hidden lg:block ">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-3">
                <a href="#" class="flex items-center">
                    <img src="{{asset('public/assets/img/cnt.png')}}" class="h-12 mr-3" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-extrabold whitespace-nowrap text-gray-700">S.O.S</span>
                </a>
                <div class="flex md:order-2">
                    <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                        aria-expanded="false"
                        class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                    <div class="relative hidden md:block">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search icon</span>
                        </div>
                        <input type="text" id="search-navbar"
                            class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search...">
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
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                        <li>
                            <a href="#" class="block py-2 px-3 text-gray-900 md:hover:text-blue-600 hover:bg-gray-100 rounded-md"
                                aria-current="page">Inicio</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded-md hover:bg-gray-100 md:hover:text-blue-600">About</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded-md hover:bg-gray-100 md:hover:text-blue-600">Services</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-4 px-6 sticky top-0 bg-white shadow lg:hidden z-10">
            <div class="flex items-center justify-between">
                <a href="index.html" class="text-gray-700 text-3xl font-semibold uppercase hover:text-gray-600">SOS</a>
                <button class="text-gray-500 w-8 h-8 relative focus:outline-none bg-white rounded border border-gray-200" @click="isOpen = !isOpen">
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

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4 text-gray-500">
                <a href="index.html" class="flex items-center hover:rounded hover:text-gray-600 hover:bg-gray-100 py-2 pl-4 ">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="blank.html"
                    class="flex items-center opacity-75 hover:opacity-100 py-2 pl-4 hover:rounded hover:bg-gray-100 hover:text-gray-600 ">
                    <i class="fas fa-sticky-note mr-3"></i>
                    Blank Page
                </a>
                <a href="tables.html"
                    class="flex items-center opacity-75 hover:opacity-100 py-2 pl-4  hover:rounded hover:bg-gray-100 hover:text-gray-600">
                    <i class="fas fa-table mr-3"></i>
                    Tables
                </a>
                <a href="forms.html"
                    class="flex items-center opacity-75 hover:opacity-100 py-2 pl-4  hover:rounded hover:bg-gray-100 hover:text-gray-600">
                    <i class="fas fa-align-left mr-3"></i>
                    Forms
                </a>
                <a href="tabs.html"
                    class="flex items-center opacity-75 hover:opacity-100 py-2 pl-4  hover:rounded  hover:bg-gray-100 hover:text-gray-600">
                    <i class="fas fa-tablet-alt mr-3"></i>
                    Tabbed Content
                </a>
                <a href="calendar.html"
                    class="flex items-center opacity-75 hover:opacity-100 py-2 pl-4  hover:rounded hover:bg-gray-100 hover:text-gray-600">
                    <i class="fas fa-calendar mr-3"></i>
                    Calendar
                </a>
                <a href="#" class="flex items-center opacity-75 hover:opacity-100 py-2 pl-4 hover:bg-gray-100 hover:rounded hover:text-gray-600">
                    <i class="fas fa-cogs mr-3"></i>
                    Support
                </a>
                <a href="#" class="flex items-center opacity-75 hover:opacity-100 py-2 pl-4 hover:bg-gray-100 hover:rounded hover:text-gray-600 ">
                    <i class="fas fa-user mr-3"></i>
                    My Account
                </a>
                <a href="#" class="flex items-center opacity-75 hover:opacity-100 py-2 pl-4 hover:bg-gray-100 hover:rounded hover:text-gray-600">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Sign Out
                </a>
            </nav>
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
        </header>

        <div class="w-full h-full overflow-x-hidden border-t fixed flex flex-col">
            <main id="main-content" class="w-full h-full overflow-auto">
                @yield('content')
            </main>

        </div>

    </div>

    <script src="{{asset('public/assets/vendor/quill/quill.js')}}"></script>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <script>
 document.getElementById('main-content').addEventListener('scroll', function() {
  const menu = document.getElementById('menu');

  if (this.scrollTop > 0) {
    menu.classList.add('shadow');
  } else {
    menu.classList.remove('shadow');
  }
});
    var chartOne = document.getElementById('chartOne');
    var myChart = new Chart(chartOne, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var chartTwo = document.getElementById('chartTwo');
    var myLineChart = new Chart(chartTwo, {
        type: 'line',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>
</body>

</html>
