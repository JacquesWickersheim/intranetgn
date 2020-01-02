<?php 
    $erreur = '';
    $db = new PDO('mysql:host=164.132.125.4;dbname=gendarmerie;charset=utf8', 'Jacques', 'Tango2267!!*');
    
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $matricule = $_POST['matricule'] ?? '';
    $raison = $_POST['raison'] ?? '';
    $dureegav = $_POST['duree'] ?? '';
    
    if(empty($_POST['nom']) && empty($_POST['prenom']) && empty($_POST['matricule']) && empty($_POST['raison']) && empty($_POST['duree'])){
        $erreur = 'Le formulaire n\'est pas rempli correctement';
    }else{
        $requete = $db->exec('INSERT INTO gav(nom, prenom, matricule, raison, duree) VALUES ("'.$nom.'", "'.$prenom.'", "'.$matricule.'", "'.$raison.'", "'.$dureegav.'")');
    }
    if(isset($_GET['supprimer_gav'])){
        $id = $_GET['supprimer_gav'];
        $db->exec("DELETE FROM gav WHERE id=$id");
    }
?>