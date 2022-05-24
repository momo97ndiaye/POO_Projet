<div class="container">
<nav class="navbar navbar-light bg-primary">
  <a class="navbar-brand" href="#"><?= $titre?></a>
</nav>
</div>
<div class="container d-flex align-items-center justify-content-center pt-5 ">

    <table class="table  table-bordered table-hover table-light" >
        <thead class="table bg-dark text-white">
            <tr>
                <th scope="col">Nom Complet</th>
                <th scope="col">Adresse</th>
                <th scope="col">Sexe</th>
                <th scope="col">Matricule</th>
                <th scope="col">Login</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
  <tbody>
 <?php foreach ($etu as $etu) { ?>
    <tr>
      <td><?= $etu->nom_complet?></td>
      <td><?= $etu->adresse?></td>
      <td><?= $etu->sexe?></td>
      <td><?= $etu->matricule?></td>
      <td><?= $etu->login?></td>
      <td><?= $etu->role?></td>
    </tr>
   <?php } ?>
  </tbody>
</table>
</div>