<?php 
    $erreur ='';
    $db = new PDO('mysql:host=164.132.125.4;dbname=gendarmerie;charset=utf8', 'Jacques', 'Tango2267!!*');
    
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $matricule = $_POST['matricule'] ?? '';
    $raison = $_POST['raison'] ?? '';
    $vehicule = $_POST['vehicule'] ?? '';
    $description = $_POST['description'] ?? '';
    
    if(empty($_POST['nom']) && empty($_POST['prenom']) && empty($_POST['matricule']) && empty($_POST['raison']) && empty($_POST['vehicule']) && empty($_POST['description'])){
        //echo $erreur = 'le formulaire n\'est pas rempli correctement';
    }else{
        $requete = $db->exec('INSERT INTO avisrecherche(nom, prenom, matricule, raison, vehicule, description) VALUES("'.$nom.'", "'.$prenom.'", "'.$matricule.'", "'.$raison.'", "'.$vehicule.'", "'.$description.'")');
    }
    if(isset($_GET['supprimer_avr'])){
        $id = $_GET['supprimer_avr'];
        $db->exec("DELETE FROM avisrecherche WHERE id=$id");
    }
?>