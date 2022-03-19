// route 
var rProsesLogin = server + "auth/login/proses";
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
    axios.post(rProsesLogin).then(function(res){
        
    }); 
}