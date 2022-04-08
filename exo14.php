<h1> Exercice 14</h1>
<hr>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).<br>
<br>
<br>
<h1>Solution:</h1><br>
<hr><br>
<?php
$anneeNaissance = '31-05-1996';
$aujourdhui = date('Y-m-d');
$calcule = date_diff(date_create($anneeNaissance), date_create($aujourdhui)); // Fonctions date_diff et date_create php.net
echo 'Vous avez '.$calcule->format('%y').'ans , '.$calcule->format('%m').' mois et '.$calcule->format('%d').' jours';
?>
