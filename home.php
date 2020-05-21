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
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stepperPlugin/css/mstepper.min.css">

</head>
<body>
	    	<div class="msg">
            <h6></h6>
        </div>
<ul id="dropdown1" class="dropdown-content">
  <li><a class="confirmed perfil-target">Perfil<i class="material-icons">assignment_ind</i></a></li>
  <li><a href="#!">FeedBack <i class="material-icons">feedback</i></a></li>
  <li class="divider"></li>
  <li><a class="sair">Sair<i class="material-icons">power_settings_new</i></a></li>
</ul>
	  <nav class="white">
    <div class="nav-wrapper">
      <a class="brand-logo">
      	<svg xmlns="http://www.w3.org/2000/svg" width="133.25" height="16.578" viewBox="0 0 730.937 90.937">
  <defs>
    <style>
      .cls-1 {
        fill: #576784;
        fill-rule: evenodd;
      }
    </style>
  </defs>
  <path id="CurríMaker" class="cls-1" d="M194.792,321.505a47.848,47.848,0,0,0-13.629-6.036,61.146,61.146,0,0,0-15.961-1.992,70.035,70.035,0,0,0-40.592,13.067,58.977,58.977,0,0,0-14.338,14.589,49.452,49.452,0,0,0-7.611,17.7,36.912,36.912,0,0,0,.954,20.244,33.545,33.545,0,0,0,11.754,15.732,42.851,42.851,0,0,0,13.759,6.914,57.789,57.789,0,0,0,16.766,2.344,71.684,71.684,0,0,0,16.546-1.933,70.129,70.129,0,0,0,15.5-5.625l6.321-22.559a80.936,80.936,0,0,1-17.074,8.086,51.536,51.536,0,0,1-16,2.695q-13.079,0-19.7-7.236t-4.157-18.9a31.551,31.551,0,0,1,12.268-19.1,36.568,36.568,0,0,1,22.739-7.442,33.3,33.3,0,0,1,13.655,2.754,36.634,36.634,0,0,1,11.61,8.438Zm42.967,54.14a16.336,16.336,0,0,1-5.071,9.346,14.128,14.128,0,0,1-9.548,3.252q-4.006,0-5.595-2.139t-0.7-6.3l6.62-31.289H201.452l-7.711,36.446q-1.959,9.258,2.262,14.062t14.277,4.805a33.593,33.593,0,0,0,12.837-2.52,47.135,47.135,0,0,0,12.407-7.793l-2.182,10.313,20.853-2.52,11.171-52.793H243.5Zm59.981,2.637q1.587-7.5,5.553-9.463t14.3-1.963h4.782l4.165-19.687h-1.758a32.146,32.146,0,0,0-13.224,2.519,31.792,31.792,0,0,0-10.606,8.086l1.537-9.258h-20.6l-11.171,52.793h22.148Zm56.039,0q1.587-7.5,5.553-9.463t14.3-1.963h4.782l4.165-19.687h-1.758a32.146,32.146,0,0,0-13.224,2.519,31.8,31.8,0,0,0-10.606,8.086l1.537-9.258h-20.6l-11.171,52.793h22.148ZM416.227,346l-22.822,2.519-11.17,52.793h22.289ZM406,339.493l25.033-20.274h-15.61l-18.634,20.274H406Zm31.5,61.816,17.262-39.375,20.4,42.481h1.617L513,362.52l0.441,38.789H536.57l-2.744-87.715H532l-47.985,55.313-26.757-55.313H455.5l-39.724,87.715H437.5Zm154.817-15.234a26.564,26.564,0,0,1-5.372,2.959,12.954,12.954,0,0,1-4.669.967,9.513,9.513,0,0,1-8.3-4.131q-2.886-4.131-1.573-10.342a19.117,19.117,0,0,1,6.614-10.986,17.467,17.467,0,0,1,11.471-4.366,14.386,14.386,0,0,1,6.941,1.758ZM603.375,349.1a50.789,50.789,0,0,0-7.45-2.344A30.98,30.98,0,0,0,589.2,346a41.248,41.248,0,0,0-25.386,8.32A34.729,34.729,0,0,0,550,375.411q-2.568,12.129,4.042,20.273t18.843,8.145a30.62,30.62,0,0,0,8.593-1.231,44.487,44.487,0,0,0,8.926-3.808l0.9,5.039,21.453-4.688a61.453,61.453,0,0,1,.68-7.207q0.612-4.218,1.926-10.429l6.981-32.989Zm51.916,24.141,17.4,28.066h24.329L676.21,371.075l26.781-22.559H679.929l-24.006,21.739,11.654-55.079-21.838,2.52-17.692,83.613h21.3Zm77.293-11.4a19.522,19.522,0,0,1,10.6-2.9q5.341,0,8.294,2.666a6.715,6.715,0,0,1,2.072,6.826l-0.173.82-27.641.7A17.4,17.4,0,0,1,732.584,361.846Zm17.985,26.162a45.409,45.409,0,0,1-11.963,1.875q-7.383,0-11.535-3.31a9.026,9.026,0,0,1-3.514-8.643l43.453-1,2.476-2.4,0.145-.352q1.013-3.456,1.348-5.039,2.156-10.2-4.817-16.611t-19.982-6.416a47.037,47.037,0,0,0-27.659,8.76q-12.472,8.76-15.162,21.474-2.579,12.189,5.519,19.776t23.918,7.588a69.55,69.55,0,0,0,12.917-1.231,85.026,85.026,0,0,0,13.533-3.808l5.895-16.231A91.938,91.938,0,0,1,750.569,388.008Zm53.28-9.726q1.587-7.5,5.554-9.463t14.3-1.963h4.781l4.165-19.687h-1.758a32.153,32.153,0,0,0-13.224,2.519,31.789,31.789,0,0,0-10.605,8.086l1.537-9.258H788l-11.171,52.793h22.149Z" transform="translate(-101.719 -313.469)"/>
