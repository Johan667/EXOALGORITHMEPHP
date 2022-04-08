<h1> Exercice 15</h1>
<hr>
<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.<br>
$p1 = new Personne("DUPONT","Michel", "1980-02-19");$p2 =new Personne("DUCHEMIN","Alice", "1985-01-17");<br>
<br>
<h1>Solution:</h1><br>
<hr><br>
<?php

    class Personne // On crée la Classe personne
    {
        public $nom;          // On attribut des fonctions/ attributs à cette classe
        public $prénom;
        public $naissance;
    }

    $Michel = new Personne();    // On crée l'objet Nouvelle personne (Michel)
    $Michel->nom = 'DUPONT<br>'; // On lui attribut des caractéristiques en appelant la fonction
    $Michel->prénom = 'Michel<br>';
    $Michel->naissance = '1980-02-19<br>';

    $Alice = new Personne();
    $Alice->nom = 'DUCHEMIN<br>';
    $Alice->prénom = 'Alice<br>';
    $Alice->naissance = '1985-01-17<br>';

    var_dump($Michel); // On affiche
    var_dump($Alice);

?>