<!doctype html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Topic Listing Bootstrap 5 Template</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <!--
    <link href="public/build/assets/app-CCo-TTxN.css" rel="stylesheet">
    <link href="assets/user/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/user/css/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/user/css/templatemo-topic-listing.css" rel="stylesheet">
    <link href="public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="public/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="public/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="public/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="public/assets/css/style.css" rel="stylesheet">

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
</head>

<body class="h-full">
    <style>
    .men {
        padding-right: 0px !important;
        margin-right: 0px !important;
    }
    </style>
    <!-- component -->
    <!-- component -->
    <div class="w-full">
        <nav class="bg-white shadow-lg sticky top-0 z-10">
            <div class="md:flex max-w-7xl w-full mx-auto items-center justify-between py-2 px-8 md:px-12">
                <div class="flex justify-between items-center">
                    <div class="text-2xl font-bold text-gray-800 md:text-3xl">
                        <a href="#">S.O.S</a>
                    </div>


                    <div class="lg:hidden flex justify-between space-x-2">
                    <svg class="cursor-pointer  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 "
                        width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z"
                            stroke="#1F2937" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M13.73 21C13.5542 21.3031 13.3019 21.5547 12.9982 21.7295C12.6946 21.9044 12.3504 21.9965 12 21.9965C11.6496 21.9965 11.3054 21.9044 11.0018 21.7295C10.6982 21.5547 10.4458 21.3031 10.27 21"
                            stroke="#1F2937" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div
                        class="relative cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 ">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H7L3 21V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V15Z"
                                stroke="#1F2937" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div
                            class="animate-ping w-1.5 h-1.5 bg-indigo-700 rounded-full absolute -top-1 -right-1 m-auto duration-200">
                        </div>
                        <div class=" w-1.5 h-1.5 bg-indigo-700 rounded-full absolute -top-1 -right-1 m-auto shadow-lg">
                        </div>
                    </div>
                    </div>

                    <div class="md:hidden">
                        <button type="button"
                            class="block text-gray-800 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                                <path class="hidden"
                                    d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z" />
                                <path
                                    d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
                            </svg>
                        </button>
                    </div>

                </div>
                <div class="flex flex-col md:flex-row hidden md:block -mx-2">
                    <a href="#"
                        class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 py-2 px-2 md:mx-2">Home</a>
                    <a href="#"
                        class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 py-2 px-2 md:mx-2">About</a>
                    <a href="#"
                        class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 py-2 px-2 md:mx-2">Contact</a>
                </div>
                <div class=" flex space-x-5 justify-center items-center pl-2">

                    @auth

                    <div class="nav-item dropdown me-4 ms-auto d-lg-none">

                        <div class="nav-link nav-profile d-flex align-items-center " data-bs-toggle="dropdown">
                            <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"
                                style="width:35px;height:35px;">
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                        </div>

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow  p-3 mt-2">
                            <li>
                                <a class="dropdown-item d-flex align-items-center rounded-3" href="users-profile.html">
                                    <i class="bi bi-person"></i>
                                    <span>Perfil</span>
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center rounded-3" href="users-profile.html">
                                    <i class="bi bi-gear"></i>
                                    <span>Configuracion</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center rounded-3" href="pages-faq.html">
                                    <i class="bi bi-question-circle"></i>
                                    <span>Need Help?</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center rounded-3" href="#">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <span :href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </span>
                                    </form>
                                </a>
                            </li>

                        </ul>
                    </div>
                    @else
                    <a href="#"class="py-2 px-4 rounded-lg transition ease-in-out delay-150  bg-slate-900 hover:scale-105 hover:bg-opacity-90 duration-100 text-white">Inicia Sesion</a>
                    @endauth
                </div>

            </div>
        </nav>
        <!-- component -->
        <div class="relative isolate overflow-hidden bg-gray-900">
            <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
                aria-hidden="true">
                <defs>
                    <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1"
                        patternUnits="userSpaceOnUse">
                        <path d="M.5 200V.5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
                    <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                        stroke-width="0" />
                </svg>
                <rect width="100%" height="100%" stroke-width="0" fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
            </svg>
            <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]"
                aria-hidden="true">
                <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
                    style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
                </div>
            </div>
            <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-24 lg:flex lg:px-8 lg:py-32">
                <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
                    <section class="bg-white rounded-full px-3 py-2 "><img class="h-12 " src="public/assets/img/cnt.png"
                            alt="Your Company"></section>
                    <div class="mt-24 sm:mt-32 lg:mt-16">
                        <a href="#" class="inline-flex space-x-6">
                            <span
                                class="rounded-full bg-indigo-500/10 px-3 py-1 text-sm font-semibold leading-6 text-cyan-500 ring-1 ring-inset ring-indigo-500/20">What's
                                new</span>
                            <span
                                class="inline-flex items-center space-x-2 text-sm font-medium leading-6 text-gray-300">
                                <span>About us</span>
                                <svg class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl">YOUR GATEWAY TO THE WORLD
                        OF KNOWLEDGE</h1>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Explore the depths of scientific and research work
                        and stay informed of the latest developments in knowledge..</p>
                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="#"
                            class="rounded-md bg-orange-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">Get
                            started</a>
                        <a href="#" class="text-sm font-semibold leading-6 text-white">Learn more <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
                <div
                    class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
                    <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none mx-auto">
                        <img src="public/assets/img/SOS2.png" alt="App screenshot" width="2432" height="1442"
                            class="w-80 lg:w-[42rem]">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function selected() {
        var targeted = event.target;
        var clicked = targeted.parentElement;

        var child = clicked.children;
        console.log(child);

        for (let i = 0; i < child.length; i++) {
            if (child[i].classList.contains("text-white")) {
                console.log(child[i]);
                child[i].classList.remove("text-white", "bg-indigo-600");
                child[i].classList.add(
                    "text-gray-600",
                    "bg-gray-50",
                    "border",
                    "border-white"
                );
            }
        }

        targeted.classList.remove(
            "text-gray-600",
            "bg-gray-50",
            "border",
            "border-white"
        );
        targeted.classList.add("text-white", "bg-indigo-600");
    }

    function selectNew() {
        var newL = document.getElementById("list");
        newL.classList.toggle("hidden");

        document.getElementById("ArrowSVG").classList.toggle("rotate-180");
    }

    function selectedSmall() {
        var text = event.target.innerText;
        var newL = document.getElementById("list");
        var newText = document.getElementById("textClicked");
        newL.classList.add("hidden");
        document.getElementById("ArrowSVG").classList.toggle("rotate-180");
        newText.innerText = text;

        document.getElementById("s1").classList.remove("hidden");
    }
    </script>

    <!--
    <main>
        <nav class="men navbar navbar-light navbar-expand-lg border-0 sticky-top shadow-sm"
            style="background-color: #ffffff;">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <i class="bi-back"></i>
                    <span>Topic</span>
                </a>
                @auth

                <div class="nav-item dropdown me-4 ms-auto d-lg-none">

                    <div class="nav-link nav-profile d-flex align-items-center " data-bs-toggle="dropdown">
                        <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"
                            style="width:35px;height:35px;">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                    </div>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow  p-3 mt-2">
                        <li>
                            <a class="dropdown-item d-flex align-items-center rounded-3" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>Perfil</span>
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center rounded-3" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Configuracion</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center rounded-3" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center rounded-3" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <span :href="route('logout')" onclick="event.preventDefault();
            this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </span>
                                </form>
                            </a>
                        </li>

                    </ul>
                </div>
                @endauth
                <button class="navbar-toggler bg-dark p-1" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-dark"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.html#section_1">Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.html#section_2">Browse Topics</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.html#section_3">How it works</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.html#section_4">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.html#section_5">Contact</a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow shadow-none"
                                aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>



                    </ul>
                    @auth
                    <div class="nav-item dropdown pe-3 d-none d-lg-block">

                        <div class="nav-link nav-profile d-flex align-items-center " data-bs-toggle="dropdown">
                            <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"
                                style="width:30px;height:30px;">
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                        </div>

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow p-3 mt-3">
                            <li>
                                <a class="dropdown-item d-flex align-items-center rounded-3" href="users-profile.html">
                                    <i class="bi bi-person"></i>
                                    <span>Perfil</span>
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center rounded-3" href="users-profile.html">
                                    <i class="bi bi-gear"></i>
                                    <span>Configuracion</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center rounded-3" href="pages-faq.html">
                                    <i class="bi bi-question-circle"></i>
                                    <span>Need Help?</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center rounded-3" href="#">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <span :href="route('logout')" onclick="event.preventDefault();
            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </span>
                                    </form>
                                </a>
                            </li>

                        </ul>
                    </div>
                    @endauth
                </div>
            </div>
        </nav>
        @yield('content')
    </main>

    <footer class="site-footer section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-12 mb-4 pb-2">
                    <a class="navbar-brand mb-2" href="index.html">
                        <i class="bi-back"></i>
                        <span>Topic</span>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <h6 class="site-footer-title mb-3">Resources</h6>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Home</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">How it works</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">FAQs</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                    <h6 class="site-footer-title mb-3">Information</h6>

                    <p class="text-white d-flex mb-1">
                        <a href="tel: 305-240-9671" class="site-footer-link">
                            305-240-9671
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a href="mailto:info@company.com" class="site-footer-link">
                            info@company.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            English</button>

                        <ul class="dropdown-menu">
                            <li><button class="dropdown-item" type="button">Thai</button></li>

                            <li><button class="dropdown-item" type="button">Myanmar</button></li>

                            <li><button class="dropdown-item" type="button">Arabic</button></li>
                        </ul>
                    </div>

                    <p class="copyright-text mt-lg-5 mt-4">Copyright © 2048 Topic Listing Center. All rights reserved.
                        <br><br>Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a>
                        Distribution <a href="https://themewagon.com">ThemeWagon</a>
                    </p>

                </div>

            </div>
        </div>
    </footer>
-->
    <!--
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="public/assets/vendor/quill/quill.js"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>


    <script src="public/assets/js/main.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
