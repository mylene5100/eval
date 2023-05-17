<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<form action="/eval/form.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Nom</label>
        <input type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer nom">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Prénom</label>
        <input type="text" class="form-control" name="prenom" id="exampleInputPassword1" placeholder="Entrer prénom">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Entrer email">
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>