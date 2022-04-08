<h1> Exercice 13</h1>
<hr>
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient).<br>
 Elle devra être affichée avec 2 décimales.<br>
<br>
<br>
<h1>Solution:</h1><br>
<hr><br>

<?php

$notes = [10, 12, 16, 18, 20, 14, 16, 17, 17, 19, 12.5];

$moyenne = array_sum($notes) / count($notes);

$moydec = number_format($moyenne, 2);

echo "Martin à $moydec de moyenne";
