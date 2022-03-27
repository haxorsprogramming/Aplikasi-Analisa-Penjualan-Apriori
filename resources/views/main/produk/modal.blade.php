<!-- modal tambah produk  -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalTambahProduk">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="company">Nama Produk</label>
                    <input type="text" class="form-control" id="txtNamaProduk">
                </div>
                <div class="form-group">
                    <label for="company">Harga</label>
                    <input type="text" class="form-control" id="txtHarga">
                </div>
                <div class="form-group">
                    <label for="company">Kategori</label>
                    <select class="form-control" id="txtKategori">
                        <option value="none">--- Pilih Kategori ---</option>
                        @foreach($dataKategori as $kategori)
                        <option value="{{ $kategori -> nama_kategori }}">{{ $kategori -> nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <a href="javascript:void(0)" class="btn btn-primary" @click="prosesTambahProduk()">Proses Tambah Produk</a>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- modal edit produk  -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalEditProduk">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="company">Nama Produk</label>
                    <input type="text" class="form-control" id="txtNamaProdukEdit">
                </div>
                <div class="form-group">
                    <label for="company">Harga</label>
                    <input type="text" class="form-control" id="txtHargaEdit">
                </div>
                <div class="form-group">
                    <label for="company">Kategori</label>
                    <select class="form-control" id="txtKategoriEdit">
                        <option value="none">--- Pilih Kategori ---</option>
                        @foreach($dataKategori as $kategori)
                        <option value="{{ $kategori -> nama_kategori }}">{{ $kategori -> nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <a href="javascript:void(0)" @click="prosesUpdateProdukAtc()" class="btn btn-primary">Update Data Produk</a>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- modal import produk  -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalImportProduk">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <p>
                        Produk dapat diimport melalui data eksternal dari file Microsoft Excel(.xlxs), perhatikan beberapa hal berikut agar proses import berjalan lancar
                    </p>
                    <ul>
                        <li>Import produk akan <b>Menghapus</b> seluruh data produk yang sudah ada.</li>
                        <li>Pastikan format field/record sesuai dengan header kolom.</li>
                        <li>Silahkan lihat format file import data produk di <a href="{{ asset('file_import/DATA_PRODUK.xlsx') }}"><b>disini</b></a>, atau bisa edit file tersebut.</li>
                        <li>Pastikan lokasi/nama file yg akan diimport ada di "public/file_import/DATA_PRODUK.xlsx", kesalahan penamaan & lokasi folder akan membuat proses import gagal.</li>
                        <li>Jika dirasa point-point diatas sudah terpenuhi silahkan lakukan proses import produk</li>
                    </ul>
                    <div style="text-align: center;">
                        <a href="javascript:void(0)" class="btn btn-info btn-lg waves-effect waves-light" @click="prosesImportProdukAtc()">Import produk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>