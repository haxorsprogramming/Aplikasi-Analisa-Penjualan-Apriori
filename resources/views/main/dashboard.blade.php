<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard - Aplikasi Analisa Penjualan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('ladun/apaxy/') }}/images/favicon.ico">

    <!-- slick css -->
    <link href="{{ asset('ladun/apaxy/') }}/libs/slick-slider/slick/slick.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('ladun/apaxy/') }}/libs/slick-slider/slick/slick-theme.css" rel="stylesheet" type="text/css" />

    <!-- jvectormap -->
    <link href="{{ asset('ladun/apaxy/') }}/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('ladun/apaxy/') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('ladun/apaxy/') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('ladun/apaxy/') }}/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body data-topbar="dark" data-layout="horizontal">

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('ladun/apaxy/') }}/images/logo-sm-dark.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('ladun/apaxy/') }}/images/logo-dark.png" alt="" height="19">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('ladun/apaxy/') }}/images/logo-sm-light.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('ladun/apaxy/') }}/images/logo-light.png" alt="" height="19">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm mr-2 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="mdi mdi-magnify"></span>
                        </div>
                    </form>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ml-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{ asset('ladun/apaxy/') }}/images/users/avatar-1.jpg" alt="Header Avatar">
                            <span class="d-none d-sm-inline-block ml-1">Shane</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            
                            <a class="dropdown-item" href="{{ url('/auth/logout') }}"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="topnav">
            <div class="container-fluid">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">
                                    <i class="mdi mdi-storefront mr-2"></i>Dashboard
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-flip-horizontal mr-2"></i>Data Master <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-layout">
                                        <a href="layouts-topbar-light.html" class="dropdown-item">Data Produk</a>
                                        <a href="layouts-boxed-width.html" class="dropdown-item">Data Penjualan</a>
                                    </div>
                                </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apaxy</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 class="font-size-14">Number of Sales</h5>
                                        </div>
                                        <div class="avatar-xs">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="dripicons-box"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <h4 class="m-0 align-self-center">1,753</h4>
                                    <p class="mb-0 mt-3 text-muted"><span class="text-success">1.23 % <i class="mdi mdi-trending-up mr-1"></i></span> From previous period</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 class="font-size-14">Sales Revenue</h5>
                                        </div>
                                        <div class="avatar-xs">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="dripicons-briefcase"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <h4 class="m-0 align-self-center">Rp. 45,253</h4>
                                    <p class="mb-0 mt-3 text-muted"><span class="text-success">2.73 % <i class="mdi mdi-trending-up mr-1"></i></span> From previous period</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 class="font-size-14">Average Price</h5>
                                        </div>
                                        <div class="avatar-xs">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="dripicons-tags"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <h4 class="m-0 align-self-center">Rp. 12.74</h4>
                                    <p class="mb-0 mt-3 text-muted"><span class="text-danger">4.35 % <i class="mdi mdi-trending-down mr-1"></i></span> From previous period</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 class="font-size-14">Product Sold</h5>
                                        </div>
                                        <div class="avatar-xs">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="dripicons-cart"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <h4 class="m-0 align-self-center">20,781</h4>
                                    <p class="mb-0 mt-3 text-muted"><span class="text-success">7.21 % <i class="mdi mdi-trending-up mr-1"></i></span> From previous period</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->

                    <!-- end row -->




                    <!-- end row -->


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Latest Transaction</h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 50px;">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheckall">
                                                            <label class="custom-control-label" for="customCheckall"></label>
                                                        </div>
                                                    </th>
                                                    <th scope="col" style="width: 60px;"></th>
                                                    <th scope="col">ID & Name</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <img src="{{ asset('ladun/apaxy/') }}/images/users/avatar-2.jpg" alt="user" class="avatar-xs rounded-circle" />
                                                    </td>
                                                    <td>
                                                        <p class="mb-1 font-size-12">#AP1234</p>
                                                        <h5 class="font-size-15 mb-0">David Wiley</h5>
                                                    </td>
                                                    <td>02 Nov, 2019</td>
                                                    <td>Rp. 1,234</td>
                                                    <td>1</td>

                                                    <td>
                                                        Rp. 1,234
                                                    </td>
                                                    <td>
                                                        <i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> Confirm
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                                                        <button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2022 © Apaxy.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    

    <!-- JAVASCRIPT -->
    <script src="{{ asset('ladun/apaxy/') }}/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('ladun/apaxy/') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('ladun/apaxy/') }}/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('ladun/apaxy/') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('ladun/apaxy/') }}/libs/node-waves/waves.min.js"></script>

    <!-- apexcharts -->
    <script src="{{ asset('ladun/apaxy/') }}/libs/apexcharts/apexcharts.min.js"></script>

    <script src="{{ asset('ladun/apaxy/') }}/libs/slick-slider/slick/slick.min.js"></script>

    <!-- Jq vector map -->
    <script src="{{ asset('ladun/apaxy/') }}/libs/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('ladun/apaxy/') }}/libs/jqvmap/maps/jquery.vmap.usa.js"></script>


    <script src="{{ asset('ladun/apaxy/') }}/js/app.js"></script>

</body>

</html>