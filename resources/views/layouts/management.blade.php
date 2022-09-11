<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('agents/assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('agents/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('agents/assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('agents/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('agents/assets/bundles/datatables/datatables.min.css') }}">

    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
    <style>
        @media (max-width: 900px) {
            .hideSidebar {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <!-- <div class="loader"></div> -->
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg nav_b" style="height: 15vh;"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li>
                            <a href="#" onclick="document.getElementById('mainsidebar').classList.toggle('hideSidebar')" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn">
                                <i style="color: #424242" data-feather="menu"></i>
                            </a>
                        </li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>

                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown dropdown-list-toggle">
                        <a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle">

                            <i style="color: #424242" data-feather="mail"></i>
                            <message-component :id="6"></message-component>
                        </a>
                    </li>

                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="/agents/assets/img/agent-user-avatar.png" class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <!-- <div class="dropdown-title">HELLO auth()->user()->firstname</div> -->
                            <div class="dropdown-title">HELLO Opeyemi</div>
                            <a href="/agent/profile" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="/agent/logout" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>

            </nav>
            <div class="main-sidebar sidebar-style-2 hideSidebar" id="mainsidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="/agent">
                            <!-- <img alt="image" src="assets/img/logo.png" class="header-logo" />  -->
                            <span class="logo-name">SMART FORCE </span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                        <li class="dropdown active">
                            <a href="/management" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="hexagon"></i><span>Users</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="/management/users">All</a></li>
                                <li><a class="nav-link" href="/management/users/verified">Verified</a></li>
                                <li><a class="nav-link" href="/management/users/pending">Pending</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="monitor"></i><span>Jobs</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="/management/jobs">All Jobs</a></li>
                                <li><a class="nav-link" href="/management/job/add">Add</a></li>
                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="monitor"></i><span>Industries</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="/management/job-categories">All Industries</a></li>
                                <li><a class="nav-link" href="/management/job-categories/add">Add</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="monitor"></i><span>Workers</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="/management/assigned">All</a></li>
                            </ul>
                        </li>


                    </ul>
                </aside>
            </div>
            <div class="main-content" onclick="hideSidebar()">



                @yield('content')

            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    <a href="">Smart Force</a></a>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script> -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/featherIcons.js') }}"></script>
    <script src="{{ asset('agents/assets/bundles/datatables/datatables.min.js') }}"></script>


    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    @yield("scripts")
    <script>
        $(document).ready(function() {
            // $.noConflict()
            $('#jobsTable').DataTable();

            $(".menu-toggle").on("click", function() {
                const thisParent = $(this).parent()
                thisParent.children(".dropdown-menu")[0].classList.toggle("showTipatipa")
            })

            $(".mydropdownToggle").on("click", function() {
                const thisParent = $(this).parent()
                thisParent.children(".dropdown-menu")[0].classList.toggle("showTipatipa")
            })
        });
        feather.replace();

        function hideSidebar() {
            const sidebar = document.getElementById('mainsidebar')

            if (sidebar.classList.contains("hideSidebar")) {} else {
                document.getElementById('mainsidebar').classList.toggle('hideSidebar')

            }
        }
    </script>




</body>


<!-- /management/admin  21 Nov 2019 03:47:04 GMT -->

</html>