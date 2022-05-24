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
                <th scope="col">Grade</th>
                <th scope="col">Role</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
  <tbody>
 <?php foreach ($prof as $prof) { ?>
    <tr>
      <td><?= $prof->nom_complet?></td>
      <td><?= $prof->adresse?></td>
      <td><?= $prof->sexe?></td>
      <td><?= $prof->grade?></td>
      <td><?= $prof->role?></td>
      <td> 
        <button type="button" class="btn btn-outline-dark">Modifier</button>
        <button type="button" class="btn btn-outline-danger">Supprimer</button>
      </td>
    </tr>
   <?php } ?>
  </tbody>
</table>
</div>