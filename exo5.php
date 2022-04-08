<h1> Exercice 5</h1>
<hr>
<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<p>
        <strong>Attention, la valeur générée devra être arrondie à 2 décimales.</strong><br>
        <p>Montant en francs : 100<br>
            100 francs = 15.24 € </p>
        <br>
        <h1>Solution:</h1><br>
        <hr><br>
        <?php
$montantFrancs = 100;

$montantEuros = 15.24;

$tauxConversion = 6.56;

$montantFrancs / $tauxConversion = $montantEuros; // Division par le taux de change pour Montant en euros

echo "$montantFrancs Francs est égale à $montantEuros euros"; // Nouveau montant en Euros
