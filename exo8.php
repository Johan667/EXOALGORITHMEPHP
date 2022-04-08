<h1> Exercice 8</h1>
<hr>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme<br>
    <br>
    <br>
    <h1>Solution:</h1><br>
    <hr><br>
    <?php

// Solution table 1 à 10 //
for ($a = 1; $a <= 10; ++$a) { // Pour $a=1 et $a inferieur ou égal à 10, on incrémente $a
    echo 'Table de Multiplication de <em>'.$a.'<em><br><br>';
    for ($b = 1; $b <= 10; ++$b) {  // Pour $b=1 et $b inferieur ou égal à 10, on incrémente $b
        echo $a.' x '.$b.' = '.$a * $b.'<br><br>'; // Boucle de 1 à 10 pour le produit de $a et $b.
    }
}

// Solution pour $d = 8 ; Valide pour n'importe qu'elle valeur de $d
$c = 1;
$d = 8;
$resultat = '';
while ($c <= 10) {   // Tant que $c le multiplicateur de $d est inferieur ou égale à 10 faire le produit.
    $resultat .= $d.'x'.$c.'='.$d * $c.'<br/>';
    ++$c;
}
echo 'Table de '.$d.'<br/>'.$resultat;
