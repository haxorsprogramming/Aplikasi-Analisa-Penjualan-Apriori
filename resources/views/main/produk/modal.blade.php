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
                    <a href="javascript:void(0)" class="btn btn-primary">Update Data Produk</a>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>