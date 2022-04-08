<h1> Exercice 9</h1>
<hr>
<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br>
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).<br>
<br>
<br>
<h1>Solution:</h1><br>
<hr><br>
<?php
$age = 25;
$genre = 'homme';

    if ($genre == 'femme' and $age < 18 && $age >= 35) {
        echo 'Vous êtes une femme entre 18 et 35 ans, Vous êtes imposable';
    } elseif ($age > 20 and $genre == 'homme') {
        echo 'Vous êtes un homme agée 20 ans et plus Vous êtes imposable';
    } else {
        echo 'Vous etes pas imposable';
    }
