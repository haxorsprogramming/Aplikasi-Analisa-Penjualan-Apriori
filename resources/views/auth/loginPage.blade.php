
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Aplikasi Analisa Penjualan - Login Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->

        <!-- Bootstrap Css -->
        <link href="{{ asset('ladun/apaxy/') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('ladun/apaxy/') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('ladun/apaxy/') }}/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

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

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="text-md-right mt-3 mt-md-0">
                                                            <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                                        </div>
                                                    </div>
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

        <!-- JAVASCRIPT -->
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="{{ asset('ladun/apaxy/') }}/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('ladun/apaxy/') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('ladun/apaxy/') }}/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('ladun/apaxy/') }}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('ladun/apaxy/') }}/libs/node-waves/waves.min.js"></script>

        <script src="{{ asset('ladun/apaxy/') }}/js/app.js"></script>
        <script>
            const server = "{{ url('') }}/";
        </script>
        <script src="{{ asset('ladun/base/') }}/js/login.js"></script>

    </body>
</html>
