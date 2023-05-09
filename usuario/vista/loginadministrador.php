<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login-Admin</title>
    <link href="../publico/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>

</head>
    



<body style="background-color:#FF6833 ; class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">ADMINISTRADOR</h3>
                                </div>
                                <div class="card-body">
                                    <form action="../modelo/verificarUsuario.php" method="POST">
                                        <div class="form-floating mb-3  method=" POST">
                                            <input class="form-control" name="nombre_usu" id="" type="text" />
                                            <label for="inputEmail">NOMBRE</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="contrasena_usu" id="" type="password" />
                                            <label for="inputPassword">CONTRASEÑA</label>
                                        </div>

                                        <div>
                                            <input class="form-control" type="submit" value="Iniciar Sesión">
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="../publico/js/scripts.js"></script>
</body>

</html>
<?php
if(!empty($_GET['estado']))
{ 
	echo '<font color="red">El <b>nombre</b> o <b>contraseña</b> son Incorrectos.</font>';
}		
		
?>