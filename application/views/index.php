<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>

	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url() ?>css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo base_url() ?>css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo base_url() ?>css/grid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo base_url() ?>css/prettyPhoto.css" type="text/css" media="screen"> 

	<script src="<?php echo base_url() ?>js/java/jquery-1.6.3.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>js/java/cufon-yui.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>js/java/cufon-replace.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>js/java/Vegur_700.font.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>js/java/Vegur_400.font.js" type="text/javascript"></script> 
	<script src="<?php echo base_url() ?>js/java/FF-cash.js" type="text/javascript"></script> 
	<script src="<?php echo base_url() ?>js/java/script.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>js/java/easyTooltip.js" type="text/javascript" ></script>
	<script src="<?php echo base_url() ?>js/java/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>js/java/hover-image.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>js/java/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>js/java/query.easing.1.3.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>js/java/tms-0.3.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>js/java/tms_presets.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>js/java-andrey/java.js" type="text/javascript"></script>


	<link href="<?php echo base_url() ?>js/login/bootstrap.min.css" rel="stylesheet" media="screen"> 
	<script src="<?php echo base_url() ?>js/login/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>js/login/style.css">


	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<link rel="stylesheet" href="/resources/demos/style.css">

	






	<script>


	function login(plogin) {

		document.getElementById("login").innerHTML= plogin;


	}
	</script>
	

