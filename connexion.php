<?php
session_start();
ini_set('display_errors','off');

require_once 'config/bdd.inc.php';
include_once 'include/header.inc.php';
require_once 'config/connexion.inc.php';

//***SMARTY****//
require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir('template/');


if (isset($_POST['connexion'])) {
    // Si le bouton connexion est posté, je traite les données
    $email = addcslashes($_POST['email'], "'%_");
    //Securisation des variables
    $mdp = addcslashes($_POST['mdp'], "'%_");

    $select_connexion = "SELECT * FROM `connexion` WHERE email = '$email' AND mdp = '$mdp'";
    $req = mysql_query($select_connexion);
    $tableau = mysql_fetch_array($req);

    
    if ($tableau) {

        //$email = 'romaindelcourt@hotmail.fr';
        $sid = md5($email . time());
        $update = 'UPDATE connexion SET sid="valeur" WHERE id="$id" ';
        setcookie('sid', "$sid", time() + (30 * 60)); //en seconde

        $_SESSION['msg_reussi'] = "Connexion réussie"; //Mise en session du message de confirmation
        header("location: index.php"); //Redirection vers l'accueil
    } else {
        $_SESSION['msg_error'] = "Dommage, vous n'êtes pas répertorié dans la base de données, merci de réessayer";
        header("location: connexion.php");
   
    }
} else {
    
    if (isset($_SESSION['msg_error'])) {   
    ?>
    <div class="alert alert-error" id="notif">
    <?php  echo $_SESSION['msg_error']; ?></div>
    <?php  unset($_SESSION['msg_error']);
    } 
    
    if (isset($_SESSION['connexion'])){
        $smarty->assign('connexion', $_SESSION['connexion']);  
    }
    
    $smarty->debugging = true;

    $smarty->display('connexion.tpl');
    
 
    include_once 'include/menu.inc.php';
    include_once 'include/footer.inc.php';
}
?>
