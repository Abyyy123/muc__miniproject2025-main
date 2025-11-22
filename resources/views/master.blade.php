<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>MUC Mini Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

    <style>
        body {
            padding-top: 80px !important; /* Space for fixed navbar */
        }
        header.header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            background: #fff;
        }
        .header .navbar-area {
            padding-top: 5px !important;
            padding-bottom: 5px !important;
        }
        .header .navbar-area .nav-link {
            padding-top: 10px !important;
            padding-bottom: 10px !important;
        }
    </style>
</head>
<body>
    <div class="preloader">
        <div class="loader">
            <div class="spinner">
                <div class="spinner-container">
                    <div class="spinner-rotator">
                        <div class="spinner-left">
                            <div class="spinner-circle"></div>
                        </div>
                        <div class="spinner-right">
                            <div class="spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="header fixed-top">
        <div class="navbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <h4 class="text-primary fw-bold">MUC Mini Project</h4>
                            </a>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="nav-link text-dark @if(request()->is('employees*')) active @endif" href="{{ url('employees') }}">Employees</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark @if(request()->is('proposal*')) active @endif" href="{{ url('proposal') }}">Proposal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark @if(request()->is('serviceused*')) active @endif" href="{{ url('serviceused') }}">Serviceused</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark @if(request()->is('timesheet*')) active @endif" href="{{ url('timesheet') }}">Timesheet</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="content-area" class="feature-section pt-3 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>

    <footer class="footer bg-dark">
        <div class="container">
            <div class="widget-wrapper">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="footer-widget text-center py-5">
                            <div class="logo mb-30">
                                <a href="{{ url('/') }}">
                                    <h4 class="text-white">MUC Mini Project</h4>
                                </a>
                            </div>
                            <p class="desc mb-30 text-white">Mini Project | Implementasi Multi-Database Laravel Module</p>
                            <ul class="socials d-flex justify-content-center list-unstyled">
                                <li><a href="#" class="text-white mx-2"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#" class="text-white mx-2"><i class="lni lni-twitter-filled"></i></a></li>
                                <li><a href="#" class="text-white mx-2"><i class="lni lni-instagram-filled"></i></a></li>
                                <li><a href="#" class="text-white mx-2"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrapper py-3 border-top border-secondary">
                <p class="text-center text-white-50 small mb-0">&copy; 2025 MUC Mini Project. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
