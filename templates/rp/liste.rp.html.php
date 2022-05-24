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
                <th scope="col">Role</th>
            </tr>
        </thead>
  <tbody>
 <?php foreach ($rp as $rp) { ?>
    <tr>
      <td><?= $rp->nom_complet?></td>
      <td><?= $rp->adresse?></td>
      <td><?= $rp->sexe?></td>
      <td><?= $rp->role?></td>
    </tr>
   <?php } ?>
  </tbody>
</table>
</div>