<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<title>test PHP</title>
</head>
<body>
// Exercice :
        // à l'aide d'une boucle while, vous affichez les années de 1920 à 2023 dans un menu déroulant.

        // dans ce cas le php et le html est à part 
        // la partie bootstrap ne se trouve pas dans le  php


        <?php
            $annee = 1920;

            ?>

            <select class="form-select" form-select-lg" name="" id="">;
            

            <?php

            while ($annee <= 2024) {
                echo "<option value= '$annee'> $annee </option>";

                $annee++;
            }
            ?>

            </select>

            //Exercice : Créer en PHP un formulaiere de selection de date de naissance (jour - moi - année)

            <?php
            $jour = 1;
            $mois = 1;
            $annee = 1970;
            ?>


        <form>
    
<fieldset disabled>

<div class="mb-3">

    <label for="jour de naissance" class="jour de naissance">Jour de naissance</label>
    <select id="disabledSelect" class="form-select">
    <option selected>Jour</option>

    
<?php

    for($jour = 1; $jour <= 31; $jour++) {
        echo "<option value= '$jour'> $jour </option>";
    }
    ?>
        </select>
</div>


<div class="mb-3">
    <label for="Mois de naissance">Mois de naissance</label>
    <select id="disabledSelect" class="form-select">
    <option selected>Mois</option>

    <?php

for($mois = 1; $mois <= 12; $mois++) {
    echo "<option value= '$mois'> $mois</option>";
}
?>
    </select>
</div>
<div class="mb-3">
    <label for="Année de naissance">Année de naissance</label>
    <select id="disabledSelect" class="form-select">
    <option selected>Année</option>

    <?php

    for($annee = 1970; $annee <= 2024; $annee++) {
    echo "<option value= '$annee'> $annee</option>";
}
?>

    </select>
</div>
    </label>
</fieldset>
</form>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>