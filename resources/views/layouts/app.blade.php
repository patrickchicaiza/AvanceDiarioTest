<!DOCTYPE html>
<html class="loading" lang="en">

<head>
    <!-- APEX-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description"
    content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
    content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../../../app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900"
        rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/chartist.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/layout-dark.css">
    <link rel="stylesheet" href="../../../app-assets/css/plugins/switchery.css">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/dashboard1.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->
<!-- END APEX>>>>>>>>>>>>>>>>-->

<!-- CSRF Token -->

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'MirandaSoft - Daily Report') }}</title>


</head>

<body class="vertical-layout vertical-menu 2-columns  navbar-static layout-dark layout-transparent bg-glass-1"
    data-bg-img="bg-glass-1" data-menu="vertical-menu" data-col="2-columns">



    <!-- APEX -->

    <nav class="navbar navbar-expand-lg navbar-light header-navbar navbar-static">
        <div class="container-fluid navbar-wrapper">
            <div class="navbar-header d-flex">
                <div class="navbar-toggle menu-toggle d-xl-none d-block float-left align-items-center justify-content-center"
                    data-toggle="collapse"><i class="ft-menu font-medium-3"></i></div>
                <ul class="navbar-nav">
                    @guest
                    @else
                    <li class="nav-item mr-2 d-none d-lg-block"><a class="nav-link apptogglefullscreen"
                            id="navbar-fullscreen" href="javascript:;"><i class="ft-maximize font-medium-3"></i></a>
                    </li>
                    <li> <a class="navbar-brand" href="{{ url('#') }}">

                            Daily Report

                        </a>
                    </li>




                    <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="javascript:"><i
                                class="ft-search font-medium-3"></i></a>
                        <div class="search-input">
                            <div class="search-input-icon"><i class="ft-search font-medium-3"></i></div>
                            <input class="input" type="text" placeholder="Explore Apex..." tabindex="0"
                                data-search="template-search">
                            <div class="search-input-close"><i class="ft-x font-medium-3"></i></div>
                            <ul class="search-list"></ul>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
            <div class="navbar-container">
                <div class="collapse navbar-collapse d-block" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        @guest
                        @else
                        <li class="dropdown nav-item mr-1"><a
                                class="nav-link dropdown-toggle user-dropdown d-flex align-items-end"
                                id="dropdownBasic2" href="javascript:;" data-toggle="dropdown">
                                <div class="user d-md-flex d-none mr-2"><span class="text-right">{{
                                        Auth::user()->name }}</span><span
                                        class="text-right text-muted font-small-3">Available</span>
                                </div><img class="avatar" src="../../../app-assets/img/portrait/small/avatar-s-1.png"
                                    alt="avatar" height="35" width="35">
                            </a>
                            <div class="dropdown-menu text-left dropdown-menu-right m-0 pb-0"
                                aria-labelledby="dropdownBasic2"><a class="dropdown-item" href="app-chat.html">
                                    <div class="d-flex align-items-center"><i
                                            class="ft-message-square mr-2"></i><span>Chat</span></div>
                                </a><a class="dropdown-item" href="page-user-profile.html">
                                    <div class="d-flex align-items-center"><i class="ft-edit mr-2"></i><span>Edit
                                            Profile</span></div>
                                </a><a class="dropdown-item" href="app-email.html">
                                    <div class="d-flex align-items-center"><i class="ft-mail mr-2"></i><span>My
                                            Inbox</span></div>
                                </a>
                                <div class="dropdown-divider"></div><a class="dropdown-item"
                                    href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                    <div class="d-flex align-items-center"><i
                                            class="ft-power mr-2"></i><span>Logout</span></div>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">

                                    @csrf

                                </form>
                            </div>
                        </li>
                        <li class="nav-item d-none d-lg-block mr-2 mt-1"><a class="nav-link notification-sidebar-toggle"
                                href="javascript:;"><i class="ft-align-right font-medium-3"></i></a></li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Navbar (Header) Ends-->

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!-- END APEX-->
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @guest
    @else
    <div class="wrapper">


        <!-- main menu-->
        <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
        <div class="app-sidebar menu-fixed" data-background-color="" data-image="" data-scroll-to-active="true">
            <!-- main menu header-->
            <!-- Sidebar Header starts-->
            <div class="sidebar-header">
                <div class="logo clearfix"><a class="logo-text float-left" href="index.html">
                        <div class="logo-img"><img src="../../../app-assets/img/logo.png" alt="Apex Logo" /></div>
                        <span class="text">APEX</span>
                    </a><a class="nav-toggle d-none d-lg-none d-xl-block" id="sidebarToggle" href="javascript:;"><i
                            class="toggle-icon ft-toggle-right" data-toggle="expanded"></i></a><a
                        class="nav-close d-block d-lg-block d-xl-none" id="sidebarClose" href="javascript:;"><i
                            class="ft-x"></i></a></div>
            </div>
            <!-- Sidebar Header Ends-->
            <!-- / main menu header-->
            <!-- main menu content-->
            <div class="sidebar-content main-menu-content">
                <div class="nav-container">
                    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                        <li class=" nav-item"><a href="app-taskboard.html"><i class="ft-file-text"></i><span
                                    class="menu-title" data-i18n="Task Board">New Report</span></a>
                            <ul class="menu-content">
                                <li><a href="{{ route('forms.index') }}"><i
                                            class="ft-arrow-right submenu-icon"></i><span class="menu-item"
                                            data-i18n="Basic">Form</span></a>
                                </li>
                                <li><a href="{{ route('details.index') }}"><i
                                            class="ft-arrow-right submenu-icon"></i><span class="menu-item"
                                            data-i18n="Extended">Detail</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class=" nav-item"><a href="https://pixinvent.ticksy.com/" target="_blank"><i
                                    class="ft-life-buoy"></i><span class="menu-title"
                                    data-i18n="Support">Users</span></a>
                            <ul class="menu-content">
                                <li><a href="{{ route('users.index') }}"><i
                                            class="ft-arrow-right submenu-icon"></i><span class="menu-item"
                                            data-i18n="Basic">User</span></a>
                                </li>
                                <li><a href="{{ route('roles.index') }}"><i
                                            class="ft-arrow-right submenu-icon"></i><span class="menu-item"
                                            data-i18n="Extended">Role</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="{{ route('clients.index') }}"><i class="ft-layers"></i><span
                                    class="menu-title" data-i18n="Cards">Client</span></a>
                        </li>
                        <li class="nav-item"><a href="{{ route('projects.index') }}"><i class="ft-copy"></i><span
                                    class="menu-title" data-i18n="Pages">Project</span></a>
                        </li>
                        <li class="nav-item"><a href="{{ route('platforms.index') }}"><i class="ft-calendar"></i><span
                                    class="menu-title" data-i18n="Calendar">Platform</span></a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- main menu content-->
            <div class="sidebar-background"></div>
            <!-- main menu footer-->
            <!-- include includes/menu-footer-->
            <!-- main menu footer-->
            <!-- / main menu-->
        </div>

        @endguest
        <div class="main-panel">
            <!-- BEGIN : Main Content-->
            <div class="main-content">
                <div class="content-overlay"></div>
                <div class="content-wrapper">
                    <!-- YIELD used to define a section in a layout and is constantly used to get content from a child page unto a master page-->
                    <main class="py-4">

                        <div class="container">

                            @yield('content')

                        </div>
                    </main>
                    <!-- END Yield-->
                </div>
            </div>
            <!-- END : End Main Content-->

            <!-- BEGIN : Footer-->


            <footer class="footer undefined undefined">
                <p class="clearfix text-muted m-0"><span>Copyright &copy; 2023 &nbsp;</span><a
                        href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink"
                        target="_blank">MirandaSoft</a><span class="d-none d-sm-inline-block">, All rights
                        reserved.</span></p>
            </footer>
            <!-- End : Footer-->
            <!-- Scroll to top button -->
            <button class="btn btn-primary scroll-top" type="button"><i class="ft-arrow-up"></i></button>

        </div>

        <!-- START Notification Sidebar-->

        <!-- END Notification Sidebar-->
        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>


    </div>
    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <script src="../../../app-assets/vendors/js/switchery.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../../app-assets/vendors/js/chartist.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/notification-sidebar.js"></script>
    <script src="../../../app-assets/js/customizer.js"></script>
    <script src="../../../app-assets/js/scroll-top.js"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/dashboard1.js"></script>
    <!-- END PAGE LEVEL JS-->
    <!-- BEGIN: Custom CSS-->
    <script src="../../../assets/js/scripts.js"></script>
    <!-- END: Custom CSS-->

</body>

</html>