<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>GesClientèle/ajout village</title>
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
  <header>

    

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">
        
      <a class="logo-wrapper waves-effect text-center">
        <img src="<?php echo $url ?>/public/template/img/forage2.jpg" class="" alt="">
      </a>

      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item active waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Actions
        </a>
        <a href="<?= $url ?>/User/gesclienthome" class="list-group-item list-group-item-action waves-effect mt-2">
          <i class="fas fa-user mr-3"></i>Liste client</a>

        <a href="<?= $url ?>/User/formAddAbon" class="list-group-item list-group-item-action waves-effect mt-2">
          <i class="fas fa-user mr-3"></i>Ajouter abonnement</a>

        <a href="<?= $url ?>/User/formAddClient" class="list-group-item list-group-item-action waves-effect mt-2">
          <i class="fas fa-table mr-3"></i>Ajouter client</a> 
          
        <a href="<?= $url ?>/Client/listeAbon" class="list-group-item list-group-item-action waves-effect mt-2">
          <i class="fas fa-table mr-3"></i>Liste abonnements</a>
          
        <a href="<?= $url ?>/Client/listeVillages" class="list-group-item list-group-item-action waves-effect mt-2">
          <i class="fas fa-table mr-3"></i>Liste villages</a>

      </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
      <div class="container-fluid mt-5">

        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">
          <!--Card content-->
          <div class="card-body d-sm-flex justify-content-between">

              <h5 class="mb-2 mb-sm-0 pt-1 text-primary">
                <a href="" target="_blank">Espace</a>
                <span>/</span>
                <span>Gestionnaire des clients</span>
              </h5>

              <h6 class="mb-2 mb-sm-0 ">
                  <a class="mr-auto text-danger" href="<?php echo $url ?>/User/logout">Déconnexion</a>
              </h6>
          </div>
        </div>
        <!-- Heading -->
        
        <!-- body -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-primary">
                    <h5 class="text-center"><strong>Formulaire d'ajout village</strong></h5>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= $url ?>/Client/addVillage" class="form-group">

                        <div class="row mt-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Entrer Le nom du village" name="nomVillage">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Entrer le nom du chef du village" name="chef">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="hidden" class="form-control" name="iduser"
                                value="<?= $data ?>">
                            </div>
                        </div>
                        

                        <div class="row mt-4">
                            <div class="col">
                                <button name="ajouter" type="submit" class="btn btn-blue lg-3">Ajouter</button>
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
