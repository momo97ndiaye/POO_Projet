<?php 
use App\Core\Constantes;
use App\Core\Controller;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Log In </title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }


      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
  
  </head>
  <body class="text-center">
  <nav class="navbar navbar-expand-lg navbar-light bg-light <?= showNav()?>">
  <a class="navbar-brand align-middle pt-4" href="#">Baol School </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle " type="button" data-toggle="dropdown">Listes
  </button>
  <ul class="dropdown-menu">
    <li class="<?= hidden(['ROLE_ETUDIANT'])?>"><a href="<?=Constantes::WEB_ROOT.'listeretu' ?>">Étudiants</a></li>
    <li><a href="<?=Constantes::WEB_ROOT.'listerprof' ?>">Professeurs</a></li>
    <li><a href="<?=Constantes::WEB_ROOT.'listerp' ?>">Responsables</a></li>
    <li><a href="<?=Constantes::WEB_ROOT.'listerac' ?>">Attachés</a></li>
  </ul>
</div>
</nav>
<?=$contents_for_views?>

</body>
</html>