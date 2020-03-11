<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="stepperPlugin/css/mstepper.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<meta charset="utf-8">
</head>
<body>
<div class="container">
	<div class="row mt-5">
		<div class="col s12 z-depth-5  rounded">
			<form action="" method="post">
			<ul class="stepper linear horizontal">
			   <li class="step active">
			      <div class="step-title waves-effect">Passo 1</div>
			      	<div class="step-content">
			      	<blockquote><strong>Informações Basicas</strong></blockquote>
				        <div class="input-field col s6">
				          <input id="nome" type="text" name="nome" class="validate" required>
				          <label for="nome">Nome e sobrenome</label>
				        </div>
				       	<div class="input-field col s6">
				          <input id="profissao" name="profissao" type="text" class="validate" required>
				          <label for="profissao">Profissão</label>
				        </div>
				       	
			         <div class="step-actions">
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
			         </div>
			      </div>
			   </li>
			</ul>
			</form>
		</div>
	</div>
</div>
<script src="stepperPlugin/js/mstepper.min.js"></script>
<script src="materialize/js/materialize.min.js"></script>
<script>
   var stepper = document.querySelector('.stepper');
   var stepperInstace = new MStepper(stepper, {
      // options
      firstActive: 0 // this is the default
   })
</script>
</body>
</html>