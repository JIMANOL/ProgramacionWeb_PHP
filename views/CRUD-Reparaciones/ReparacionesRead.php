<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Reparaciones</title>
    <meta name="description" content="Autos">

    <!-- External CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/et-line.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/plyr.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icon-114x114.png">

    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.min.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Preloader -->
    <div class="loader-wrap" id="loader-wrap">
        <div class="cssload-loader"></div>
    </div>
    <!-- Preloader End -->

    <!-- Navigation -->
        <nav class="navbar navbar-default" data-spy="affix" data-offset-top="60">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <img src="images/logo.png" alt="logo del sitio">
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right" id="one-page-nav">
                    <li><a href="index.php">Inicio</a></li>
                    <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Usuarios
					</a>
					<ul  class="dropdown-menu" aria-labelledby="navbarDropdown">
					   <li><a class="dropdown-item" href="login.php">Iniciar sesión</a></li>
					   <li><a class="dropdown-item" href="#">Otro</a></li>
					</ul>
					</li>
                    <li><a href="Clientes.php">Clientes</a></li>
                    <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdown_reparaciones" role="button" data-bs-toggle="dropdown" aria-expanded="false">Reparaciones
					</a>
					<ul  class="dropdown-menu" aria-labelledby="navbarDropdown_ventas">
					   <li><a class="dropdown-item" href="ReparacionesInsert.php">Registrar Reparacion</a></li>
					   <li><a class="dropdown-item" href="ReparacionesRead.php">Historial de Reparaciones</a></li>
					   <li><a class="dropdown-item" href="ReparacionesUpdate.php">Actualizar Reparaciones</a></li>
					   <li><a class="dropdown-item" href="ReparacionesDelete.php">Eliminar Reparaciones</a></li>
					</ul>
					</li>
                    
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdown_ventas" role="button" data-bs-toggle="dropdown" aria-expanded="false">VENTAS
					</a>
					<ul  class="dropdown-menu" aria-labelledby="navbarDropdown_ventas">
					   <li><a class="dropdown-item" href="registrarVenta.php">Registrar Venta</a></li>
					   <li><a class="dropdown-item" href="actualizarVenta.php">Actualizar Venta</a></li>
					   <li><a class="dropdown-item" href="revisarVenta.php">Revisar Ventas</a></li>
					</ul>
					</li>
					
                    <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdown_ventas" role="button" data-bs-toggle="dropdown" aria-expanded="false">EMPLEADOS
					</a>
					<ul  class="dropdown-menu" aria-labelledby="navbarDropdown_ventas">
					   <li><a class="dropdown-item" href="registrarEmpleado.php">Registrar Empleado</a></li>
					   <li><a class="dropdown-item" href="actualizarEmpleado.php">Actualizar Empleado</a></li>
					   <li><a class="dropdown-item" href="revisarEmpleado.php">Revisar Empleados</a></li>
					   <li><a class="dropdown-item" href="eliminarEmpleado.php">Eliminar Empleado</a></li>
					   <li><a class="dropdown-item" href="registrarPuesto.php">Registrar Puesto</a></li>
					   <li><a class="dropdown-item" href="actualizarPuesto.php">Actualizar Puesto</a></li>
					   <li><a class="dropdown-item" href="revisarPuesto.php">Revisar Puestos</a></li>
					   <li><a class="dropdown-item" href="eliminarPuesto.php">Eliminar Puesto</a></li>
					</ul>
					</li>

                    <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Autos
					</a>
					<ul  class="dropdown-menu" aria-labelledby="navbarDropdown">
					   <li><a class="dropdown-item" href="altAutos.php">Alta</a></li>
					   <li><a class="dropdown-item" href="updateAutos.php">Modificación</a></li>
					</ul>
					</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Navigation End -->

    <div class="main-wrap"> 

            <!-- Contact area -->
        <div id="aa" class="section contact-area">
            <div class="map-wrap">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 right-image " >
                           <div class="overlay-black"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-wrap text-white">
			
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-xs-12">
                            <div class="section-header style-2">
                                <h3 class="section-title">Historial de Reparaciones</h3>
								<br/>
								<table border="10">
								<tr>
									<th class="col-md-3" style="text-align:center;">FECHA</th>
									<th class="col-md-1" style="text-align:center;">HORAS</th>
									<th class="col-md-2" style="text-align:center;">ID-COCHE</th>
									<th class="col-md-3" style="text-align:center;">ID-MECANICO</th>
									<th class="col-md-3" style="text-align:center;">ID-CLIENTE</th>
								</tr>
								
								 <?PHP
									  require_once "php/cls_Autos.php"; 
									  $sql = "SELECT fecha, horas, id_coche , id_mecanico , id_cliente 
											  FROM reparaciones;";
									  $objAutos = new cls_Autos();
									  $r = $objAutos->listAutos($sql);
									  while($r <> null)
									  {
										echo "<tr>";
										echo "<th class='col-md-3' style='text-align:center;'>$r[0]</th>";
										echo "<th class='col-md-1' style='text-align:center;'>$r[1]</th>";
										echo "<th class='col-md-2' style='text-align:center;'>$r[2]</th>";
										echo "<th class='col-md-3' style='text-align:center;'>$r[3]</th>";
										echo "<th class='col-md-3' style='text-align:center;'>$r[4]</th>";
										echo "</tr>";
                                        $r = $objAutos->sigAutos();										
									  }
									  $objAutos->CerrarConn();
									  ?>
		</table>
                            </div>
                            
                        </div>
                    </div>
                </div>
				
            </div>
        </div>
        <!-- Contact area end -->
    </div>

    <footer>
        <!-- Footer copyrgiht and navigation -->
        <div class="copyright-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <p class="copyright">Copyright 2021 @ Gpo 186601 - <a href="https://toluca.tecnm.mx/" target="new">ITTOLUCA</a> -</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.localScroll.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/plyr.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
