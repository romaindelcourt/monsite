<?php
session_start();
ini_set('display_errors','off');

require_once 'config/connexion.inc.php';
require_once 'config/bdd.inc.php';
// Chargement fichier de connexion à la base de données
//***SMARTY****//
require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir('template/');

if (isset($_POST['envoyer'])) {
    // Si le bouton envoyer est posté, je traite les données
    $titre = addcslashes($_POST['titre'], "'%_");
    //Securisation des variables
    $texte = addcslashes($_POST['texte'], "'%_");
   
    $publie = (!empty($_POST['publie']) ? $_POST['publie'] : 0);
   //Definition de la valeur publié
    $date = date("Y-m-d");
    //
    $req_insertion = "INSERT INTO articles (titre, texte, date, publie) VALUES ('$titre', '$texte', '$date', $publie) ";
    //echo $req_insertion;
     //Requete d'insertion des données dans la table article
    $erreur_image = $_FILES['image']['error'];
    //Definition de l'erreur de l'image
    if ($erreur_image != 0) {
        
        $_SESSION['msg_error'] = "Une erreur est survenue lors du chargement de votre image";
        header("location: article.php");
       
       } else { //Sinon on continu
    
         mysql_query($req_insertion); //Execution de la requete SQL
         
         $id_article = mysql_insert_id(); //Definition de l'id de l'article
         
         move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . "/img/$id_article.jpg");
        // Deplacement et rennommage de l'image
         //echo 'Insertion de l\'article OK';
         //Afficher le résultat
         $_SESSION['msg_reussi'] = "Insertion de l'article OK";
         header("location: index.php");
           
         }
} else {
    /* ----------------- HTML ------------------ */
    
    include_once 'include/header.inc.php'; //insertion du header html
    if (isset($_SESSION['msg_error'])) {   
    ?>
    <div class="alert alert-error" id="notif">
    <?php  echo $_SESSION['msg_error']; ?></div>
    <?php  unset($_SESSION['msg_error']);
    }
    
    if (isset($_POST['envoyer'])) {
        $smarty->assign('envoyer', $_SESSION['envoyer']);
    }
    
    if (isset($_SESSION['msg_error'])) {
        $smarty->assign('msg_error', $_SESSION['msg_error']);
    }
    
    $smarty->debugging = true;

    $smarty->display('article.tpl');
    
    include_once 'include/menu.inc.php';
    include_once 'include/footer.inc.php';
}
?>   

