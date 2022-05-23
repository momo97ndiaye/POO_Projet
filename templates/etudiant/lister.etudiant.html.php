<div class="container d-flex align-items-center justify-content-center pb-10">

<table class="table table-dark">
  <thead>
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