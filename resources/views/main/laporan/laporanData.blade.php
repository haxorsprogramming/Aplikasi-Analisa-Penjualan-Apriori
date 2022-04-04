<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Laporan Analisa</h4>
            <div class="table-responsive">
                <table class="table mb-0 table-hover" id="tblLaporan">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kd Pengujian</th>
                            <th>Nama Penguji</th>
                            <th>Waktu Pengujian</th>
                            <th>Support</th>
                            <th>Confidence</th>
                            <th>Total Pola Produk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dataPengujian as $pengujian)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ substr($pengujian -> kd_pengujian, 0, 5) }}</td>
                        <td>{{ $pengujian -> nama_penguji }}</td>
                        <td>{{ $pengujian -> created_at }}</td>
                        <td>{{ $pengujian -> min_supp }}</td>
                        <td>{{ $pengujian -> min_confidence }}</td>
                        <td>{{ $pengujian -> totalPolaProduk($pengujian -> kd_pengujian, $pengujian -> min_confidence) }}</td>
                        <td>
                            <a href="javascript:void(0)" onclick="keDetail('{{ $pengujian -> kd_pengujian }}')" class="btn btn-primary btn-sm">Detail</a>&nbsp;
                            <a href="{{ url('/apriori/analisa/cetak/') }}/{{ $pengujian -> kd_pengujian }}" target="new" class="btn btn-success btn-sm">Cetak</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<script>
    $("#tblLaporan").dataTable();

    function keDetail(kdPengujian)
    {
        renderPage('app/apriori/analisa/hasil/'+kdPengujian, 'Hasil Analisa');
    }

</script>