@include('layout.headerApp')

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content" id="mainApp">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">@{{ judulPage }}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Aplikasi Analisa Penjualan</a></li>
                                <li class="breadcrumb-item active">@{{ judulPage }}</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div id="divUtama">

                <!-- end row -->
            </div>


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    @include('layout.footerApp')