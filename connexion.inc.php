<?php

$PARAM_hote='localhost';
$PARAM_utilisateur='Germain_1'; // le chemin vers le serveur
$PARAM_nom_bd='schwarzwalder'; // le nom de votre base de données
$PARAM_port='3308';// nom d'utilisateur pour se connecter
$PARAM_mot_passe='Nantes44'; // mot de passe de l'utilisateur pour se connecter
$conn = new mysqli($PARAM_hote,$PARAM_utilisateur,$PARAM_mot_passe, $PARAM_nom_bd,$PARAM_port);
?>