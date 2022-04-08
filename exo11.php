<h1> Exercice 11</h1>
<hr>
<p>Initialiser  un  tableau  de  x  marques  de  voitures.  Ecrire  un  algorithme permettant  de  parcourir  ce tableau et d’en afficher le contenu (une marque de voiture par ligne).<br>
 Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.<br>
<br>
<br>
<h1>Solution:</h1><br>
<hr><br>

<?php
$voiture = ['Mercedes', 'Tesla', 'BMW', 'Maserati', 'Bugatti']; // tableau voiture

for ($num = 0; $num < 5; ++$num) { // boucle pour les ajouter
   echo '<li>'.$voiture[$num].'</li><br />'; // affiche les noms de marques
}
$Nbelement = count($voiture);
echo " Il y à $Nbelement marques de voiture dans le tableau";
?>