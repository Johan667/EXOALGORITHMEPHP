<h1> Exercice 3</h1>
<hr>
<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot
    « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.<p>
        <br>
        <h1>Solution:</h1><br>
        <hr><br>
        <?php

$phrase = 'Notre formation DL commence aujourdhui.';
$aujour = ['aujourdhui'];
$demain = ['demain'];
$newphrase = str_replace($aujour, $demain, $phrase); // Remplacer toutes les occurrences de la chaîne de recherche par la chaîne de remplacement.

echo "$phrase <br>"; // Ancienne phrase
echo "<strong>$newphrase</strong>"; // Nouvelle phrase
