<?php
$title= "Les tableaux en PHP (array())";
$titre = "Les tableaux en PHP";
$paragraphe = "Mon paragraphe";
require_once "inc/header.inc.php";
?>

<main class="container px-5 border">
<div class="row">
    <h2 class="text-center my-5">1- Déclaration des tableaux</h2>
    <div class="col-sm-12 col-md-5 mt-5">
        <h3 class="text-primary text-center">Méthode 1</h3>
        <p>La première façon pour déclarer un tableau c'est en utilisant la fonction <span>array()</span>: <br>
        <code>

            $tableau = array('valeur1', 'valeur2', 'valeur3','valeur4');
        </code>
    
        </p>
    </div>
    <div class="col-sm-12 col-md-5 mt-5">
        <h3 class="text-primary text-center">Méthode 2</h3>
        <p>La deuxième façon pour déclarer un tableau c'est en utilisant la syntaxe courte avec les crochets <span>[]</span>: <br>
        <code>

            $tableau = ['valeur1', 'valeur2', 'valeur3','valeur4'];
        </code>
    
        </p>
    </div>

</div>
<div class="row">
    <h2 class="text-center my-5">2- Afficher les éléments d'un tableau</h2>
    <div class="col-sm-12">
        <ul>
            <li> Pour afficher une valeur d'un tableau on écrit son indice dans paire de crochets après le nom du tableau
                <?php

                    //Déclaration d'un tableau
                    $liste1 = array('Laurence','Grégory', 'Choaib', 'Maryam','Mana');
                    //echo $liste1;// Erreur de type 'Array to string conversion' car on ne peut pas afficher directement un tableau

                    echo'<pre>';
                    var_dump($liste1); // Affiche le contenu du tableau avec les types
                    echo'</pre>';
                    //on entoure le var_dump avec des balises pre afin de garder un format lisible
                    /**
                     * Le var_dump renvoie toutes les informations sur ce qui se trouve dans telle ou telle variable:
                     *  - il donne en premeir lieu le type de varaible et si c'est un tableau, le nom d'éléments contenu
                     *  - Les éléments avec leur types et leur longeur
                     * Cette fonction de débug sera utilie pour vérifier si on a bien récupérer les informations dans une varaible.
                     */
                    $liste2 = ['Laurence','Grégory', 'Choaib', 'Maryam','Mana'];
                    echo'<pre>';
                    var_dump($liste2); // Affiche le contenu du tableau avec les types
                    echo'</pre>';
                ?>
            </li>
            <li>
                Afficher Bonjour Laurence depuis votre votre PHP grâce à l'array créé.
            </li>

            <?php
                echo "<p class=\"alert alert-success w-25\">Bonjour $liste1[0]</p>";
                echo "<p class=\"alert alert-success w-25\">Bonjour $liste2[0]</p>";
            ?>
        </ul>
    </div>
</div>
<div class="row">
    <h2 class="text-center my-5">3- Tableu non prédéfini</h2>
    <div class="col-sm-12 col-md-6">
        <h3 class="text-primary text-center">Exemple de tableau non prédéfinie</h3>
        <?php
            $listePays[]= 'Angleterre';
            $listePays[]= 'Espagne';
            $listePays[]= 'France';
            $listePays[]= 'Portugal';

            echo'<pre>';
            var_dump($listePays); 
            echo'</pre>';
        ?>
    </div>
    <div class="col-sm-12 col-md-6">
        <h3 class="text-primary text-center">Ajouter une valeur à la fin d'un tableau</h3>
        <?php
            // Les crochets videes signifient qu'on ajoute une valeur à la fin du tableau
            //Existe des fonctions php pour ajouter des éléments dans un tableau
            $liste2[]= 'Junior';
            echo'<pre>';
            var_dump($liste2); 
            echo'</pre>';

            
        ?>
    </div>
