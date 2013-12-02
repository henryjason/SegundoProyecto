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
										<li><a id="menu_usuario">Usuarios</a></li>
										<li><a id="menu_cursos">Cursos</a></li>
										<li><a id="menu_aulas">Aulas</a></li>
										<li><a id="menu_grupos">Grupos</a></li>
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

										<div class="container">


											<div class="row">


												<div class="col-md-4 col-md-offset-4">


													<div class="panel panel-default">



														<div class="panel-heading">
															<h3 class="panel-title">Gestion de cursos</h3>
														</div>
														<div class="panel-body">




															<form class="form-horizontal"  action="<?php echo base_url() ?>aulas/function_register" method="post" >
																<fieldset>


																	<!-- document input-->
																	<div class="control-group">
																		
																		Code : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="code_curso" type="text" placeholder="Code Curso"
																		class="input-xlarge"><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="button"  value="Obtener" id="obtener_curso" >
																		<p class="help-block"></p>
																	</div><br>


																	<!-- name input-->
																	<div class="control-group">
																	
																		Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="name_curso"  type="text" placeholder="Nombre Curso"
																		class="input-xlarge">
																		<p class="help-block"></p>
																	</div><br>

																	<!-- last name input-->
																	<div class="control-group">
																		
																		descripción: <input id="description_curso" type="text" placeholder="Descripcion"
																		class="input-xlarge">
																		<p class="help-block"></p>
																	</div><br>

																	
																</fieldset>
																<input  type="button"  value="Registrar" id="curso_registrar">
																<input  type="button"  value="Editar" id="curso_editar">
																<input  type="button"  value="Eliminar" id="curso_eliminar">
																
															</form>



														</div>
													</div>
												</div> <!--<div class="col-md-4 col-md-offset-4">-->





											</div>

										</div>	<!--contenedor cursos-->


									</div>  <!--fin del div cursos-->


									<div id="grupos">

										<div class="container">


											<div class="row">


												<div class="col-md-4 col-md-offset-4">


													<div class="panel panel-default">



														<div class="panel-heading">
															<h3 class="panel-title">Gestion de Grupos</h3>
														</div>
														<div class="panel-body">




															<form class="form-horizontal"  action="<?php echo base_url() ?>aulas/function_register" method="post" >
																<fieldset>


																	<!-- document input-->
																	<div class="control-group">
																		
																		Buscar Grupo: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="Busqueda_Grupo" type="text" placeholder="serch word"
																		class="input-xlarge"><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="button"  value="Obtener" id="obtener_grupo" >
																		<p class="help-block"></p>
																	</div><br>

																	<!-- categoria input -->
																	<div class="control-group">
																		
																		Cuatrimestre: &nbsp<select id="quarter" class="input-xlarge">
																			<option value="" selected="selected">(please select a choose)</option>
																			<option value="I">Primer Cuatrimestre</option>
																			<option value="II">Segundo Cuatrimestre</option>
																			<option value="III">Tercer Cuatrimestre</option>
																			

																		</select>
																	</div><br>



																	<!-- document input-->
																	<div class="control-group">
																		
																		ID Curso: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="id_curso_grupo" type="text" placeholder="ID Curso"
																		class="input-xlarge">
																		<p class="help-block"></p>
																	</div><br>


																	<!-- name input-->
																	<div class="control-group">
																	
																		Profesor: &nbsp&nbsp&nbsp<input id="id_prof_grupo"  type="text" placeholder="ID Profesor"
																		class="input-xlarge">
																		<p class="help-block"></p>
																	</div><br>

																	<!-- last name input-->
																	<div class="control-group">
																		
																		# Grupo: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="number_grupo" type="text" placeholder="# del Grupo"
																		class="input-xlarge">
																		<p class="help-block"></p>
																	</div><br>


																	<!-- username web-->
																	<div class="control-group">
																		
																		Enable: &nbsp&nbsp&nbsp&nbsp&nbsp<input type = "checkbox"  id = "enable_grupo" value = "habilitado" checked = "checked" />	
																	</div><br>

																	
																</fieldset>
																<input  type="button" name="funcion_editar" value="Registrar" id="grupo_registrar">
																<input  type="button" name="funcion_editar" value="Editar" id="grupo_editar">
																<input  type="button" name="funcion_editar" value="Eliminar" id="grupo_eliminar">
																
															</form>



														</div>
													</div>
												</div> <!--<div class="col-md-4 col-md-offset-4">-->





											</div>

										</div>	<!--contenedor grupos-->


									</div>  <!--fin div grupo-->





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

		$( "#menu_usuario" ).click(function() {

			document.getElementById('Usuario').style.display = '';
			document.getElementById('aulas').style.display = 'none'; 
			document.getElementById('Cursos').style.display = 'none'; 
			document.getElementById('grupos').style.display = 'none'; 

		});



		$( "#menu_cursos" ).click(function() {

			document.getElementById('Usuario').style.display = 'none';
			document.getElementById('aulas').style.display = 'none'; 
			document.getElementById('Cursos').style.display = ''; 
			document.getElementById('grupos').style.display = 'none'; 

		});

		$( "#menu_aulas" ).click(function() {

			document.getElementById('Usuario').style.display = 'none';
			document.getElementById('aulas').style.display = ''; 
			document.getElementById('Cursos').style.display = 'none'; 
			document.getElementById('grupos').style.display = 'none'; 

		});


		$( "#menu_grupos" ).click(function() {

			document.getElementById('Usuario').style.display = 'none';
			document.getElementById('aulas').style.display = 'none'; 
			document.getElementById('Cursos').style.display = 'none'; 
			document.getElementById('grupos').style.display = ''; 

		});


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


	<script>


			$("#code_curso, #id_curso_grupo").on('keyup', function () {

			var array_code = [];

			$.ajax({
				type: 'POST',
				url: '<?php echo base_url() ?>aulas/get_curso',
				data: {
					source1: document.getElementById('code_curso').value
				},

				success: function( data ) {


					var JSONCurso = eval('('+data+')');




					$(function() {




						for (var i = JSONCurso.length - 1; i >= 0; i--) {




							array_code[i] = JSONCurso[i].code;


						};


						$( "#code_curso, #id_curso_grupo" ).autocomplete({

							source: array_code

						});



						$("#obtener_curso").on("click", function () {


							for (var i = JSONCurso.length - 1; i >= 0; i--) {


								if(document.getElementById('code_curso').value == JSONCurso[i].code){

									document.getElementById('name_curso').value = JSONCurso[i].name;
									document.getElementById('description_curso').value = JSONCurso[i].description;
									

								}




							};

});//fin onchange #buscar_editar



});//fin  $(function() {



        }// fin de success

    });// fin function ajax


});//$("#id2").on('keypress', function () {


     $("#curso_registrar").on('click', function () {

		$.ajax({
			type: 'POST',
			url: '<?php echo base_url() ?>aulas/registrar_curso',
			data: {

				code: document.getElementById('code_curso').value,
				name: document.getElementById('name_curso').value,
				description: document.getElementById('description_curso').value
				
			},

			success: function( data ) {

				$(function() {

					alert('The course id: ' + data + ' se registro Correctamente');


});//fin  $(function() {



        }// fin de success

    });// fin function ajax


});//$("#id2").on('keypress', function () {



	$("#curso_eliminar").on('click', function () {

		$.ajax({
			type: 'POST',
			url: '<?php echo base_url() ?>aulas/eliminar_curso',
			data: {
				source1: document.getElementById('code_curso').value
			},

			success: function( data ) {



				$(function() {


					if(data == 1){
						document.getElementById('code_curso').value  = "";
						document.getElementById('name_curso').value = "";
						document.getElementById('description_curso').value = "";

					}else{
						alert("error al eliminar " + document.getElementById('code_curso').value);
					}



});//fin  $(function() {



        }// fin de success

    });// fin function ajax


});//$("#id2").on('keypress', function () {


	$("#curso_editar").on('click', function () {

		$.ajax({
			type: 'POST',
			url: '<?php echo base_url() ?>aulas/actualizar_curso',
			data: {
                
                code: document.getElementById('code_curso').value,
				name: document.getElementById('name_curso').value,
				description: document.getElementById('description_curso').value
			},

			success: function( data ) {




				$(function() {

					alert('The course id: ' + data + ' fue actualizado Correctamente');


});//fin  $(function() {



        }// fin de success

    });// fin function ajax


});//$("#id2").on('keypress', function () {

	</script>





	<script >

	$("#Busqueda_Grupo").on('keyup', function () {

			var array_grupo = [];

			$.ajax({
				type: 'POST',
				url: '<?php echo base_url() ?>aulas/get_grupo',
				data: {
					source1: document.getElementById('Busqueda_Grupo').value
				},

				success: function( data ) {


					var JSONgrupo = eval('('+data+')');




					$(function() {




						for (var i = JSONgrupo.length - 1; i >= 0; i--) {




							array_grupo[i] = JSONgrupo[i].course_id + " #" +JSONgrupo[i].group_number;


						};


						$( "#Busqueda_Grupo" ).autocomplete({

							source: array_grupo

						});



						$("#obtener_grupo").on("click", function () {


							for (var i = JSONgrupo.length - 1; i >= 0; i--) {


								if(document.getElementById('Busqueda_Grupo').value + " #"  + JSONgrupo[i].group_number == JSONgrupo[i].course_id + " #"  + JSONgrupo[i].group_number){

									document.getElementById('id_curso_grupo').value = JSONgrupo[i].course_id;
							
									

								}




							};

});//fin onchange #buscar_editar



});//fin  $(function() {



        }// fin de success

    });// fin function ajax


});//$("#id2").on('keypress', function () {





