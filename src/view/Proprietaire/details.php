
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">Details Proprietaire</h1>
                        <div class="form-group">
                            <label>Nom</label>
                            <p><b><?= $data->getNom()?></b></p>
                        </div>
                        <div class="form-group">
                            <label>Prenom</label>
                            <p><b><?= $data->getPrenom()?></b></p>
                        </div>
                        <div class="form-group">
                            <label>Civilite</label>
                            <p><b><?= $data->getCivilite()?></b></p>
                        </div>
                        <div class="form-group">
                            <label>Date de Naissance</label>
                            <p><b><?= $data->getDateNaissance()?></b></p>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <p><b><?=  $data->getAdresse()?></b></p>
                        </div>
                        <div class="form-group">
                            <label>Lieu de Naissance</label>
                            <p><b><?=  $data->getLieuNaissance()?></b></p>
                        </div>
                        <div class="form-group">
                            <label>CNI</label>
                            <p><b><?=  $data->getCni()?></b></p>
                        </div>
                        <div class="form-group">
                            <label>Nationalite</label>
                            <p><b><?=  $data->getNationalite()?></b></p>
                        </div>
                        <div class="form-group">
                            <label>Contact</label>
                            <p><b><?= $data->getContact()?></b></p>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <p><b><?= $data->getEmail()?></b></p>
                        </div>
                        <div class="form-group ">
                            <label>Password</label>
                            <p><b><?= $data->getPassword()?></b></p>
                        </div>
                </div>
                    <p><a href="http://localhost/PHP/Mini_projet_doctrine/Proprietaire/list" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
