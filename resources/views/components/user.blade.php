<!doctype html>
<html lang="en">

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

    <link href="{{asset('assets/user/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/user/css/bootstrap-icons.css')}}" rel="stylesheet">

    <link href="{{asset('assets/user/css/templatemo-topic-listing.css')}}" rel="stylesheet">

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('ssets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="../assets/css/style.css" rel="stylesheet">

    <!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
</head>

<body id="top">

    <main>
        <nav class="navbar navbar-light navbar-expand-lg border-0 sticky-top shadow-sm"
            style="background-color: #ffffff;">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <i class="bi-back"></i>
                    <span>Topic</span>
                </a>

                <div class="nav-item dropdown me-4 ms-auto d-lg-none">

                        <div class="nav-link nav-profile d-flex align-items-center " data-bs-toggle="dropdown">
                            <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"
                                style="width:35px;height:35px;">
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                        </div><!-- End Profile Iamge Icon -->

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

                        </ul><!-- End Profile Dropdown Items -->
                    </div>

                <button class="navbar-toggler bg-dark p-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow shadow-none" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>



                    </ul>

                    <div class="nav-item dropdown pe-3 d-none d-lg-block">

                        <div class="nav-link nav-profile d-flex align-items-center " data-bs-toggle="dropdown">
                            <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"
                                style="width:30px;height:30px;">
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                        </div><!-- End Profile Iamge Icon -->

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

                        </ul><!-- End Profile Dropdown Items -->
                    </div><!-- End Profile Nav -->
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


    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.js')}}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js')}}"></script>

</body>

</html>
