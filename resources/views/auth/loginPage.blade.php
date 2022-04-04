@include('layout.headerAuth')
<body class="bg-primary bg-pattern">
    <div class="home-btn d-none d-sm-block">
        <a href="index.html"><i class="mdi mdi-home-variant h2 text-white"></i></a>
    </div>

    <div class="account-pages my-5 pt-5" id="divLogin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <a href="index.html" class="logo"><img src="{{ asset('ladun/apaxy/') }}/images/logo-light.png" height="24" alt="logo"></a>
                        <h5 class="font-size-16 text-white-50 mb-4">Aplikasi Analisa Penjualan</h5>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="p-2">
                                <h5 class="mb-5 text-center">Login ke dalam Aplikasi</h5>
                                <form class="form-horizontal" action="index.html">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-4">
                                                <label for="txtUsername">Username</label>
                                                <input type="text" class="form-control" id="txtUsername" placeholder="Enter username">
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="txtPassword">Password</label>
                                                <input type="password" class="form-control" id="txtPassword" placeholder="Enter password">
                                            </div>

                                            <div class="mt-4">
                                                <a class="btn btn-success btn-block waves-effect waves-light" href="javascript:void(0)" @click="loginAtc()">Log In</a>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end Account pages -->

    @include('layout.footerAuth')