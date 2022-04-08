<h1> Exercice 4</h1>
<hr>
<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.
    Phrase:<strong>«Engage le jeu que je le gagne»</strong>
    <p>
        <br>
        <h1>Solution:</h1><br>
        <hr><br>
        <?php

$test = strrev('Engage le jeu que je le gagne'); // Inverser une chaîne
$inverse = strrev($test);

// Test si la phrase est un palindrome ou non

if ($test === $inverse) {
    echo $test.' est palindrome';
} else {
    echo $test.' n\'est pas palindrome';
}
