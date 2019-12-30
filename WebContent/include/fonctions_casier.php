<?php 
    $erreur = '';
    $db = new PDO('mysql:host=mysql-mariadb14-104.zap-hosting.com;dbname=zap445718-5;charset=utf8', 'zap445718-5', 'SpDPnZJ1dJLofK8I');
    
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $matricule = $_POST['matricule'] ?? '';
    $raison = $_POST['raison'] ?? '';
    
    if(empty($_POST['nom']) && empty($_POST['prenom']) && empty($_POST['matricule']) && empty($_POST['raison'])){
        $erreur = 'Le formulaire n\'est pas rempli correctement';
    }else{
        $requete = $db->exec('INSERT INTO casier(nom, prenom, matricule, raison) VALUES("'.$nom.'", "'.$prenom.'", "'.$matricule.'", "'.$raison.'")');
    }
    if(isset($_GET['supprimer_casier'])){
        $id = $_GET['supprimer_casier'];
        $db->exec("DELETE FROM casier WHERE id=$id");
    }
?>