<!DOCTYPE html>
<html class="loading" lang="en">
<!-- BEGIN : Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description"
content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited
possibilities.">
<meta name="keywords"
    content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
<meta name="author" content="PIXINVENT">
<title>Login Page - Apex responsive bootstrap 4 admin template</title>
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
<link rel="stylesheet" href="../../../app-assets/css/pages/authentication.css">
<!-- END Page Level CSS-->
<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
<!-- END: Custom CSS-->

<!-- CSRF Token -->

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'MirandaSoft - Daily Report') }}</title>
</head>

<body
    class="vertical-layout vertical-menu 1-column auth-page navbar-static layout-dark layout-transparent bg-glass-1 blank-page"
    data-bg-img="bg-glass-1" data-menu="vertical-menu" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">
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
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <script src="../../../app-assets/vendors/js/switchery.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/notification-sidebar.js"></script>
    <script src="../../../app-assets/js/customizer.js"></script>
    <script src="../../../app-assets/js/scroll-top.js"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
    <!-- BEGIN: Custom CSS-->
    <script src="../../../assets/js/scripts.js"></script>
    <!-- END: Custom CSS-->
</body>
<!-- END : Body-->

</html>