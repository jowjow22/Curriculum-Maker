<?php 
session_start();
	if (!isset($_SESSION['cd_pessoa'])) {
		echo '<script>window.location="index.php"</script>';
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stepperPlugin/css/mstepper.min.css">

</head>
<body>

  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="img/office.jpg">
      </div>
      <a href="#user"><img class="circle" src="img/madara.gif"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#modal1" class="modal-trigger waves-effect waves-dark"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
  </ul>
  <a data-target="slide-out" class="sidenav-trigger btn"><i class="material-icons">menu</i></a>
	<div class="container">
		<form method="post" id="form-formacao">
			curso ou ensino:
			<input type="text" name="curso">
			instituicao de ensino:
			<input type="text" name="insti">
			data de inicio
			<input type="date" name="dt_ini">
			data de finalizaçao
			<input type="date" name="dt_fim">
			descricao(opcionao)
			<textarea name="desc"></textarea>
			<input type="submit" value="enviar">
		</form>
	</div>
	<!-- MODALS -->
  <div id="modal1" class="modal rounded modal1">
    <div class="modal-content">
		<ul class="stepper linear horizontal" style="min-height: 400px;">
		   <li class="step active">
		      <div class="step-title waves-effect">E-mail</div>
		      <div class="step-content">
		         <!-- Your step content goes here (like inputs or so) -->
		         <div class="step-actions">
		            <!-- Here goes your actions buttons -->
		            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
		         </div>
		      </div>
		   </li>

		   <li class="step">
		      <div class="step-title waves-effect">E-mail</div>
		      <div class="step-content">
		         <!-- Your step content goes here (like inputs or so) -->
		         <div class="step-actions">
		            <!-- Here goes your actions buttons -->
					<button class="waves-effect waves-dark btn next-step">CONTINUE</button>
					<button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
		         </div>
		      </div>
		   </li>

		   <li class="step">
		      <div class="step-title waves-effect">E-mail</div>
		      <div class="step-content">
		         <!-- Your step content goes here (like inputs or so) -->
		         <div class="step-actions">
		            <!-- Here goes your actions buttons -->
		            <button class="waves-effect waves-dark btn next-step modal-close">CONTINUE</button>
		            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
		         </div>
		      </div>
		   </li>
		</ul>
    </div>
  </div>
  <!-- *****MODALS END****** -->
	<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
	<script type="text/javascript" src="stepperPlugin/js/mstepper.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>