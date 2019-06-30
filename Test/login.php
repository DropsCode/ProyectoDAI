<html>

<head>
  <link rel="stylesheet" href="css\login.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/login.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>


<body>
  <!--Header-Page-->
  <div class="header-container">
    <nav>
      <h1>Bienvenid@, Ingresa tus Datos</h1>
    </nav>
  </div>

  <!--Content-Page-->
  <form>
    <div class="login-container">

      <label for="textEmail">Correo Electronico</label>
      <input type="text" id="txtEmail" aria-describedby="emailHelp" placeholder="Ingresa tu Correo Electronico">
      <label for="textPasword">Contraseña</label>
      <input type="password" id="txtPassword" placeholder="Password">

      <div class="button-container">

        <button type="submit" id="submit">Entrar</button>
        <button type="submit" id="back">Volver</button>

      </div>

    </div>
  </form>

  <!--Footer-Page-->
  <div class="footer-container">
    <footer>
      <p>&copy Derechos Reservados</p>
    </footer>
  </div>

</body>

</html>
