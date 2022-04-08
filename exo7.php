<h1> Exercice 7</h1>
<hr>
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge:<br><br>
    Poussin: entre 6 et 7 ans<br>
    Pupille: entre 8 et 9 ansMinime: entre 10 et 11 ans<br>
    Cadet: à partir de 12 ansSi la catégorie n’est pas gérée, merci de le préciser.<br><br>
    <br>
    <h1>Solution:</h1><br>
    <hr><br>
    <?php
$age = 10;

if ($age >= 12) {
    echo '<strong>L’enfant qui à plus de 12 ans appartient à la catégorie « Cadet»</strong>';
} elseif ($age >= 10) {
    echo '<strong>L’enfant qui a 10 ans appartient à la catégorie « Minime »</strong>';
} elseif ($age >= 8) {
    echo '<strong>L’enfant qui a 8 ans appartient à la catégorie « Pupille »</strong>';
} elseif ($age >= 6) {
    echo '<strong>L’enfant qui a 10 ans appartient à la catégorie « Poussin »</strong>';
}
