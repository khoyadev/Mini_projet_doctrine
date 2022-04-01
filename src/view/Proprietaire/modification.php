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
        <form method="POST" action="http://localhost/PHP/Mini_projet_doctrine/Proprietaire/modifier/<?=$data->getId_proprietaire()?>" >
            <div class="mb-3">
            <input type="hidden" name="id_proprietaire" value="<?=$data->getId_proprietaire() ?>"id="">
              <label for="exampleInputEmail1" class="form-label">Nom</label>
              <input type="text" class="form-control" id="nom" value="<?=$data->getNom() ?>" name="nom" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="prenom" value="<?=$data->getPrenom() ?>"  name="prenom" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Civilite</label>
                <input type="text" class="form-control" id="civilite" value="<?=$data->getCivilite() ?>"  name="civilite" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Date de Naissance</label>
                <input type="date" class="form-control" id="dateNaissance" value="<?=$data->getDateNaissance() ?>" name="dateNaissance" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Lieu de Naissance</label>
                <input type="text" class="form-control" id="lieuNaissance" value="<?=$data->getLieuNaissance() ?>"  name="lieuNaissance" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CNI</label>
                <input type="number" class="form-control" id="cni" value="<?=$data->getCni() ?>" name="cni" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Adresse</label>
                <input type="text"  class="form-control" id="adresse" value="<?=$data->getAdresse() ?>"  name="adresse" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nationalite</label>
                <input type="text"  class="form-control" id="nationalite" value="<?=$data->getNationalite() ?>"  name="nationalite" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contact</label>
                <input type="text"  class="form-control" id="contact" value="<?=$data->getContact() ?>"  name="contact" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text"  class="form-control" id="email" value="<?=$data->getEmail() ?>"  name="email" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="text"  class="form-control" id="password" value="<?=$data->getPassword() ?>"  name="password" aria-describedby="emailHelp">
              </div>
              <input type="submit" class="button" value="Modifier" name="add">
          </form>
      </div>
      <div class="col-6">
</body>
</html>