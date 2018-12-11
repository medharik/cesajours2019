function validerObligatoire(){

if ($('#email').val()=="" || $('#passe').val()=="") {
    $('#erreur').html("Erreur , tous les champs sont requis");
} else {
    $('#erreur').html("");
  
}


}