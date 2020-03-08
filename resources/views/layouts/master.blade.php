
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/ubold/layouts/material/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Tue, 01 Jan 2019 16:38:21 GMT -->
<head>
        <meta charset="utf-8" />
        <title>UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

        <!-- Plugins css -->
        <link href="{{ asset('assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

        @yield('title')
        @yield('style')

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            @include('layouts.navbar')

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Navigation</li>
                            <li>
                                <a href="/home">
                                    <i class="fe-home"></i>
                                    <span> Home </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('users.index')}}">
                                    <i class="fe-users"></i>
                                    <span> Manage User </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('categories.index')}}">
                                    <i class="dripicons-tags"></i>
                                    <span> Manage Categories </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('books.index')}}">
                                    <i class="fe-book"></i>
                                    <span> Manage Books </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('orders.index')}}">
                                    <i class="icon-basket-loaded"></i>
                                    <span> Manage Order </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        @yield('body')

                    </div> <!-- container -->

                </div> <!-- content -->

                @include('layouts.footer')

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js')}}"></script>

        @yield('script')

        <!-- App js-->
        <script src="{{ asset('assets/js/app.min.js')}}"></script>
        
    </body>
</html>