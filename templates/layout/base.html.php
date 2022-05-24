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

    <link rel="stylesheet" href="<?=Constantes::WEB_ROOT.'bootstrap/css/bootstrap.min.css' ?>">    

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
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Acceuil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?=Constantes::WEB_ROOT.'listeretu' ?>">Etudiants</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=Constantes::WEB_ROOT.'listerprof' ?>">Professeurs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=Constantes::WEB_ROOT.'listerp' ?>">Responsables</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=Constantes::WEB_ROOT.'listerac' ?>">Attachés</a>
      </li>
    </ul>
  </div>
</nav>
<?=$contents_for_views?>
  </body>
</html>