   <h1> Exercice 2</h1>
   <hr>
   <p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots contenus dans
       celle-ci.<p>
           <br>
           <h1>Solution:</h1><br>
           <hr><br>
           <?php
    $phrase = 'Notre formation DL commence aujourd’hui';
    $nbMots = str_word_count($phrase);
    echo " <strong>$phrase contient $nbMots mots.</strong>";
