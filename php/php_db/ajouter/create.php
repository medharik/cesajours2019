<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<div class="container">

<div class="col-md-6 mx-auto bg-light p-2">
<div class="alert alert-primary text-center" role="alert">
  Nouveau produit
</div>
<form action="store.php" method="post">
    <div class="form-group">
    <label for="libelle">Libellé :</label>
    <input class="form-control" type="text" name="libelle" id="libelle" autocomplete="off">
    </div>
    
    <div class="form-group">
    <label for="prix">Prix :</label>
    <input class="form-control" type="text" name="prix" id="prix">
    </div>
    <button type="submit" class="btn btn-primary col-12">Ajouter</button>

    </form></div>
</div>
</body>
</html>