// route 

// insialisasi 
var mainApp = new Vue({
    el : '#mainApp',
    data : {

    },
    methods : {

    }
});

function renderPage(page)
{
    $("#divUtama").html("Memuat ...");
    $("#divUtama").load(server + page);
}

renderPage('dashboard/beranda');

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}
