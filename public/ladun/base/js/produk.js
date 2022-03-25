// route 
var rProsesTambahProduk = server + "app/produk/tambah/proses";
var rGetDataProduk = server + "app/produk/data/res";
// vue object 
var appProduk = new Vue({
    el : '#divDataProduk',
    data : {

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
            let ds = {'idProduk' : idProduk}
            axios.post(rGetDataProduk, ds).then(function(res){
                console.log(res.data);
                $("#modalEditProduk").modal("show");
                document.querySelector("#txtNamaProdukEdit").value = res.data.nama_produk;
                document.querySelector("#txtHargaEdit").value = res.data.harga;
                document.querySelector("#txtKategoriEdit").value = res.data.kd_kategori;
                setTimeout(function(){
                    document.querySelector("#txtNamaProdukEdit").focus();
                }, 500);
            });
            
        },
        prosesTambahProduk : function()
        {
            prosesTambahProduk();
        }
    }
});
// inisialisasi 
$("#tblDataProduk").dataTable();

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
            renderPage('app/produk/data');
        }, 300);
       
    });
}