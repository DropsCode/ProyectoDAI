
$(document).ready(function() {

   $("#btnSubmit").on('click', function () {

        var userName = mayusculas(document.getElementById("txtName1").value);
        var userName2 = mayusculas(document.getElementById("txtSurName1").value);
        var userEmail = document.getElementById("txtEmail1").value;
        var userRut = document.getElementById("txtRut1").value;
        var userAdress = document.getElementById("txtAddress1").value;
        var userPass = document.getElementById("txtPass1").value;
        var userPassRe = document.getElementById("txtPassRe1").value;
    
        if(userName.length == 0 || userName2.length == 0 || userEmail.length == 0 || userRut.length == 0 || userAdress.length == 0 || userPass.length == 0  || userPassRe.length == 0){
          alert("Uno o más campos están vacíos, ingrese información")
        } else if (userName.length == 0 && userName2.length == 0 && userEmail.length == 0 && userRut.length == 0 && userAdress.length == 0 && userPass.length == 0  && userPassRe.length == 0){
          alert("Uno o más campos están vacíos, ingrese información")
        } else if (!soloLetras(userName)) {
          alert("El campo de nombre solo debe incluir letras")
        } else if (!soloLetras(userName2)) {
          alert("El campo de apellido solo debe incluir letras")
        }else if (userPass != userPassRe) {
          alert("Las contraseñas no coinciden, intente nuevamente")
        } 
        
        
        /*else if (userName.length == 0 || usernName2.length == 0 || userEmail.length == 0 || userRut.length == 0 || userAdress.length == 0 || userPass.length == 0 || userPassRe.length == 0) {
          alert("Uno o más campos están vacíos, ingrese información")
        }*/



      })
  
 
  
})


function soloLetras(a) {
  return /^[A-zÀ-ú]+$/.test(a)
}

function mayusculas(a) {
  return a.charAt(0).toUpperCase() + a.slice(1);
}


/*
$("#accept").on('click', function () {

    var userName = $("#txtName").val()
    var userEmail = $("#txtEmail").val()
    var userRut = $("#txtRut").val()
    var userPass = $("#txtPass").val()
    var userPassRe = $("#txtPassRe").val()

    if (userName.length == 0 && userRut.length == 0 && userEmail.length == 0 && userPass.length == 0 && userPassRe.length == 0) {
      alert("Uno o más campos están vacíos, ingrese información")
    } else if (userName.length == 0 || userRut.length == 0 || userEmail.length == 0 || userPass.length == 0 || userPassRe.length == 0) {
      alert("Uno o más campos están vacíos, ingrese información")
    } else if (!soloLetras(userName)) {
      alert("El campo de nombre solo debe incluir letras")
    } else if (userPass != userPassRe) {
      alert("Las contraseñas no coinciden, intente nuevamente")
    } else {
      alert("Usuario Creado Éxitosamente, Volviendo al Home")
      gohome()
    }

    
  })
  */