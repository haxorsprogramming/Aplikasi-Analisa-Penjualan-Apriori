<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Detail Penjualan</h4>
            <p class="card-title-desc">
                No Faktur : <strong>{{ $kdFaktur }}</strong>
            </p>

            <div class="table-responsive">
                <table class="table mb-0 table-hover" id="tblDetailPenjualan">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kd Produk</th>
                            <th>Nama Produk</th>
                            <th>Qt</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataPenjualan as $penjualan)
                        <tr>
                            <td>{{ $loop -> iteration }}</td>
                            <td>{{ substr($penjualan -> kd_barang, 0, 5) }}</td>
                            <td>{{ $penjualan -> dataProduk($penjualan -> kd_barang) -> nama_produk}}</td>
                            <td>{{ $penjualan -> qt }}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<script src="{{ asset('ladun/base/') }}/js/detailPenjualan.js"></script>