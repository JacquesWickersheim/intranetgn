<?php 
    $erreur = '';
    $db = new PDO('mysql:host=intranetcg2805.mysql.db;dbname=intranetcg2805;charset=utf8', 'intranetcg2805', 'Tango2267');
    
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $matricule = $_POST['matricule'] ?? '';
    $raison = $_POST['raison'] ?? '';
    $description = $_POST['description'] ?? '';
    
    if(empty($_POST['nom']) && empty($_POST['prenom']) && empty($_POST['matricule']) && empty($_POST['raison']) && empty($_POST['description'])){
        $erreur = 'le formulaire n\'est pas rempli correctement';
    }else{
        $requete = $db->exec('INSERT INTO plainte(nom, prenom, matricule, raison, description) VALUES ("'.$nom.'", "'.$prenom.'", "'.$matricule.'", "'.$raison.'", "'.$description.'")');
    }
    if(isset($_GET['supprimer_plainte'])) {
        $id = $_GET['supprimer_plainte'];
        $db->exec("DELETE FROM plainte WHERE id=$id");
    }
?>