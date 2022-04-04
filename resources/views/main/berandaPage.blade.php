<div class="row">
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <h5 class="font-size-14">Total Transaksi</h5>
                    </div>
                    <div class="avatar-xs">
                        <span class="avatar-title rounded-circle bg-primary">
                            <i class="dripicons-box"></i>
                        </span>
                    </div>
                </div>
                <h4 class="m-0 align-self-center">{{ $totalPenjualan }}</h4>

            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <h5 class="font-size-14">Total Produk</h5>
                    </div>
                    <div class="avatar-xs">
                        <span class="avatar-title rounded-circle bg-primary">
                            <i class="dripicons-briefcase"></i>
                        </span>
                    </div>
                </div>
                <h4 class="m-0 align-self-center">{{ $totalProduk }}</h4>

            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <h5 class="font-size-14">Avg. Harga Produk</h5>
                    </div>
                    <div class="avatar-xs">
                        <span class="avatar-title rounded-circle bg-primary">
                            <i class="dripicons-tags"></i>
                        </span>
                    </div>
                </div>
                <h4 class="m-0 align-self-center">Rp. {{ number_format($rataRata) }}</h4>

            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <h5 class="font-size-14">Total User</h5>
                    </div>
                    <div class="avatar-xs">
                        <span class="avatar-title rounded-circle bg-primary">
                            <i class="dripicons-cart"></i>
                        </span>
                    </div>
                </div>
                <h4 class="m-0 align-self-center">1</h4>

            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-4">Transaksi Terakhir</h4>

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID Transaksi</th>
                                <th scope="col">Waktu Transaksi</th>
                                <th scope="col">Total Produk</th>
                                <th scope="col">Nominal Transaksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($transaksiTerakhir as $tt)
                        <tr>
                            <td>{{ $loop -> iteration }}</td>
                            <td>{{ substr($tt -> no_faktur, 0, 5) }}</td>
                            <td>{{ $tt -> getCreatedAt($tt -> no_faktur) }}</td>
                            <td>{{ $tt -> hitungTotalQt($tt -> no_faktur) }}</td>
                            <td>{{ $loop -> iteration }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>