$("#id_prof_grupo").on('keyup', function () {

			var array_profid = [];


         


			$.ajax({
				type: 'POST',
				url: '<?php echo base_url() ?>aulas/get_user/Profesor',
				data: {
					source1: document.getElementById('id_prof_grupo').value
				},

				success: function( data ) {


					var JSONprofid = eval('('+data+')');




					$(function() {




						for (var i = JSONprofid.length - 1; i >= 0; i--) {




							array_profid[i] = JSONprofid[i].document_number;


						};


						$( "#id_prof_grupo" ).autocomplete({

							source: array_profid

						});


});//fin  $(function() {



        }// fin de success

    });// fin function ajax


});//$("#id2").on('keypress', function () {



	 $("#grupo_registrar").on('click', function () {

		$.ajax({
			type: 'POST',
			url: '<?php echo base_url() ?>aulas/registrar_grupo',
			data: {

				course_id: document.getElementById('id_curso_grupo').value,
				quarter: document.getElementById('quarter').value,
				professor_id: document.getElementById('id_prof_grupo').value,
				enabled: document.getElementById('enable_grupo').checked,
				number_grupo: document.getElementById('number_grupo').value
				
			},

			success: function( data ) {

				$(function() {

					alert('The group id: ' + data + ' se registro Correctamente');


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
		echo("<script language='JavaScript' type='text/javascript'>document.getElementById('Usuario').style.display = '';</script>"); 
		echo("<script language='JavaScript' type='text/javascript'>document.getElementById('aulas').style.display = 'none';</script>"); 
		echo("<script language='JavaScript' type='text/javascript'>document.getElementById('Cursos').style.display = 'none';</script>"); 
		echo("<script language='JavaScript' type='text/javascript'>document.getElementById('grupos').style.display = 'none';</script>"); 

		$username = "{$plogin['username']}";

		echo("<script language='JavaScript' type='text/javascript'>document.getElementById('login').innerHTML= '$username';</script>"); 

	} 

} ?>


</body>
</html>
