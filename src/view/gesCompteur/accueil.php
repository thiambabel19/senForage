<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Accueil</title>
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

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container-fluid">

            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
                <strong class="blue-text">SenForage</strong>
            </a>

        </div>
      
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">
        
      <a class="logo-wrapper waves-effect text-center">
        <img src="<?php echo $url ?>/public/template/img/forage2.jpg" class="" alt="">
      </a>

      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item active waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Actions
        </a>

        <a href="<?= $url ?>/User/formAddCompteur" class="list-group-item list-group-item-action waves-effect mt-2">
          <i class="fas fa-table mr-3"></i>Nouveau compteur</a>
        
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
                <span>Gestionnaire des compteurs</span>
              </h5>

              <h6 class="mb-2 mb-sm-0 ">
                  <a class="mr-auto text-danger" href="<?php echo $url ?>/User/logout">Déconnexion</a>
              </h6>
          </div>
        </div>
        <!-- Heading -->
        
        <!-- body -->
        <div class="container">
            <div class="row mt-2">
                <div class="card col-md-12">
                    <div class="card-header text-primary">
                        <h4 class="text-center"><strong>Attribuer compteur à un client</strong></h4>
                    </div>

                    <div class="card-body text-align-middle">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><h6>ID</h6></th>
                                    <th><h6>Prénom & Nom</h6></th>
                                    <th><h6>Adresse</h6></th>
                                    <th><h6>Téléphone</h6></th>
                                    <th><h6>Village</h6></th>
                                    <th class="text-center"><h6>Numéro compteur</h6></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data[0] as $client) { ?>
                                    <tr>
                                        <td class="align-middle"><?= $client->getIdClientF()->getIdClient() ?></td>

                                        <td class="align-middle"><?= $client->getIdClientF()->getNomClient() ?></td>

                                        <td class="align-middle"><?= $client->getIdClientF()->getAdresseClient() ?></td>

                                        <td class="align-middle"><?= $client->getIdClientF()->getTelClient() ?></td>

                                        <td class="align-middle"><?= $client->getIdClientF()->getIdVillageF()->getNomVillage() ?></td>

                                        <td>
                                            <div class="row text-center">
                                                <form class="" method="post" action="<?= $url ?>/Compteur/attributionCompteur">
                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>N°Compteur</label>
                                                  <select name="numcompteur">
                                                      <?php foreach($data[1] as $compteur) { ?>
                                                          <option value="<?=$compteur->getNumCompteur()?>"><?= $compteur->getNumCompteur()?></option>
                                                      <?php } ?>
                                                  </select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                                                  <button type="submit" name="attribuer" class="btn btn-success">Attribuer</button>
                                                  
                                                  <?php foreach($data[0] as $abon) { ?>
                                                    <input type="hidden" name="idabon" value="<?= $abon->getIdAbon() ?>">
                                                  <?php } ?>
                                                  <input type="hidden" name="iduser" value="<?= $data[2]?>">

                                                </form>
                                            </div>
                                            
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- body -->
        
      </div>
  </main>
  <!--Main layout-->

</body>

</html>
