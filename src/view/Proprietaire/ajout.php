
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login System</title>
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>

     
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
    
</head>
<body>
<div class="col-6 m-5">
        <form method="POST" action="" >
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nom</label>
              <input type="text" class="form-control" id="nom" name="nom" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NINEA</label>
                <input type="text" class="form-control" id="Telephoneetreprise" name="ninea" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Registre de commerce</label>
                <input type="text" class="form-control" id="siegeetreprise"  name="rccm" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">date de Creation</label>
                <input type="date" class="form-control" id="siegeetreprise" name="date_creation" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Page Web</label>
                <input type="text" class="form-control" id="siegeetreprise"  name="page_web" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre d'employer</label>
                <input type="number"  class="form-control" id="siegeetreprise" name="nombre_employe" aria-describedby="emailHelp">
              </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" name="cotisations_sociales" id="cotisations_sociales">
              <label class="form-check-label" for="exampleCheck1">Votre entreprise prend-elle en compte les cotisations sociales et patronale?</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="organigramme" id="organigramme">
                <label class="form-check-label" for="exampleCheck1">Avez-vous un organigramme ?</label>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="contrat" id="contrat">
                <label class="form-check-label" for="exampleCheck1">Avez-vous des contrat ?</label>
              </div>

              <select class="form-select mb-3" name="id_quartier" aria-label="Default select example">
                <option selected>Selectionner un quartier</option>
                <?php foreach ($quartiers as $quartier) {
                echo "<option value=".$quartier['id_quartier'].">".$quartier['nom_quartier']."</option>";}?>               
              </select>

              <select class="form-select mb-3" name="id_domaine" aria-label="Default select example">
                <option selected>Selectionner un domaine</option>
                <?php foreach ($domaines as $domaine) {
                echo "<option value=".$domaine['id_domaine'].">".$domaine['libelle_domaine']."</option>";}?>               
              </select>

              <select class="form-select mb-3" name="id_repondant" aria-label="Default select example">
                <option selected>Selectionner un repondant</option>
                <?php foreach ($repondants as $repondant) {
                  echo "<option value=".$repondant['id_repondant'].">".$repondant['prenom_repondant']."</option>";}?>               
              </select>

              <select class="form-select mb-3" name="id_dispositif" aria-label="Default select example">
                <option selected>Selectionner un dispositif</option>
                <?php foreach ($dispositifs as $dispositif) {
                echo "<option value=".$dispositif['id_dispositif'].">".$dispositif['libelle_dispositif']."</option>";}?>               
              </select>

              <select class="form-select mb-3" name="id_regime" aria-label="Default select example">
                <option selected>Selectionner un regime</option>
                <?php foreach ($regimes as $regime) {
                echo "<option value=".$regime['id_regime'].">".$regime['libelle_regime']."</option>";}?>               
              </select>

              <input type="submit" class="button" value="Ajouter" name="add">
          </form>
      </div>
      <div class="col-6">
</body>
</html>