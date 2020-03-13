<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Navbar</title>
        <meta name="description" content="">
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <header class="header">
            <a class="logo" href="/"><img src="img/logo.svg" alt="logo"></a>
            <hr>
            <nav>
                <ul class="nav-links">
                    <li><a href="#">O Serviço</a></li>
                    <li><a href="#">Estilização</a></li>
                    <li><a href="#">Compartilhamento</a></li>
                    <li><a href="#">Funcionamento</a></li>
                </ul>
            </nav>
            <button class="cta open-modal" data-toggle="modal" data-target=".modal-overlay">Cadastrar</button>
            <button class="cta-log ml-15 open-logModal" data-toggle="modal" data-target=".logModal-overlay">Login</button>
            <button class="menu cta open">Menu</button>
        </header>
        <div id="mobile-menu" class="overlay">
            <a class="close">&times;</a>
            <div class="overlay-content">
                <a href="#">O Serviço</a>
                <a href="#">Estilização</a>
                <a href="#">Compartilhamento</a>
                <a href="#">Funcionamento</a>
            </div>
        </div>
        	<div class="row">
        		<div class="text col-3 offset-1 normal">
        			<h2>As melhores tecnologias em programação, direto ao ponto e do jeito certo.</h2>
        			<p>No meio de tanta informação e da quantidade de ferramentas que surgem todos os dias, você precisa de alguém que te leve na direção certa.</p>
        			<button>Quero Criar o meu!</button>
        		</div>
        		<div class="img col-4 offset-2">
        			<img src="files.svg">
        		</div>
        </div>
        <div class="row bg-purple">
        	    <div class="img col-4 offset-1">
        			<img src="img/files.svg">
        		</div>
        	    <div class="text col-3 offset-2 invert">
        			<h2>As melhores tecnologias em programação, direto ao ponto e do jeito certo.</h2>
        			<p>No meio de tanta informação e da quantidade de ferramentas que surgem todos os dias, você precisa de alguém que te leve na direção certa.</p>
        		</div>
        </div>
        <div class="row">
        		<div class="text col-3 offset-1 normal">
        			<h2>As melhores tecnologias em programação, direto ao ponto e do jeito certo.</h2>
        			<p>No meio de tanta informação e da quantidade de ferramentas que surgem todos os dias, você precisa de alguém que te leve na direção certa.</p>
        		</div>
        		<div class="img col-4 offset-2">
        			<img src="img/hiring.svg">
        		</div>
        </div>
        <div class="row bg-purple">
        		<div class="img col-4 offset-1">
        			<img src="img/fillForms.svg">
        		</div>
        	    <div class="text col-3 offset-2 invert">
        			<h2>As melhores tecnologias em programação, direto ao ponto e do jeito certo.</h2>
        			<p>No meio de tanta informação e da quantidade de ferramentas que surgem todos os dias, você precisa de alguém que te leve na direção certa.</p>
        		</div>
        </div>
        <div class="modal-overlay">
        <div class="modal-preCadastro">
            <form method="POST" id="form">
            <a class="modal-close" data-toggle="modal" data-dismiss>&times;</a>
        	<h1>Pré-Cadastro</h1>
            <label>Nome:</label>
        	<input type="text" name="name">
            <label>email:</label>
        	<input type="email" name="email">
            <label>senha:</label>
        	<input type="password" name="password">
            <label>confirmar 
            senha:</label>
            <input type="password" name="passwordconf">
            <label>nascimento:</label>
        	<input type="date" name="nascimento">
            <br>
        	<input class="form-btn" type="submit" name="">
            </form>
        </div>
        </div>
        <div class="logModal-overlay">
        <div class="modal-login">
            <form method="POST" id="form-login">
            <a class="logModal-close" data-toggle="modal" data-dismiss>&times;</a>
            <h1>Login</h1>
            <label>email:</label>
            <input type="email" name="email">
            <label>senha:</label>
            <input type="password" name="password">
            <input class="form-btn" type="submit" name="">
            </form>
        </div>
        </div>
        <script type="text/javascript" src="js/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    
    </body>
</html>