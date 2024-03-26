<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap CSS v5.2.1 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<title>Document</title>
</head>
<body>


<form action="">
    <label for="jour">Jour de naissance</label>
    <select class="form-select" name="jour" id="jour">
        <option value="">Choisir jour de naissance</option>
        <?php

        for ($jour = 1; $jour <= 31; $jour++) {

            

            echo "<option value='$jour'>$jour</option>";

        }
        ?>

    </select>

    <label for="mois">Mois de naissance</label>
    <select class="form-select" name="mois" id="mois">
        <option value="">Choisir mois de naissance</option>
        <?php

        for ($mois = 1; $mois <= 12; $mois++) {

            

            echo "<option value='$mois'>$mois</option>";

        }
        ?>

    </select>



    <label for="annee">Année de naissance</label>
    <select class="form-select" name="annee" id="annee">
        <option value="">Choisir année de naissance</option>
        <?php

        for ($annee = 2024; $annee > 1971; $annee--) {

            

            echo "<option value='$annee'>$annee</option>";

        }
        ?>

    </select>


</form>

<?php

echo '<form>
        <label for="jour">Jour de naissance</label>
        <select class="form-select" name="jour" id="jour">
        <option value="">Sélectionnez votre jour de naissance</option>';

        for ($jour = 1; $jour <= 31; $jour++) {
            echo "<option value='$jour'>$jour</option>";
        }

echo '</select>
        <label for="mois">Mois de naissance</label>
        <select class="form-select" name="mois" id="mois">
        <option value="">Sélectionnez votre mois de naissance</option>';

        for ($mois = 1; $mois <= 12; $mois++) {
            echo "<option value='$mois'>$mois</option>";

        }

echo '</select>
        <label for="annee">Année de naissance</label>
        <select class="form-select" name="annee" id="annee">
        <option value="">Sélectionnez votre année de naissance</option>';

        for ($annee = 2024; $annee > 1970; $annee--) {

            echo "<option value='$annee'>$annee</option>";

        }

echo '</select>
        </form>';

        
        
// Exercice : Créer un tableau qui affiche 0 à 9 sur une seule ligne

?>




<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>
</html>