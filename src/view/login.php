<!doctype html>
<html lang="en">
  <head>
  	<title>Login 08</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo $url ?>/public/tempLogin/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-3">
					<h2 class="heading-section">SenForage</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Connectez-vous !</h3>
						<form action="<?php echo $url ?>/User/logon" method="post" class="login-form">
		      		<div class="form-group">
		      			<input type="email" class="form-control rounded-left" placeholder="Entrer votre adresse email" name="email" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Entrer votre mot de passe" name="mdp" required>
	            </div>
				
				<!-- Error -->
				<?php if(isset($_GET['error'])){
                    if($_GET['error']==1){ ?>
                    <p class="text-danger text-center">email ou mot de passe incorrect !</p>
                <?php } } ?>
	            
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary form-control" name ="seConnecter">Se connecter</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

  <script src="<?php echo $url ?>/public/tempLogin/js/jquery.min.js"></script>
  <script src="<?php echo $url ?>/public/tempLogin/js/popper.js"></script>
  <script src="<?php echo $url ?>/public/tempLogin/js/bootstrap.min.js"></script>
  <script src="<?php echo $url ?>/public/tempLogin/js/main.js"></script>

	</body>
</html>