</head>
<body id="page1">
	<div class="extra">


		<!--==============================header=================================-->
		<header>






			<div class="main">
				<div class="bg-1">
					<h1><a href="index.php">Sistemas Operativo II</a></h1>
				</div>
				<nav>
					<div class="menu-bg-tail">
						<div class="menu-bg">
							<div class="container_12">
								<div class="grid_12">
									<ul class="menu">
										<li class="item"><a class="active" href="<?php echo base_url() ?>aulas">Home</a></li>
										<li><a href= " <?php echo base_url() ?>aulas/login">Login</a></li>
										<li><a href="<?php echo base_url() ?>aulas/register">Register</a></li>
										<li><a href="">Admin</a></li>
										<li class="last"><a href="">Contacts</a></li>
										<li class="item-1"><a  id="login" href="hpl">User</a></li>
									</ul>
									<div class="clear"></div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
				</nav>
				

			</div>
		</header>
		<!--==============================content================================-->
		<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November 21, 2011!</div>
			<div class="main">
				<div class="bg-2">
					<div class="content-padding-1">
						<div class="container_12">
							<div class="wrapper">

								<div id="administrador">

									<ul class="menu">
										<li><a href="">Usuarios</a></li>
										<li><a href="">Aulas</a></li>
										<li><a href="">Cursos</a></li>
										<li><a href="">Grupos</a></li>
									</ul><br> 

									<div id="Usuario">

										<div class="container">


											<div class="row">


												<div class="col-md-4 col-md-offset-4">


													<div class="panel panel-default">



														<div class="panel-heading">
															<h3 class="panel-title">Gestion de Usuarios</h3>
														</div>
														<div class="panel-body">




															<form class="form-horizontal"  action="<?php echo base_url() ?>aulas/function_register" method="post" >
																<fieldset>

																	<!-- categoria input -->
																	<div class="control-group">
																		<label class="control-label">Usurio:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
																		<select id="country2" name="categoria_editar" class="input-xlarge">
																			<option value="" selected="selected">(please select a choose)</option>
																			<option value="Profesor">Profesor</option>
																			<option value="Student">Estudiante</option>
																			<option value="admin">Administrativo</option>

																		</select>
																	</div><br>


																	<!-- document input-->
																	<div class="control-group">
																		<label class="control-label">ID:</label>&nbsp
																		<input id="id2" name="ID_editar" type="text" placeholder="ID"
																		class="input-xlarge"><input type="button" name="funcion_editar" value="Obtener" id="button_obtener" >
																		<p class="help-block"></p>
																	</div><br>

																	<!-- name input-->
																	<div class="control-group">
																		<label class="control-label">Name:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
																		<input id="name2" name="name_editar" type="text" placeholder="Name"
																		class="input-xlarge">
																		<p class="help-block"></p>
																	</div><br>

																	<!-- last name input-->
																	<div class="control-group">
																		<label class="control-label">Last Name:</label>&nbsp&nbsp&nbsp&nbsp
																		<input id="lastname2" name="last_name_editar" type="text" placeholder="Last Name"
																		class="input-xlarge">
																		<p class="help-block"></p>
																	</div><br>

																	<!-- username web-->
																	<div class="control-group">
																		<label class="control-label">Username:</label>&nbsp&nbsp&nbsp&nbsp&nbsp
																		<input id="user2" name="username_editar" type="text" placeholder="Username" class="input-xlarge">	
																	</div><br>

																	<!-- Password input-->
																	<div class="control-group">
																		<label class="control-label">Password:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
																		<input id="pass2" name="password_editar" type="text" placeholder="Password"
																		class="input-xlarge">
																	</div><br>

																	<!-- Email input-->
																	<div class="control-group">
																		<label class="control-label">Email:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
																		<input id="email2" name="email_editar" type="text" placeholder=" Email"	class="input-xlarge">
																	</div><br>

																</fieldset>
																<input  type="button" name="funcion_editar" value="Registrar" id="button_registrar">
																<input  type="button" name="funcion_editar" value="Editar" id="button_editar">
																<input  type="button" name="funcion_editar" value="Eliminar" id="button_eliminar">
																
															</form>



														</div>
													</div>
												</div> <!--<div class="col-md-4 col-md-offset-4">-->





											</div>

										</div>	<!--contenedor-->

									</div><!--fin Usuario-->



                                    <div id="aulas">

                                    	Hola Aulas


                                    </div>


                                    <div id="Cursos">

                                    	Hola cursos


                                    </div>

                                    <div id="grupos">

                                    	Hola grupos


                                    </div>




								</div> <!--fin div administrador-->


							</div> <!--este es el wrapper principal-->


						</div>

					</div>
				</div>
			</div>


			<div class="block"></div>

		</section>





	</div>


	<!--==============================footer=================================-->
	<footer>



		<script>






		$("#id2").on('keyup', function () {

			var array_id = [];

			$.ajax({
				type: 'POST',
				url: '<?php echo base_url() ?>aulas/get_user/' + document.getElementById('country2').value,
				data: {
					source1: document.getElementById('id2').value
				},

				success: function( data ) {



					var parsedJSON = eval('('+data+')');



					$(function() {




						for (var i = parsedJSON.length - 1; i >= 0; i--) {




							array_id[i] = parsedJSON[i].document_number;


						};


						$( "#id2" ).autocomplete({

							source: array_id

						});



						$("#button_obtener").on("click", function () {


							for (var i = parsedJSON.length - 1; i >= 0; i--) {


								if(document.getElementById('id2').value == parsedJSON[i].document_number){

									document.getElementById('name2').value = parsedJSON[i].first_name;
									document.getElementById('lastname2').value = parsedJSON[i].last_name;
									document.getElementById('user2').value = parsedJSON[i].username;
									document.getElementById('pass2').value = parsedJSON[i].password;
									document.getElementById('email2').value = parsedJSON[i].email;

								}




							};

});//fin onchange #buscar_editar



});//fin  $(function() {



        }// fin de success

    });// fin function ajax


});//$("#id2").on('keypress', function () {




	$("#button_eliminar").on('click', function () {

		$.ajax({
			type: 'POST',
			url: '<?php echo base_url() ?>aulas/eliminar_user/' + document.getElementById('country2').value,
			data: {
				source1: document.getElementById('id2').value
			},

			success: function( data ) {



				$(function() {


					if(data == 1){
						document.getElementById('id2').value  = "";
						document.getElementById('name2').value = "";
						document.getElementById('lastname2').value = "";
						document.getElementById('user2').value = "";
						document.getElementById('pass2').value = "";
						document.getElementById('email2').value = "";

					}



});//fin  $(function() {



        }// fin de success

    });// fin function ajax


});//$("#id2").on('keypress', function () {




	$("#button_registrar").on('click', function () {

		$.ajax({
			type: 'POST',
			url: '<?php echo base_url() ?>aulas/registrar_user/' + document.getElementById('country2').value,
			data: {

				ID: document.getElementById('id2').value,
				name: document.getElementById('name2').value,
				last_name: document.getElementById('lastname2').value,
				password: document.getElementById('pass2').value,
				username: document.getElementById('user2').value,
				email: document.getElementById('email2').value
			},

			success: function( data ) {




				$(function() {

					alert('The user id: ' + data + ' se registro Correctamente');


});//fin  $(function() {



        }// fin de success

    });// fin function ajax


});//$("#id2").on('keypress', function () {


	$("#button_editar").on('click', function () {

		$.ajax({
			type: 'POST',
			url: '<?php echo base_url() ?>aulas/actualizar_user/' + document.getElementById('country2').value,
			data: {

				ID: document.getElementById('id2').value,
				name: document.getElementById('name2').value,
				last_name: document.getElementById('lastname2').value,
				password: document.getElementById('pass2').value,
				username: document.getElementById('user2').value,
				email: document.getElementById('email2').value
			},

			success: function( data ) {




				$(function() {

					alert('The user id: ' + data + ' fue actualizado Correctamente');


});//fin  $(function() {



        }// fin de success

    });// fin function ajax


});//$("#id2").on('keypress', function () {


	</script>



</footer>


<script type="<?php echo base_url() ?>text/javascript"> Cufon.now(); </script>


<?php if (!isset($login)){

	echo("<script language='JavaScript' type='text/javascript'>document.getElementById('administrador').style.display = 'none';</script>"); 


		//echo('<script language="JavaScript" type="text/javascript">alert("Login faile");</script>'); 

}else{
	echo("<script language='JavaScript' type='text/javascript'>document.getElementById('administrador').style.display = 'none';</script>"); 


	foreach($login as $plogin) {

		echo("<script language='JavaScript' type='text/javascript'>document.getElementById('administrador').style.display = '';</script>"); 
		

		$username = "{$plogin['username']}";

		echo("<script language='JavaScript' type='text/javascript'>document.getElementById('login').innerHTML= '$username';</script>"); 

	} 

} ?>


</body>
</html>
