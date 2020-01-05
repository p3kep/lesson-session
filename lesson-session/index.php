<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="google-signin-client_id" content="983154479117-45rklckq7dmbpfuqhit5rnb3kq7l4rq7.apps.googleusercontent.com">
	<title>Lesson Session - Login</title>

	<!--- CSS --->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style.css">

</head>
<body>
	
	<!-- Navbar -->
	<nav class="navbar navbarColor">
	  <a class="navbar-brand navbarColorWhite active" href="index.html">
	  	<i class="fas fa-user-graduate"></i>  
	    &nbsp;	| &nbsp; Lession Session
	  </a>
	</nav>


	<!-- Form Login -->
	<div class="container formFormatLogin">
		<form>

		  <div class="form-group">
		    <center><i class="fas fa-envelope formIconWhite"></i></center>
		    <input type="email" class="form-control formPlaceholderCenter" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required="true">
		  </div>

		  <div class="form-group formSpace">
		    <center><i class="fas fa-lock formIconWhite"></i></center>
		    <input type="password" class="form-control formPlaceholderCenter" id="exampleInputPassword1" placeholder="Senha" required="true">
		  </div>

		  <div class="formButtonsFormat">
		  	<button type="submit" class="btn btn-sm btn-info">Entrar</button>
		  	<a class="btn btn-sm btn-secondary" href="registrar.php">Registrar</a>
		  </div>
		</form>	

	</div>	


	<!--- Scripts --->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/7afebb249a.js" crossorigin="anonymous"></script>


</body>
</html>