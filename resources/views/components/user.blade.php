<!doctype html>
<html lang="en" class="h-full w-full bg-white fixed overflow-auto">

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
</head>

<body class="h-full overflow-auto overflow-x-hidden	bg-gray-50 ">
    <style>
    .men {
        padding-right: 0px !important;
        margin-right: 0px !important;
    }
    </style>

    <div class="w-full">
    <nav class="w-full  bg-white shadow px-4 py-3 absolute top-0 z-20">
    <div class="container flex items-center justify-between flex-wrap mx-auto">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
        <img src="{{ asset('public/assets/img/SOS2.png') }}" alt="App screenshot" width="54" height="54"
        class="fill-current h-12 w-12 mr-2">
            <span class="font-bold text-3xl tracking-tight text-blue-950 ">S.0.S</span>
        </div>
        <div class="block lg:hidden">
            <button
                class="flex items-center px-3 py-2 border rounded text-slate-900 border-slate-900 hover:text-slate-800 hover:border-slate-800">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full hidden lg:block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-lg lg:flex-grow">
                <a href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-slate-700 hover:text-white hover:bg-gray-900 mr-4 py-2 px-3 rounded">
                    Docs
                </a>
                <a href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-slate-700 hover:text-white hover:bg-gray-900 mr-4 py-2 px-3 rounded ">
                    Examples
                </a>
                <a href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-slate-700 hover:text-white hover:bg-gray-900 mr-4 py-2 px-3 rounded">
                    Blog
                </a>
            </div>
            <div class="flex justify-between space-x-2">
                <div class=" flex justify-between space-x-3 mr-2">
                    <svg class="cursor-pointer my-auto  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 "
                        width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z"
                            stroke="#1F2937" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M13.73 21C13.5542 21.3031 13.3019 21.5547 12.9982 21.7295C12.6946 21.9044 12.3504 21.9965 12 21.9965C11.6496 21.9965 11.3054 21.9044 11.0018 21.7295C10.6982 21.5547 10.4458 21.3031 10.27 21"
                            stroke="#1F2937" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div
                        class="relative cursor-pointer focus:outline-none my-auto focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 ">
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

                <a href="register"
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20">Registrar</a>
                <a href="login"
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none">Inicia
                    Sesion</a>
            </div>
        </div>
    </div>
    </nav>

        <div class="relative ">
        @yield('content')
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
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>


    <script src="public/assets/js/main.js"></script>-->
    <script src="{{asset('public/assets/vendor/quill/quill.js')}}"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>

    </script>

</body>

</html>
