$(document).ready(function() {


  $("#submit").on('click', function() {
    var userEmail = $("#txtEmail").val()
    var userPass = $("#txtPassword").val()

    if (userEmail.length == 0 && userPass.length == 0) {
      alert("Uno o más campos están vacíos, ingrese información")
    } else if (userEmail.length == 0 || userPass.length == 0) {
      alert("Uno o más campos están vacíos, ingrese información")
    } else {
      alert("Usuario ingresado correctamente")
      alert("Volviendo al Home")
      window.top.close();
    }
  })
})