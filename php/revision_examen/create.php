<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="verifier.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>

<div class="container">

<div class="row">
    <div class="col-md-6 mx-auto">
    <div class="alert alert-danger" id="erreur">
    </div>
        <form action="store.php"  method="post" id="f">
        
        <div class="form-group">
        <label for="">Matricule :</label>
        <input type="text" name="matricule" id="matricule" class="form-control">
        </div>
        <div class="form-group">
        <input onclick="verifier()" type="button" value="Valider" class="btn btn-primary col-md-12">
        </div>
        </form>
    </div>
</div>
</div>
    
</body>
</html>