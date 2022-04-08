    <h1> Exercice 1</h1>
    <hr>
    <p>Soit la phrase «Notre formation DL commence aujourd'hui».
        Ecrire un algorithme permettant de compter le nombre de caractèrescontenus dans cette phrase (espaces inclus).
        <p>
            <br>
            <h1>Solution:</h1><br>
            <hr><br>
            <?php

    $phrase = 'Notre formation DL commence aujourd’hui';
    $nbCaracteres = strlen($phrase);
    echo "<strong>La phrase '$phrase' contient $nbCaracteres caractères</strong>";
