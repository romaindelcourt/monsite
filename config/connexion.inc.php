<?php

$valeur = False;
if (isset($_COOKIE['sid'])) {
    
    $sid = $_COOKIE['sid'];
    $select_sid = "SELECT * FROM `connexion` WHERE sid = '$sid'";
    $req_sid = mysql_query($select_sid);
    $grille = mysql_fetch_array($req_sid);

    if ($grille) {
        
        $valeur = True;
    }   
    
}



// sur toute les pages protégées : tester la valeur de la variable $valeur grace à une condition
// redirige l'utilisateur vers la page de connexion
//on affiche la page



?>
