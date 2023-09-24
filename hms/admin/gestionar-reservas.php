<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Patients | Appointment History</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-6.css"/>
	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				

					<?php include('include/header.php');?>
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Usuarios  | Reservas Citas Medicas</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Usuarios </span>
									</li>
									<li class="active">
										<span>Reservas Citas Medicas</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									
									<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">#</th>
												<th class="hidden-xs">Nombre Doctor</th>
												<th>Nombre Paciente</th>
												<th>Especializacion</th>
												<th>Precio Consulta</th>
												<th>Reserva Medica Fecha / Hora </th>
												<th>Reserva Medica Fecha Creacion  </th>
												<th>Estado Actual</th>
												
												
											</tr>
										</thead>
										<tbody>

											<tr>
												<td>1</td>
												<td>Lucas Flores</td>
												<td>Pablo Gutierrez</td>
												<td>Medicina General</td>
												<td>50</td>
												<td>2023-06-23/10:00</td>
												<td>2023-06-22/14:12</td>
												<td>Activo</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Jorge Alvarez</td>
												<td>Marvin Mamani</td>
												<td>Odontologia</td>
												<td>60</td>
												<td>2023-06-20/11:00</td>
												<td>2023-06-17/17:12</td>
												<td>Activo</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Jorge Alvarez</td>
												<td>Rosa Peña</td>
												<td>Odontologia</td>
												<td>60</td>
												<td>2023-06-16/15:30</td>
												<td>2023-06-17/18:31</td>
												<td>Activo</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Luisa Bustamante</td>
												<td>Armando Rodriguez</td>
												<td>Laboratorio</td>
												<td>100</td>
												<td>2023-06-05/09:30</td>
												<td>2023-06-02/10:12</td>
												<td>Activo</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Lucas Flores</td>
												<td>Ernesto Chavez</td>
												<td>Medicina General</td>
												<td>50</td>
												<td>2023-06-03/16:45</td>
												<td>2023-06-01/12:12</td>
												<td>Activo</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<p align="center">                            
 <button class="btn btn-primary waves-effect waves-light w-lg">Imprimir Reporte Reservas</button></p>  
								</div>
						
						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
