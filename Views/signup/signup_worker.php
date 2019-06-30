<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ayuda.Me - Oficios</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="http://localhost/dai/Views/signup/js/signup_b.js"></script>
    
    
    
    <?php include('css/signup_css.php')?>

</head>

<body>

    <nav class="navbar navbar-invisible">

    </nav>


    
    <div class="container">
 

            <div class="row">

                <div class="col-md-12">

                    <h1 class="text-center">Registro de Trabajador</h1>
 
                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupForm">

                        <!--Nombre-->
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="txtName" id="txtName1" placeholder="Ingresa tu Nombre" />
                        </div>

                        <!--Apellido-->
                        <div class="form-group">
                            <label>Apellido</label>
                            <input type="text" class="form-control" name="txtSurName" id="txtSurName1" placeholder="Ingresa tu Apellido" />
                        </div>


                        <!--Email-->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="txtEmail" id="txtEmail1" placeholder="Ingresa tu Email" />
                        </div>

                        <!--RUT-->
                        <div class="form-group">
                            <label>RUT</label>
                            <input type="text" class="form-control" name="txtRut"  id="txtRut1" placeholder="Ingresa tu RUT" />
                        </div>

                        <!--Dirección-->
                        <div class="form-group">
                            <label>Dirección</label>
                            <input type="text" class="form-control" name="txtAddress" id="txtAddress1" placeholder="Ingresa tu Dirección" />
                        </div>



                        <!--Comuna-->
                        <div class="form-group">
                            <label>Comuna</label>
                                <select class="form-control" name="idCommune" id=""/>
                                    <option selected value="0">Escoja...</option>
                                        <?php
                                            for($i=0; $i<count($comms); $i++){
                                                $comm = $comms[$i];
                                                echo "<option value='$comm->COD_COMUNNE'>$comm->COD_NAME_COMM</option>";}
                                        ?>
                                </select>
                        </div>

                        <!--Oficio-->
                        <div class="form-group">
                            <label>Oficio</label>
                                <select class="form-control" name="idProfession" id=""/>
                                    <option selected value="0">Escoja...</option>
                                        <?php
                                            for($i=0; $i<count($profs); $i++){
                                                $prof = $profs[$i];
                                                echo "<option value='$prof->COD_PROFESSION'>$prof->NAME_PROFESSION</option>";}
                                        ?>
                                </select>
                        </div>


                        <!--Contraseña-->
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" name="txtPass" id="txtPass1" placeholder="Contraseña" />
                        </div>


                        <!--Repetir Contraseña-->
                        <div class="form-group">
                            <label>Repetir Contraseña</label>
                            <input type="password" class="form-control" name="txtPassRe" id="txtPassRe1" placeholder="Repetir Contraseña" />
                        </div>
                        
                        <div class="form-group text-center">
                        <div class="checkbox">
					 
                                <label>
                                    <input type="checkbox" value="0" /> Acepto los Términos y Servicios
                                </label>
                            </div> </div> 
                        

                        <button type="submit" name="signup_worker" value="Submit" class="btn btn-secondary btn-lg center-block" id="btnSubmit">
                                Submit
                            </button>
                  


                    </form>

                </div>




            

        </div>



    <!-- Bootstrap core JavaScript -->

</body>

</html>

