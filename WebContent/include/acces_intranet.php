<?php
    $erreur_msg  = '';
    $db = new PDO('mysql:host=mysql-mariadb14-104.zap-hosting.com;dbname=zap445718-5;charset=utf8', 'zap445718-5', 'SpDPnZJ1dJLofK8I');
    
    $motDePasse = 'R88hbqMB4';
    $motdepasse = $_POST['pass'] ?? '';
    
    if($motdepasse == $motDePasse){
        header("Location: http://ice-life.fr/gendarmerie/gendarmerie.html");
    }else{
        $erreur_msg = 'Mot de Passe incorrect, vous n\'est pas habilit&eacute; &agrave; acceder &agrave; l\'intranet';
    }
?>