</div>
<div class="row">
    <h2 class="text-center my-5">4 - Les catégories de tableaux en PHP</h2>
        <div class="col-sm-12">
            <p>Un tableau c'est une liste de couples <span>clé / valeur</span> :</p>
            <ul>
                <li>Si la clé est un entier, on parle de tableau indexé. La clé est appelée un index. Les index ne sont pas forcément des entiers consécutifs.</li>
                <li>Si la clé est une chaîne, on parle de tableau associatif.</li>
            </ul>
            <p class="alert alert-secondary">En PHP, comme dans tous les langages, il existe des tableaux à plusieurs dimensions. </p>
            <p class="alert alert-secondary"> Pour construire un tableau multidimensionnel on peut utiliser les deux types de tableaux, indexé ou associatif. </p>
            <p class="alert alert-secondary"> On peut faire un tableau à une seule dimension, dans lequel les clès vont être successivement des entiers puis des chaînes </p>
        </div>
        <div class="col-sm-12 col-md-6">
            <h3 class="text-primary text-center mt-5">Les tableaux indéxés</h3>
            <h4>1- Création d'un tableau avec <span>indexation automatique</span></h4>

            <?php
                $tab1 = ['Jaune', 'Rouge', 'Vert'];
                //Le prmeir index commence à l'entier 0
                echo'<pre>';
                var_dump($tab1); 
                echo'</pre>';

            ?>
            <h4>2- Création d'un tableau avec <span>indexation manuelle</span></h4> 
            <p>Le tableau peut- être créé manuellement élément par élément. Dans ce cas, les indexs sont "placés à la main". Il n'est pas obligatoire de commencer à l'entier zéro. les indexs peuvent être des entiers non consécutifs</p>

            <?php
                $tab2[3]= 'Orange';
                $tab2[10]= 'Magenta';
                $tab2[14]= 'Noir';

                echo'<pre>';
                var_dump($tab2); 
                echo'</pre>';

            ?>

        </div>
        <div class="col-sm-12 col-md-6">
            <h3 class="text-primary text-center mt-5">Les tableaux associatifs</h3>
            <?php
                $couleur1 = array(
                    'b' =>'bleu',
                    'r' => 'rouge',
                    'v'=> 'vert',  // La virgule ici est possible mais pas obligatoire// Vous pouvez mettre une virgule après le dernier élément. De cette manière, si jamais, vous ajoutiez un élémeznt et bien la virgule serait déjà là 

                );

                echo'<pre>';
                var_dump($couleur1); 
                echo'</pre>';

                $couleur2 = [
                    'g'=> 'gris',
                    'n' => 'noir',
                    'j'=> 'jaune'
                ];
                echo'<pre>';
                var_dump($couleur2); 
                echo'</pre>';

                //Pour afficher une valeur de notre tableau associatif :
                    echo 'La première couleur du tableau 1 est : ' .$couleur1['b'] . '.<br>';
                    echo "La deuxième couleur du tableau 1 est {$couleur1['r']} .<br> ";
                    echo "La troisième couleur du tableau 1 est {$couleur1['v']} .<br> "; // Quand un tableau associatif est écrit dans des guillemets ou des doubles quoutes, il perd les qupotes autour de son indice
            
            ?>

        </div>
        <div class="col-sm-12">
                <h3 class="text-primary text-center my-5">Les tableaux multidimensionnels</h3>
                <div class="row">
                    <div class="col-sm-4">
                        <h4>1- Tableau multidimentionnel : <span>1ére dimension : indexé / 2éme dimension : indéxé</span></h4>

                        <?php
                            $tab_multi_1 = [
                                0 => [ 
                                    0 => 'rouge',
                                    1 => 'vert',
                                    2 => 'bleu' 

                                ],
                                1 => [
                                    0 => 'rose',
                                    1 => 'violet',
                                    2 => 'beige'

                                ],
                                2 =>[
                                    0 => 'blanc',
                                    1 => 'jaune',
                                    2 => 'noir'
                                ]

                                ];

                                echo'<pre>';
                                var_dump($tab_multi_1); 
                                echo'</pre>';
                
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <h4>2- Tableau multidimentionnel : <span>1ére dimension : indexé / 2éme dimension : associatif</span></h4>
                        <?php
                            $tab_multi_2 = [
                                0 => [
                                    'prenom' => 'Julien',
                                    'nom'=>'Dupon',
                                    'telephone' => '0122211220'

                                ],
                                1 => [
                                    'prenom' => 'Nicolas',
                                    'nom'=> 'Duron',
                                    'telephone' => '0785451212'
                                ],
                                2 =>[
                                    'prenom' => 'Pierre',
                                    'nom'=>'Dulac',
                                    'telephone'=> '0125662789'

                                ]
                            ];

                            echo'<pre>';
                            var_dump($tab_multi_2); 
                            echo'</pre>';
                
                        ?>

                    </div>
                    <div class="col-sm-4">
                        <h4>3- Tableau multidimentionnel : <span>1ére dimension : assocatif / 2éme dimension : associatif</span></h4>
                        <?php
                            $tab_multi_3 = [
                                'personne1' => [
                                    'prenom' => 'Julien',
                                    'nom'=>'Dupon',
                                    'telephone' => '0122211220'

                                ],
                                'personne2' => [
                                    'prenom' => 'Nicolas',
                                    'nom'=> 'Duron',
                                    'telephone' => '0785451212'
                                ],
                                'personne3' =>[
                                    'prenom' => 'Pierre',
                                    'nom'=>'Dulac',
                                    'telephone'=> '0125662789'

                                ]
                            ];

                            echo'<pre>';
                            var_dump($tab_multi_3); 
                            echo'</pre>';
                
                        ?>

                    </div>
                    <div class="col-sm-12">
                        <h4>4- Substitution d'un élément de tableau multidimentionnel dans une chaîne de caratère</h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <?php
                                echo "<p> Le nom de la personne 2 : {$tab_multi_3['personne2']['nom']}.</p>";
                            //Ici on affiche la valeur de l'index nom du tableau personne 2 qui est l'index du tableau tab_multi_3
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <p class="alert alert-danger">Afin de parcourir un tableau il faut utiliser une boucle </p>
                    </div>
                </div>
        </div>
