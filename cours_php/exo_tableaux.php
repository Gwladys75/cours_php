<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<title>Document</title>
</head>
<body>

// Exercice 1 : vous déclarez un tableau associatif avec les indices prenom, nom, email, telephone et vous y metter les valeurs correspondant à un seul contact. 

<?php

$contact = [ 
'prenom' => 'Gwladys',
'nom' => 'JACOBIN',
'email' => 'gwladys.jacobin@colombbus.org',
'telephone' => '0603206129'

];


foreach($contact as $cle => $valeur) {
if ($cle == 'prenom'){
    echo "<h3> Bonjour $valeur</h3>";

}else{
    echo "<p>$valeur</p>";
}


}


?>

<?php

//Exercice  2 :  Vous déclarez un tableau avec les tailles  S, M et L et XL , puis vous affichez les tailles dans un menu déroulant avec une boucle foreach .



$taille = ['S','M','L','XL'];

echo '<select class="form-select form-select-lg" name="taille" id="taille">';
                        echo "<option value=''> Choisissez votre taille</option>";

                        
                        foreach($taille as $valeur){
                            echo "<option value='$valeur'> $valeur</option>";

                        }


echo  '</select>';

?>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">

</body>
</html>
