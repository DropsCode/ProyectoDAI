$(document).ready(function() {


  $("#accept").on('click', function() {
    var userName = mayusculas($("#txtName").val())
    var userLastName = mayusculas($("#txtLastName").val())
    var userEmail = $("#txtEmail").val()
    var userPass = $("#txtPass").val()
    var userPassRe = $("#txtPassRe").val()


    if (userName.length == 0 && userLastName.length == 0 && userEmail.length == 0 && userPass.length == 0 && userPassRe.length == 0) {
      alert("Uno o más campos están vacíos, ingrese información")
    } else if (userName.length == 0 || userLastName.length == 0 || userEmail.length == 0 || userPass.length == 0 || userPassRe.length == 0) {
      alert("Uno o más campos están vacíos, ingrese información")
    } else if (!soloLetras(userName)) {
      alert("El campo de nombre solo debe incluir letras")
    } else if (!soloLetras(userLastName)) {
      alert("El campo de apellido solo debe incluir letras")
    } else if (userPass != userPassRe) {
      alert("Las contraseñas no coinciden, intente nuevamente")
    } else {
      alert("Usuario creado con los siguientes datos: " + userName + " " + userLastName + " " + userEmail + " " + userPass + " " + userPassRe)
      alert("Volviendo al Home")
      window.top.close();

    }

  })

})

//función que retorna un booleano para validar si los nombres llevan solo letras
function soloLetras(a) {
  return /^[A-zÀ-ú]+$/.test(a)
}

//función para darle mayusculas a los nombres
function mayusculas(a) {
  return a.charAt(0).toUpperCase() + a.slice(1);
}