</svg></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
		<li><a class="cards-target"><i class="material-icons">view_module</i></a></li>
        <li><a class="refresh"><i class="material-icons">refresh</i></a></li>
        <li><a class="dropdown-trigger" data-target="dropdown1"><i class="material-icons">more_vert</i></a></li>
      </ul>
    </div>
  </nav>
  <div class="fixed-action-btn">
  <a data-target="slide-out" class="btn-floating btn-large red sidenav-trigger pulse">
    <i class="large material-icons">menu</i>
  </a>
</div>
	<!-- SIDENAV {-->
<ul id="slide-out" class="sidenav">
	<!-- SIDENAV HEADER -->
    <li><div class="user-view">
      <div class="background">
        <img src="img/office.jpg">
      </div>
      <a href="#user"><img class="circle" src="img/madara.gif"></a>
      <a href="#name"><span class="white-text name user-name"></span></a>
      <a href="#email"><span class="white-text email"></span></a>
    </div></li>
    <!-- SIDENAV BODY -->
	<li><a class="subheader"><i class="material-icons">assignment</i>Cadastro de Informações</a></li>
    <li><div class="divider"></div></li>
    <li><a href="#modal1" class="modal-trigger waves-effect waves-dark tooltipped" data-position="right" data-tooltip="Para cadastrar mais de uma informação, basta clicar no botão Adicionar"><i class="material-icons">school</i>Formação</a></li>
    <li><a href="#modal2" class="modal-trigger waves-effect waves-dark"><i class="material-icons">work</i>Experiência</a></li>
    <li><a href="#modal3" class="modal-trigger waves-effect waves-dark"><i class="material-icons">bar_chart</i>Habilidades</a></li>
    <li><a href="#modal4" class="modal-trigger waves-effect waves-dark"><i class="material-icons">supervisor_account	</i>Referências</a></li>
    <li><a href="#modal5" class="modal-trigger waves-effect waves-dark update"><i class="material-icons">assignment_ind</i>Atualizãção de Cadastro</a></li>
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
			      		<input type="text" class="datepicker1" required>
			      		<label for="dt_ini">Data de Inicio</label>
			      	</div>
			      	<div class="input-field">
			      		<i class="material-icons prefix">today</i>
			      		<input type="text" class="datepicker2" required>
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
			            <button type="submit" class="btn-floating waves-effect waves-light red addForm"><i class="material-icons">add</i></button>
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
						<button type="submit" class="btn-floating waves-effect waves-light red addExp"><i class="material-icons">add</i></button>
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



  <div id="modal4" class="modal rounded modal4">
    <div class="modal-content">
    	<form method="post" id="form-ref">
			<ul class="stepper stepper3 linear horizontal" style="min-height: 400px;">
		   		<li class="step active">
			      <div class="step-title waves-effect">Referências</div>
			      <div class="step-content">



		            <div class="input-field">
		              <i class="material-icons prefix">assignment_ind</i>
			          <input type="text" name="nome" class="validate" id="nome" required>
			          <label for="nome">Nome</label>
			        </div>

			        <div class="input-field">
						<i class="material-icons prefix">local_phone</i>
			         	<input class="simple-field-data-mask-selectonfocus"type="text"data-mask="(00) 00000-0000" data-mask-selectonfocus="true" id="telefone" name="telefone">
			          	<label for="telefone">Telefone</label>
			        </div>



			         <div class="step-actions">
			            <!-- Here goes your actions buttons -->
			            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
			         </div>
			      </div>
			    </li>

			    <li class="step">
			      <div class="step-title waves-effect">Infos de Trabalho</div>
			      <div class="step-content">
			         
			      	<div class="input-field">
			      		<i class="material-icons prefix">work</i>
			      		<input type="text" id="cargo" name="cargo"  required>
			      		<label for="cargo">Cargo</label>
			      	</div>
			      	<div class="input-field">
			      		<i class="material-icons prefix">home_work</i>
			      		<input type="text" id="inst" name="inst"   required>
			      		<label for="inst">Instituição</label>
			      	</div>


			         <div class="step-actions">
			            <!-- Here goes your actions buttons -->
						<button class="waves-effect waves-dark btn  modal-close">CONTINUE</button>
						<button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
			            <button type="submit" class="btn-floating waves-effect waves-light red addRef"><i class="material-icons">add</i></button>
			         </div>
			      </div>
			   </li>

			</ul>
		</form>
    </div>
  </div>
  <!-- *****MODAL 5********* -->
   <div id="modal5" class="modal rounded modal5">
    <div class="modal-content">
    	<form method="post" id="form-update" enctype="multipart/form-data">
			<ul class="stepper stepper5 linear horizontal" style="min-height: 400px;">
		   		<li class="step active">
			      <div class="step-title waves-effect">Perfil</div>
			      <div class="step-content">



		            <div class="input-field">
		              <i class="material-icons prefix">account_circle</i>
			          <input type="text" name="nome" class="validate" id="nomeUpdate" required>
			          <label for="nome" id="nomeL">Nome</label>
			        </div>

			        <div class="input-field">
						<i class="material-icons prefix">account_circle</i>
			         	<input type="text" name="sobrenome" class="validate" id="sobrenome" required>
			          	<label for="sobrenome" id="sobrenomeL">Sobrenome</label>
			        </div>



			         <div class="step-actions">
			            <!-- Here goes your actions buttons -->
			            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
			         </div>
			      </div>
			    </li>

			   <li class="step">
			      <div class="step-title waves-effect">Imagens</div>
			      <div class="step-content">
					<div class="file-field input-field">
					      <div class="btn">
					        <span>Foto de Perfil</span>
					        <input type="file" name="foto-perfil">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
					<div class="file-field input-field">
					      <div class="btn">
					        <span>Foto de Capa</span>
					        <input type="file" name="foto-capa">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
			         <div class="step-actions">
			            <!-- Here goes your actions buttons -->
			            <button type="submit" class="waves-effect waves-dark btn next-step">CONTINUE</button>
			            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
			         </div>
			      </div>
			    </li>

		   		<li class="step">
			      <div class="step-title waves-effect">Perfil</div>
			      <div class="step-content">



		            <div class="input-field">
		              <i class="material-icons prefix">email</i>
			          <input type="email" name="email" class="validate" id="email" required>
			          <label for="email" id="emailL">Email</label>
			        </div>

			        <div class="input-field">
						<i class="material-icons prefix">cake</i>
			         	<input type="text" name="nascimento" class="validate nascimento" id="nascimento" required>
			          	<label for="nascimento" id="nascimentoL">Nascimento</label>
			        </div>



			         <div class="step-actions">
			            <!-- Here goes your actions buttons -->
			            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
			            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
			         </div>
			      </div>
			    </li>

		   		<li class="step">
			      <div class="step-title waves-effect">Perfil</div>
			      <div class="step-content">



		            <div class="input-field">
		              <i class="material-icons prefix">call</i>
			          <input type="text" class="simple-field-data-mask-selectonfocus validate"type="text"data-mask="(00) 00000-0000" data-mask-selectonfocus="true" name="telefone" id="telefone-perfil" required>
			          <label for="telefone-perfil" id="telefoneL">telefone</label>
			        </div>

			        <div class="input-field">
						<i class="material-icons prefix">language</i>
			         	<input type="text" name="site" class="validate" id="site">
			          	<label for="site" id="siteL">Site</label>
			        </div>



			         <div class="step-actions">
			            <!-- Here goes your actions buttons -->
			            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
			            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
			         </div>
			      </div>
			    </li>

			  <li class="step">
			      <div class="step-title waves-effect">Perfil</div>
			      <div class="step-content">



			      	<div class="input-field">
			      		<i class="material-icons prefix">work</i>
			      		<input type="text" id="profissao" name="profissao"  required>
			      		<label for="profissao" id="profissaoL">Profissão</label>
			      	</div>

			        <div class="input-field">
						<i class="material-icons prefix">home</i>
			         	<input type="text" name="endereco" class="validate" id="endereco">
			          	<label for="endereco" id="enderecoL">Endereço</label>
			        </div>



			         <div class="step-actions">
			            <!-- Here goes your actions buttons -->
			            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
			            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
			         </div>
			      </div>
			    </li>

			    <li class="step">
			      <div class="step-title waves-effect">Informações</div>
			      <div class="step-content">
			      	<div class="input-field">
			      		<i class="material-icons prefix">description</i>
			      		<textarea class="materialize-textarea" name="objetivo" maxlength="593" id="obj"></textarea>
			      		<label for="obj" id="objL">Objetivo</label>
			      	</div>


			         <div class="step-actions">
			            <!-- Here goes your actions buttons -->
						<button type="submit" class="waves-effect waves-dark btn  modal-close">CONCLUIR</button>
						<button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
			         </div>
			      </div>
			   </li>

			</ul>
		</form>
    </div>
  </div>
  <div id="modal6" class="modal rounded modal6">
    <div class="modal-content">
    	<form method="post" id="form-curriculum">
    		<h4>Criar Curriculo</h4>
    		<div class="divider"></div>
    			<div class="input-field">
						<i class="material-icons prefix">description</i>
			         	<input type="text" name="nmCurriculo" class="validate" id="nmCurriculo">
			          	<label for="nmCurriculo">Nome do Curriculo</label>
			        </div>
    				<div class="right" style="margin-bottom: 15px;">
						<button type="submit" class="waves-effect waves-dark btn  modal-close">CONCLUÍDO</button>
    			</div>
    		</div>
		</form>
    </div>
  </div>
  <!-- *****MODALS END****** -->
<div class="row operation">
    <div class="col s4 offset-s2">
      <div class="card hoverable">
        <div class="card-image">
        	<div>
          <img src="img/model1.jpg">
          </div>
          <span class="card-title">Modelo De Currículo 1</span>
          <a href="#modal6" class="modal-trigger btn-floating halfway-fab waves-effect waves-light red create-curriculum"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>Um estilo de currículo Dark, com um belo design e agradável ao olhar</p>
        </div>
      </div>
    </div>
    <div class="col s4">
    	 <div class="card hoverable">
        <div class="card-image">
        	<div>
          <img src="img/office.jpg">
          </div>
          <span class="card-title">Card Title</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red disabled"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>Adicionaremos novos modelos em breve</p>
        </div>
      </div>
    </div>
  </div>
  <ul id="dropdown2" class="dropdown-content">
  <li><a class="perfil-target">Trocar foto de perfil<i class="material-icons">portrait</i></a></li>
  <li><a href="#!">Trocar foto de capa <i class="material-icons">panorama</i></a></li>
</ul>
<div class=" perfil row">
  <div class="col l12 m12 s12">
    <div class="row">
      <div class="col s12">
        <div class="card">
          <div class="card-image perfil-background">
            <img src="img/madara.gif" alt="" />
          </div>
          <div class="card-content">
          	<a class="dropdown-trigger2 right grey-text text-darken-4" data-target="dropdown2"><i class="material-icons">more_vert</i></a>
            <div class="row">
              <div class="col s4">
              	<div class="profile-pic">
				<img class="circle responsive-img" src="img/madara.gif" alt="" />
              	</div>
              </div>
              <div class="col s8">
              	<div class="user-infos">
              		<h1 class="card-title black-text nome">Bruce Banner Wayne</h1>
              		<h5>Web Developer</h5>
              		<h6>17 Anos de Idade</h6>
              	</div>
              </div>
          </div>
        </div>
        <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
      </div>
    </div>
  </div>
</div>
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