</div>
<div class="row">
    <h2 class="text-center my-5">5 - Parcourir les tableaux grâce au boucles </h2>
    <div class="col-sm-12 col-md-6">
        <h3 class="text-primary text-center">Boucle for</h3>
        <ul>
            <li>La boucle for va permettre de parcourir un array, et d'en extraire les données pour les afficher sous la forme demandée.</li>
            <li>On utilise la boucle for dans les tableaux indexés</li>
            <li>L’utilisation de la boucle for dans le parcours d’une table nécessite le calcule de la taille du tableau à chaque itération.</li>
        </ul>
        <?php
            // Avec un tableau unidimesionnel

            $listeFournitures = ['stylo', 'crayons de papier', 'surligneurs', 'feutres', 'règle'];
                                //0           //1                //2           //3         //4
            echo'<pre>';
            var_dump($listeFournitures); 
            echo'</pre>';

            echo "<p>La liste des fournitures :</p>";
            echo "<ul>";
                for ($i=0; $i < sizeof($listeFournitures) ; $i++) {  // Tant que $i est in nférieurs au nombres d'élément du tableau on netre dans la boucle
                    //La fonction prédéfinie sizeof()  permet de calculer le nombre d'élément dans un tableu. La fonction count() permet de faire la même chose
                    echo "<li> -> $listeFournitures[$i]</li>";//le $i représente l'index du tableau et c'est la raison pour laquelle on passe entre les crochets à la suit de $listeFournitures. On lui indique ainsi qu'au premier  lieu on veut afficher le premier élément du tableau et ainsi de suite
                    
                }
            echo"</ul>";

            // Avec un tableau multidimentionnel

            $listeEleve = [
                0=> [
                    'prenom' => 'Julien',
                    'classe'=> 'maternelle',
                    'ecole' => 'Saint-michel-sur-orge'
                ],
                1=> [
                    'prenom' => 'Theo',
                    'classe'=> 'elementaire',
                    'ecole' => 'Evry'
                    
                ],
                2=> [
                    'prenom' => 'milina',
                    'classe'=> 'maternelle',
                    'ecole' => 'Brétigny'
                    
                ]
                ];

                
                echo"<p>La liste des éleves</p>";   
                echo "<ol>";

                for ($i=0; $i < count($listeEleve) ; $i++) {
                    
                    echo "<li>Eleve ". $i+1 .
                            "<ul>
                                <li>Prénom -> {$listeEleve[$i]['prenom']}.</li>
                                <li>Classe -> {$listeEleve[$i]['classe']}.</li>
                                <li>Ecole-> {$listeEleve[$i]['ecole']}.</li>
                            </ul>
                            </li>";
                    
                    
                }
                echo "</ol>";
        ?>

        

    </div>
    <div class="col-sm-12 col-md-6">
        <h3 class="text-primary text-center">Boucle while</h3>
        <ul>
            <li>La boucle while, permet de parcourir un tableau d'une manière efficace dans le cas d'un tableau retourné après une requête sur une base de donnée</li>
        </ul>
        <?php
            $apprenants = ['Bakary', 'Tatiana', "Sadek", 'Zaahid'];
            $i =0;
            while (isset($apprenants[$i])) {// isset() détermine si une variable existe
                //La fonction vérifie en fait si la variable est déclaré et si elle est tout sauf null 
                //isset renverra false si la valeur de notre variable est null (n'existe pas )
                echo "<p> Mon tableau \$apprenents  contient : $apprenants[$i].</p>";
                
                
                $i++;
            }

        ?>
    </div>
    <div class="col-sm-12">
        <h3 class="text-primary text-center">Boucle foreach</h3>
        <ul>
                <li>La boucle foreach est un moyen simple de passer un revue un tableau de façcon automatique . Cette boucle ne fonction que sur les tableaux est les objets.</li>
                <li>Elle est efficace pour les tableaux associatifs mais fonctionne également pour les tableaux avec indexés</li>
                <li>Contrairement à la boucle for, la boucle foreach() ne nécessite pas de connaître par avance le nombre d’éléments du tableau à lire. Sa syntaxe varie en fonction du type de tableau.</li>
                <li>La structure foreach a deux formes. La première ne récupère que les valeurs. La deuxième récupère les clés et les valeurs.</li>                    
        </ul>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h4>Parcours des valeurs du tableau</h4>
                    <code>
