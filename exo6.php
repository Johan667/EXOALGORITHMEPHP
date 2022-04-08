<h1> Exercice 6</h1>
<hr>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)<p>
Prix unitaire de l’article :<strong> 9.99 €</strong><br>
Quantité :<strong> 5</strong><br>
Taux de TVA :<strong> 0.2</strong><br>
Le montant de la facture à régler est de :<strong> 59.94 €</strong><br><br>
<br>
<h1>Solution:</h1><br>
<hr><br>
<?php

$article = 9.99;

$quantite = 5;

$tva = 20 / 100;

$prixHT = $article * $quantite;

$facture = $article * $quantite * (1 + $tva);

echo " Le prix HT est de <strong>$prixHT €</strong><br> Le prix TTC est de <strong>$facture €</strong>";
