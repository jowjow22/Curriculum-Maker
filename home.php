<?php 
session_start();
	if (!isset($_SESSION['cd_pessoa'])) {
		session_destroy();
		echo '<script>window.location="index.php"</script>';
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stepperPlugin/css/mstepper.min.css">

</head>
<body>
	<!-- SIDENAV {-->
<ul id="slide-out" class="sidenav">
	<!-- SIDENAV HEADER -->
    <li><div class="user-view">
      <div class="background">
        <img src="img/office.jpg">
      </div>
      <a href="#user"><img class="circle" src="img/madara.gif"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <!-- SIDENAV BODY -->
	<li><a class="subheader"><i class="material-icons">assignment</i>Cadastro de Informações</a></li>
    <li><div class="divider"></div></li>
    <li><a href="#modal1" class="modal-trigger waves-effect waves-dark tooltipped" data-position="right" data-tooltip="Para cadastrar mais de uma formação, basta clicar no botão com icone +"><i class="material-icons">school</i>Formação</a></li>
    <li><a href="#modal2" class="modal-trigger waves-effect waves-dark"><i class="material-icons">work</i>Experiência</a></li>
    <li><a href="#modal3" class="modal-trigger waves-effect waves-dark"><i class="material-icons">bar_chart</i>Habilidades</a></li>
    <li><a href="#modal4" class="modal-trigger waves-effect waves-dark"><i class="material-icons">supervisor_account	</i>Referências</a></li>
<!-- COLLAPSIBLE -->
    	<li class="no-padding">
    		<ul class="collapsible collapsible-accordion">
    			<li>
    				<a class="collapsible-header"><i class="material-icons">folder arrow_drop_down</i>Currículos</a>
    				<div class="collapsible-body">
    					<ul>
    						<li><a href="">curriculo 1</a></li>
    						<li><a href="">curriculo 2</a></li>
    						<li><a href="">curriculo 3</a></li>
    					</ul>
    				</div>
    			</li>
    		</ul>
    	</li>
  </ul>
<!-- SIDENAV } -->
  <a data-target="slide-out" class="sidenav-trigger btn"><i class="material-icons">menu</i></a>
	<!-- 		FORMACAO
		<form method="post" id="form-formacao">
			curso ou ensino:
			<input type="text" name="curso">
			instituicao de ensino:
			<input type="text" name="insti">
			ANO de inicio
			<input type="text" maxlength="4" name="dt_ini" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
			ANO de finalizaçao
			<input type="text" maxlength="4" name="dt_fim" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
			descricao(opcionao)
			<textarea name="desc"></textarea>
			<input type="submit" value="enviar">
		</form><hr>
			EXPERIENCIA
		<form method="post" id="form-exp">
			nome:
			<input type="text" name="nm_exp">
			empresa:
			<input type="text" name="empresa">
			desc
			<input type="text" name="descr">
			ANO de inicio
			<input type="number" maxlength="4" name="dt_ini">
			ANO de finalizacao
			<input type="number" maxlength="4" name="dt_fim">
			<input type="submit" value="enviar">
		</form><hr>
			HABILIDADES
		<form method="post" id="form-hab">
			nome:
			<input type="text" name="nome">
			qualificaçao
			<input type="range" name="quali">
			<input type="submit" name="" min="0" max="100">	
		</form>
		<hr>
			REFERENCIAS	
		<form method="post" id="form-ref">
			nome:
			<input type="text" name="nome">
			profissao:
			<input type="text" name="profissao">
			telefone:
			<input class="simple-field-data-mask-selectonfocus"type="text"data-mask="(00) 00000-0000" data-mask-selectonfocus="true" name="telefone" />
			<input type="submit" name="" min="0" max="100">
			<?php 
				echo $tel;
			 ?>	
		</form> -->

<!-- MODALS -->
		<!-- **********MODAL1*********** -->
<div id="modal1" class="modal rounded modal1">
    <div class="modal-content">
    	<form method="post" id="form-formacao">
			<ul class="stepper stepper1 linear horizontal" style="min-height: 400px;">
		   		<li class="step active">
			      <div class="step-title waves-effect">Escolaridade</div>
			      <div class="step-content">



		            <div class="input-field">
		              <i class="material-icons prefix">school</i>
			          <input id="curso" type="text" class="validate" required name="curso">
			          <label for="curso">Curso ou Ensino</label>
			        </div>

			        <div class="input-field">
						<i class="material-icons prefix">location_city</i>
			         	<input id="insti" type="text" class="validate" name="insti" required>
			          	<label for="insti">Instituição</label>
			        </div>



			         <div class="step-actions">
			            <!-- Here goes your actions buttons -->
			            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
			         </div>
			      </div>
			    </li>

			    <li class="step">
			      <div class="step-title waves-effect">Datas</div>
			      <div class="step-content">
			         
			      	<div class="input-field">
			      		<i class="material-icons prefix">date_range</i>
			      		<input type="text" maxlength="4" id="dt_ini" name="dt_ini" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
			      		<label for="dt_ini">Data de Inicio</label>
			      	</div>
			      	<div class="input-field">
			      		<i class="material-icons prefix">today</i>
			      		<input type="text" maxlength="4" id="dt_fim" name="dt_fim" onkeypress='return event.charCode >= 48 && event.charCode <= 57'   required>
			      		<label for="dt_ini">Data de Finalização</label>
			      	</div>


			         <div class="step-actions">
			            <!-- Here goes your actions buttons -->
						<button class="waves-effect waves-dark btn next-step">CONTINUE</button>
						<button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
			         </div>
			      </div>
			   </li>

			   <li class="step">
			      <div class="step-title waves-effect">Descrição</div>
			      <div class="step-content">
			         <div class="input-field">
			         	<i class="material-icons prefix">description</i>
			         	<textarea id="desc" name="desc" class="materialize-textarea" maxlength="593"></textarea>
			         	<label for="desc"></label>
			         </div>
			         <div class="step-actions">
			            <!-- Here goes your actions buttons -->
			            <button type="submit" class="waves-effect waves-dark btn modal-close">CONTINUE</button>
			            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
			            <button type="submit" class="btn-floating waves-effect waves-light red add"><i class="material-icons">add</i></button>
			         </div>
			      </div>
			    </li>
			</ul>
		</form>
    </div>
  </div>
  <!-- **********MODAL1*********** -->





  <!-- **********MODAL2*********** -->
  <div id="modal2" class="modal rounded modal2">
    <div class="modal-content">
    	<form method="post" id="form-exp">
			<ul class="stepper stepper2 linear horizontal" style="min-height: 400px;">
		   		<li class="step active">
			      <div class="step-title waves-effect">Experiência</div>
			      <div class="step-content">



		            <div class="input-field">
		              <i class="material-icons prefix">create</i>
			          <input type="text" name="nm_exp" class="validate" id="nm_exp" required>
			          <label for="nm_exp">Nome</label>
			        </div>

			        <div class="input-field">
						<i class="material-icons prefix">account_balance</i>
			         	<input type="text" name="empresa" class="validate" id="empresa" required>
			          	<label for="empresa">Empresa</label>
			        </div>



			         <div class="step-actions">
			            <!-- Here goes your actions buttons -->
			            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
			         </div>
			      </div>
			    </li>

			   <li class="step">
			      <div class="step-title waves-effect">Descrição</div>
			      <div class="step-content">
			         <div class="input-field">
			         	<i class="material-icons prefix">description</i>
			         	<textarea id="descr" name="descr" class="materialize-textarea" maxlength="593" required=""></textarea>
			         	<label for="descr"></label>
			         </div>
			         <div class="step-actions">
			            <!-- Here goes your actions buttons -->
			            <button type="submit" class="waves-effect waves-dark btn next-step">CONTINUE</button>
			            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
			         </div>
			      </div>
			    </li>

			    <li class="step">
			      <div class="step-title waves-effect">Datas</div>
			      <div class="step-content">
			         
			      	<div class="input-field">
			      		<i class="material-icons prefix">date_range</i>
			      		<input type="number" id="dt_ini" name="dt_ini"  required>
			      		<label for="dt_ini">Data de Inicio</label>
			      	</div>
			      	<div class="input-field">
			      		<i class="material-icons prefix">today</i>
			      		<input type="number" id="dt_fim" name="dt_fim"   required>
			      		<label for="dt_fim">Data de Finalização</label>
			      	</div>


			         <div class="step-actions">
			            <!-- Here goes your actions buttons -->
						<button class="waves-effect waves-dark btn  modal-close">CONTINUE</button>
						<button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
			         </div>
			      </div>
			   </li>

			</ul>
		</form>
    </div>
  </div>
  <!-- **********MODAL2*********** -->




    <!-- **********MODAL3*********** -->
  <div id="modal3" class="modal rounded modal3">
    <div class="modal-content">
    	<form method="post" id="form-hab">
    		<h4>Habilidades</h4>
    		<div class="divider"></div>
    		<div class="row">
    			<div class="col s10 offset-s1">
    				<div class="input-field">
					<input type="text" name="nome" class="validate" id="nm" required>
					<label for="nm">Habilidade</label>
					</div>
			    	<p class="range-field">
			      	<input type="range" min="0" max="100" name="quali">
			   		</p>
    			</div>
    				<div class="right mt-10">
						<button type="submit" class="btn-floating waves-effect waves-light red"><i class="material-icons">add</i></button>
						<button type="submit" class="waves-effect waves-dark btn  modal-close">CONCLUÍDO</button>
    			</div>
    		</div>
		</form>
    </div>
  </div>
  <!-- **********MODAL3*********** -->



    <div id="modal3" class="modal rounded modal3">
    <div class="modal-content">
    	<form method="post" id="form-hab">
    		<h4>Habilidades</h4>
    		<div class="divider"></div>
    		<div class="row">
    			<div class="col s10 offset-s1">
    				<div class="input-field">
					<input type="text" name="nome" class="validate" id="nm" required>
					<label for="nm">Habilidade</label>
					</div>
			    	<p class="range-field">
			      	<input type="range" min="0" max="100" name="quali">
			   		</p>
    			</div>
    				<div class="right mt-10">
						<button type="submit" class="btn-floating waves-effect waves-light red"><i class="material-icons">add</i></button>
						<button type="submit" class="waves-effect waves-dark btn  modal-close">CONCLUÍDO</button>
    			</div>
    		</div>
		</form>
    </div>
  </div>
  <!-- *****MODALS END****** -->
	<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
	<script type="text/javascript" src="stepperPlugin/js/mstepper.min.js"></script>
	<script type="text/javascript" src="js/home.js"></script>

	<script type="text/javascript" src="jQuery-Mask-Plugin-master/test/sinon-1.10.3.js"></script>
  	<script type="text/javascript" src="jQuery-Mask-Plugin-master/test/sinon-qunit-1.0.0.js"></script>

  	<script type="text/javascript" src="jQuery-Mask-Plugin-master/src/jquery.mask.js"></script>
  	<script type="text/javascript" src="jQuery-Mask-Plugin-master/test/jquery.mask.test.js"></script>
</body>
</html>