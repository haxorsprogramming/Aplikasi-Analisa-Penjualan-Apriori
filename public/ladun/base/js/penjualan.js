// route 

// vue object 
var appPenjualan = new Vue({
    el : "#divDataPenjualan",
    data : {

    },
    methods : {
        detailAtc : function(kdFaktur)
        {
            renderPage('app/penjualan/detail/'+kdFaktur, 'Detail Penjualan');
        }
    }
});
// inisialisasi 
$("#tblDataPenjualan").dataTable();