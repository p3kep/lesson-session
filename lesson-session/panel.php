<?php
session_start();
 
require_once 'init.php';
require_once 'check.php';
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-signin-client_id" content="983154479117-fbds9i4h6jfvdmkjsrvqiojd1n53od33.apps.googleusercontent.com">
    <title>Lesson Session - Central</title>

    <!--- CSS --->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    
    <!-- Navbar -->
    <nav class="navbar navbarColor">
      <a class="navbar-brand navbarColorWhite active" href="index.php">
        <i class="fas fa-user-graduate"></i>  
        &nbsp;  | &nbsp; Lession Session
      </a>
      <?php if (isLoggedIn()): ?>
            <a class="btn btn-sm btn-danger" href="logout.php">Sair da Conta</a>
        <?php else: ?>
            <a class="btn btn-sm btn-info" href="form-login.php">Entrar</a>
        <?php endif; ?>
    </nav>



	<div class="container card text-center panelStyle">
	  <div class="card-header">
	    <i class="fas fa-user"></i>
	  </div>
	  <div class="card-body">
	    <h5 class="card-title display-4">Olá, <?php echo $_SESSION['user_name']; 
            ?>. </h5>
	    <p class="card-text lead">Selecione a área que deseja explorar abaixo.</p>

	   <div class="container panelContainerButtons">
		    <div>
		    	<a href="#" class="btn btn-info btn-block formSpace">Professores</a>
			</div>

		    <div>
		    	<a href="#" class="btn btn-info btn-block formSpace">Turmas</a>
			</div>

		    <div>
		    	<a href="#" class="btn btn-info btn-block formSpace">Exercícios</a>
			</div>	

		    <div>
		    	<a href="#" class="btn btn-info btn-block formSpace">Provas</a>
			</div>	
		</div>

	  </div>
	  <div class="card-footer text-muted">
	  	Painel de Controle
	  </div>
	</div>


    <!--- Scripts --->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7afebb249a.js" crossorigin="anonymous"></script>



</body>
</html>

    </body>
</html>