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
            console.log(idProduk);
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
    console.log(nama);
}