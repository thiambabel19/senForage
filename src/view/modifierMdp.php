<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Changer mot de passe</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo $url?>/public/template/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo $url?>/public/template/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo $url?>/public/template/css/style.min.css" rel="stylesheet">
  <style>

    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
  </style>
</head>

<body class="grey lighten-3">
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- body -->
      <div class="container-fluid">
          <div class="card col-md-6 offset-2">
              <div class="card-header">
                  <h4 class="text-center"><strong>Mise à jour du mot de passe</strong></h4>
              </div>
              <div class="card-body">
                  <form method="post" action="<?= $url ?>/User/changerMdp" class="form-group">
                      <div class="row mt-2">
                          <div class="col">
                              <input type="password" class="form-control" placeholder="Entrer le nouveau mot de passe" name="mdp1" required>
                          </div>
                      </div>
                      <div class="row mt-4">
                          <div class="col">
                              <input type="password" class="form-control" placeholder="Confirmer le nouveau mot de passe" name="mdp2" required>
                          </div>
                      </div>
                      
                      <input type="hidden" value="<?= $data ?>" name="userId">

                                              
                      <div class="row mt-4">
                          <div class="col">
                              <button name="enregistrer" type="submit" class="btn btn-blue lg-3">Enregistrer</button>
                          </div>
                      </div>

					            
                </form>
              </div>
          </div>
      </div>
      <!-- body -->

    </div>
  </main>
  <!--Main layout-->

</body>

</html>
