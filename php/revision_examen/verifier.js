function verifier(){
var mat=document.getElementById('matricule');
var erreur=document.getElementById('erreur');
var f=document.getElementById('f');

var modele=/^[0-9]{4,6}-[a-zA-Z]{1}-[0-9]{1,2}$/
if(!modele.test(mat.value)){
//alert('erreur')
erreur.innerHTML="Erreur , le matricule n'est pas valide";
}else{
    f.submit();
}

}