<pre>
        foreach($tableau as $valeur) {
            
            //bloc de code utilisant les valeurs de la variable $tableau
        }
</pre>
                    </code>
            

                <?php 
                    $langages = ['HTML', 'CSS', 'JS', 'PHP'];
                    echo "<ul>";

                        foreach($langages as $valeur){ // On parcourt le tableau par ses valeurs. la variable $ valeur prend les valeurs du tableau successivement à chaque tour de boucle. Le mot clé "as" fait partie de la syntaxe, il est obligatoire.
                            echo "<li>Langage = $valeur</li>";

                        }

                    echo "</ul>";
                
                ?>
            </div>
            <div class="col-sm-12 col-md-6">
                <h4>Parcours des clés et des valeurs du tableau </h4>
                <code>

<pre>
    foreach($tableau as $clé => $valeur){

        //bloc de code utilisant les clés et les valeurs du tableau
    }
</pre>
                </code>
                <?php


                    echo "<ul>";

                    foreach($langages as $cle => $valeur){ // Je peux récupérer la clé et la valeur, que le tableau soit indéxé ou associatif, quand il y a 2 variable après as  celle de gauche parcours les indices et celle de droite parcourt les valeurs 
                        echo "<li>\$cle = $cle : langage = $valeur</li>";

                    }

                echo "</ul>";

                ?>

            </div>
        </div>
        
    </div>
    <p class="alert alert-secondary">La boucle foreach s'écrit toujours de la même façon. Entre les parenthèses, nous retrouverons d'abord le nom de la variable contenant un tableau. Vient ensuite le mot clé <code>as</code>, prédéfinit dans le langage PHP. Ensuite on trouve les deux variables qui représentent les indices du tableau et leurs valeurs. On peut donner le nom que l'on veut aux deux variables $key et $value, c'est leur emplacement qui indique à quoi elles servent. Entre ces deux variables on retrouve la flèche <code>=></code> qui signifie "correspond à". </p>
    <?php

    // Exercice 1 : vous déclarez un tableau associatif avec les indices prenom, nom, email, telephone et vous y metter les valeurs correspondant à un seul contact. Puis avec une boucle foreach , vous affichez les valeurs dans des <p>, sauf le prenom doit étre dans un <h3>.

        //Correction : 
        $contact = array(
            'prenom' => 'Sahar',
            'nom' => 'Ferchichi ',
            'email' => 'sahar.ferchichi@10mentionweb.org',
            'telephone' => '07 01 01 01 01'
        );

        // $contact = [
        //     'prenom' => 'Sahar',
        //     'nom' => 'Ferchichi ',
        //     'email' => 'sahar.ferchichi@10mentionweb.org',
        //     'telephone' => '07 01 01 01 01'
        // ];

        foreach ($contact as $key => $value) {
            if($key == 'prenom'){

                echo "<h3> Bonjour $value</h3>";

            }else{
                echo "<p>$value</p>";
            }
            
        }


    //Exercice  2 :  Vous déclarez un tableau avec les tailles  S, M et L et XL , puis vous affichez les tailles dans un menu déroulant avec une boucle foreach .

    //Correction
        $taille = ['S', 'M', 'L', 'Xl'];

    ?>
    
    <form>
        <label>Tailles</label>
        <select>
        <?php
            foreach($taille as $valeur){
        ?>       
                <option value="<?=$valeur ?>"> <?=$valeur ?></option>
        <?php       
            }
        ?>
        </select>
    </form>





</div>



</main>






<?php
require_once "inc/footer.inc.php";
?>