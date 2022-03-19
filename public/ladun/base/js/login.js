// route 
var rProsesLogin = server + "auth/login/proses";
var rDashboard = server + "dashboard";
// vue object 
var loginApp = new Vue({
    el : '#divLogin',
    data : {},
    methods : {
        loginAtc : function()
        {
            loginProses();
        }
    }
});

// inisialisasi 
document.querySelector("#txtUsername").focus();

function loginProses()
{
    let username = document.querySelector("#txtUsername").value;
    let password = document.querySelector("#txtPassword").value;
    let ds = {'username':username, 'password':password}
    axios.post(rProsesLogin, ds).then(function(res){
        let obj = res.data;
        if(obj.status === "NO_USER"){
            pesanUmumApp('warning', 'No User .. !!', 'Tidak ada user terdaftar ..');
        }else if(obj.status === 'WRONG_PASSWORD'){
            pesanUmumApp('warning', 'Fail auth .. !!', 'Username / Password salah ..');
        }else{
            window.location.assign(rDashboard);
        }
    }); 
}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}