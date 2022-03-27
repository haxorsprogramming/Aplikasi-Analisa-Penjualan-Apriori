// route 
var rProsesTambahProduk = server + "app/produk/tambah/proses";
var rGetDataProduk = server + "app/produk/data/res";
var rProsesUpdateProduk = server + "app/produk/update/proses";
var rProsesHapusProduk = server + "app/produk/hapus/proses";
var rProsesImportProduk = server +  "app/produk/import/proses";

// vue object 
var appProduk = new Vue({
    el : '#divDataProduk',
    data : {
        kdProdukEdit : ''
    },
    methods : {
        tambahProdukAtc : function()
        {
            $("#modalTambahProduk").modal("show");
            setTimeout(function(){
                document.querySelector("#txtNamaProduk").focus();
            }, 500);
        },
        editAtc : function(idProduk)
        {
            editProduk(idProduk);
        },
        prosesUpdateProdukAtc : function()
        {
            let kdProduk = appProduk.kdProdukEdit;
            let nama = document.querySelector("#txtNamaProdukEdit").value;
            let harga = document.querySelector("#txtHargaEdit").value;
            let kategori = document.querySelector("#txtKategoriEdit").value;
            let ds = {'kdProduk':kdProduk, 'nama':nama, 'harga':harga, 'kategori':kategori}
            axios.post(rProsesUpdateProduk, ds).then(function(res){
                $("#modalEditProduk").modal("hide");
                setTimeout(function(){
                    pesanUmumApp('success', 'Sukses', 'Data produk berhasil diupdate');
                    renderPage('app/produk/data');
                }, 300);
            });
        },
        prosesTambahProduk : function()
        {
            prosesTambahProduk();
        },
        deleteAtc : function(idProduk)
        {
            confirmQuest('info', 'Konfirmasi', 'Hapus produk ...?', function (x) {deleteConfirm(idProduk)});
        },
        importProdukAtc : function()
        {
            $("#modalImportProduk").modal("show");
        },
        prosesImportProdukAtc : function()
        {
            confirmQuest('info', 'Konfirmasi', 'Import produk... ?', function (x) {konfirmasiImport()});
        }
    }
});
// inisialisasi 
$("#tblDataProduk").dataTable();

function konfirmasiImport()
{
    axios.post(rProsesImportProduk).then(function(res){
        let pesan = "Produk berhasil di import, total "+res.data.totalProduk+" produk berhasil di import ..";
        $("#modalImportProduk").modal("hide");
        setTimeout(function(){
            pesanUmumApp('success', 'Sukses', pesan);
            renderPage('app/produk/data', 'Produk');
        }, 400);
    });
}

function deleteConfirm(idProduk)
{
    let ds = {'idProduk' : idProduk}
    axios.post(rProsesHapusProduk, ds).then(function(res){
        setTimeout(function(){
            pesanUmumApp('success', 'Sukses', 'Data produk berhasil dihapus');
            renderPage('app/produk/data', 'Produk');
        }, 10);
    });
}

function editProduk(idProduk)
{
    appProduk.kdProdukEdit = idProduk;
    let ds = {'idProduk' : idProduk}
    axios.post(rGetDataProduk, ds).then(function(res){
        $("#modalEditProduk").modal("show");
        document.querySelector("#txtNamaProdukEdit").value = res.data.nama_produk;
        document.querySelector("#txtHargaEdit").value = res.data.harga;
        document.querySelector("#txtKategoriEdit").value = res.data.kd_kategori;
        setTimeout(function(){
            document.querySelector("#txtNamaProdukEdit").focus();
        }, 500);
    });
}

function prosesTambahProduk()
{
    let nama = document.querySelector("#txtNamaProduk").value;
    let harga = document.querySelector("#txtHarga").value;
    let kategori = document.querySelector("#txtKategori").value;
    let ds = {'nama':nama, 'harga':harga, 'kategori':kategori}
    axios.post(rProsesTambahProduk, ds).then(function(res){
        $("#modalTambahProduk").modal("hide");
        setTimeout(function(){
            pesanUmumApp('success', 'Sukses', 'Data produk berhasil ditambahkan');
            renderPage('app/produk/data', 'Produk');
        }, 300);
       
    });
}