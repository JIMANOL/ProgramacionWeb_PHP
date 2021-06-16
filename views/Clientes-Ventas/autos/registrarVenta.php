<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autos</title>
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
                    <li><a href="#r">Reparaciones</a></li>
                    
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdown_ventas" role="button" data-bs-toggle="dropdown" aria-expanded="false">VENTAS
					</a>
					<ul  class="dropdown-menu" aria-labelledby="navbarDropdown_ventas">
					   <li><a class="dropdown-item" href="registrarVenta.php">Registrar Venta</a></li>
					   <li><a class="dropdown-item" href="actualizarVenta.php">Actualizar Venta</a></li>
					   <li><a class="dropdown-item" href="revisarVenta.php">Revisar Ventas</a></li>
					</ul>
					</li>
					
                    <li><a href="#e">Empleados</a></li>
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
			<?PHP
			    //$modelo = $_POST["modelo"];
				if(isset($_POST['modelo']) == null)
				{
			?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-xs-12">
                            <div class="section-header style-2">
                                <h3 class="section-title">Venta de Autos</h3>
                            </div>
                            <form id="frmRegVenta" class="contact-form" action="registrarVenta.php" method="post">
                                <div class="form-group">
									<select class="form-control" id= "modelo" name="modelo">
									  <option value="-1" selected >Selecciona el modelo:</option>
									  <?PHP
									  require_once "php/cls_Autos.php";
									  //objeto para autos  |   0    1      2  
									  $sql = "SELECT DISTINCT id, marca, modelo FROM modelo;";
									  $objAutos = new cls_Autos();
									  $r = $objAutos->listAutos($sql);
									  while($r <> null)
									  {
										echo "<option value='$r[0]'> $r[1] : $r[2]</option>";
                                        $r = $objAutos->sigAutos();										
									  }
									  $objAutos->CerrarConn();
									  ?>
									  <!-- 
									  <option value="Uno">Uno</option>
									  <option value="Dos">Dos</option> -->
									</select>
								</div>
								<p>
								<div class="form-group">
									<select class="form-control" id= "estado" name="estado">
									  <option value="-1" selected >Selecciona el estado:</option>
									  <option value='1'>Nuevo</option>
									  <option value='0'>Usado</option>
									</select>
								</div>
								<p>
                                <input id="unidades" type="number" name="unidades" placeholder="Unidades a comprar:" required>
                                </p>
                                <p>
                                <input id="precio" type="number" name="precio" placeholder="Total a pagar:" required>
                                </p>								
                                <button type="submit" class="btn"> Registar Venta!</button>
                            </form>
                        </div>
                    </div>
                </div>
				<?PHP
				}else{
					/*recarga la pag, ahora si existe las varibles de 
					POST*/
					$mod = $_POST["modelo"];
					$est = $_POST["estado"];
					if($mod == -1 || $est == -1) //-1 NO HA SELECIONADO NADA MODELO
					{
			     ?>
				<div class="container">
                    <div class="row">
                        <div class="col-md-5 col-xs-12">
                            <div class="section-header style-2">
                                <h3 class="section-title">Venta de Autos</h3>
                            </div>
                            <form id="frmAltaAutos" class="contact-form" action="registrarVenta.php" method="post">
                                <div class="form-group">
									<select class="form-control" id= "modelo" name="modelo">
									  <option value= '-1' selected >Selecciona el modelo:</option>
									  <?PHP
									  require_once "php/cls_Autos.php";
									  //objeto para autos  |   0    1      2  
									  $sql = "SELECT DISTINCT id, marca, modelo FROM modelo;";
									  $objAutos = new cls_Autos();
									  $r = $objAutos->listAutos($sql);
									  while($r <> null)
									  {
										echo "<option value='$r[0]'> $r[1] : $r[2]</option>";
                                        $r = $objAutos->sigAutos();										
									  }
									  $objAutos->CerrarConn();
									  
									  if($mod == -1)
										{
											echo"<div class='col-sm-4'>
												<small id='modeloHelp' class='text-danger'>
												Debes seleccionar un modelo de lista
												</small>
												</div>";
										}
									  
									  ?>
									  <!-- 
									  <option value="Uno">Uno</option>
									  <option value="Dos">Dos</option> -->
									</select>
								</div>
								<p>
								<div class="form-group">
									<select class="form-control" id= "estado" name="estado">
									  <option value="-1" selected >Selecciona el estado:</option>
									  <option value='1'>Nuevo</option>
									  <option value='0'>Usado</option>
									</select>
								</div>
								<?PHP
									  if($est == -1)
										{
											echo"<div class='col-sm-4'>
												<small id='estadoHelp' class='text-danger'>
												Debes seleccionar un estado de lista
												</small>
												</div>";
										}
									?>
								<p>
                                <input id="unidades" type="number" name="unidades" placeholder="Unidades a comprar:" required>
                                </p>
                                <p>
                                <input id="precio" type="number" name="precio" placeholder="Total a pagar:" required>
                                </p>								
                                <button type="submit" class="btn"> Registar Venta!</button>
                            </form>
                        </div>
                    </div>
                </div>	
				
				<?PHP
					}
					else{
						$mod = $_POST['modelo'];
						$est = $_POST['estado'];
						$num = $_POST['unidades'];
						$pre = $_POST['precio'];
						
						require_once "php/cls_Autos.php";
						require_once "php/utiles.php";
						
						$objUtiles = new utiles();
						$objAutos = new cls_Autos();
                        if($num>0){
							if($pre>0){
								if ($est == 1){
									$sql = "INSERT INTO coches_venta VALUES ('','$mod','Nuevo',$num,$pre,'1');";
								}
								else{
									$sql = "INSERT INTO coches_venta VALUES ('','$mod','Usado',$num,$pre,'1');";
								}
								$r = $objAutos->insertVentas($sql);
								if($r == "")
									$objUtiles->Msgbox("'REGISTRO EXITOSO!'");
								else
									$objUtiles->Msgbox("'ERROR al registrar'");
							}
							else{
							  $objUtiles->Msgbox("'No te puedo regalar tu compra!!'");
							}
						}
						else{
							$objUtiles->Msgbox("'Para que lo registras si no te voy a vender nada!!!'");
						}
							
					}
				if(!($mod == -1 || $est == -1)) //-1 NO HA SELECIONADO NADA MODELO
				{
				?>
				
				<div class="container">
                    <div class="row">
                        <div class="col-md-5 col-xs-12">
                            <div class="section-header style-2">
                                <h3 class="section-title">Venta de Autos</h3>
                            </div>
                            <form id="frmRegVenta" class="contact-form" action="registrarVenta.php" method="post">
                                <div class="form-group">
									<select class="form-control" id= "modelo" name="modelo">
									  <option value="-1" selected >Selecciona el modelo:</option>
									  <?PHP
									  require_once "php/cls_Autos.php";
									  //objeto para autos  |   0    1      2  
									  $sql = "SELECT DISTINCT id, marca, modelo FROM modelo;";
									  $objAutos = new cls_Autos();
									  $r = $objAutos->listAutos($sql);
									  while($r <> null)
									  {
										echo "<option value='$r[0]'> $r[1] : $r[2]</option>";
                                        $r = $objAutos->sigAutos();										
									  }
									  $objAutos->CerrarConn();
									  ?>
									  <!-- 
									  <option value="Uno">Uno</option>
									  <option value="Dos">Dos</option> -->
									</select>
								</div>
								<p>
								<div class="form-group">
									<select class="form-control" id= "estado" name="estado">
									  <option value="-1" selected >Selecciona el estado:</option>
									  <option value='1'>Nuevo</option>
									  <option value='0'>Usado</option>
									</select>
								</div>
								<p>
                                <input id="unidades" type="number" name="unidades" placeholder="Unidades a comprar:" required>
                                </p>
                                <p>
                                <input id="precio" type="number" name="precio" placeholder="Total a pagar:" required>
                                </p>								
                                <button type="submit" class="btn"> Registar Venta!</button>
                            </form>
                        </div>
                    </div>
                </div>
				
				<?PHP
				}
				}
				?>
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
