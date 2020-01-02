<?php
    $erreur_msg  = '';
    $db = new PDO('mysql:host=164.132.125.4;dbname=gendarmerie;charset=utf8', 'Jacques', 'Tango2267!!*');
    
    $motDePasse = 'R88hbqMB4';
    $motdepasse = $_POST['pass'] ?? '';
    
    if($motdepasse == $motDePasse){
        header("Location: https://gendarmerie.intranet-ice-live.fr");
    }else{
        $erreur_msg = 'Mot de Passe incorrect, vous n\'est pas habilit&eacute; &agrave; acceder &agrave; l\'intranet';
    }
?>