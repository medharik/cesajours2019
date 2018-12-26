<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>boostrap + php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>


<div class="container">
<div class="row">
<div class="col-6 mx-auto">
<form action="destination.php" method="post">
<div class="form-group" >
    <label for="email">Email :</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
</div>

<div class="form-group">
    <label for="age">Age :</label>
    <input type="number" class="form-control" name="age" id="age" 
    placeholder="Age ">
    <br>
    <div class="form-group text-center" align="center">
   
    <input  class="btn btn-primary col-6" type="submit" class="form-control" id="ok" value="Envoyer">
</div>
</div>


</form>
</div>
</div></div>

<h2>
les methodes d'envoi
GET : data transferee ds le lien  (motocycle R1)
=> capacite (-)\
=> vitesse (+)
=> securite (-)

POST : data cachee (camion) + 
=> capacite (+)
=> vitesse (-)
=> securite (+)
</h2>
    
</body>
</html>