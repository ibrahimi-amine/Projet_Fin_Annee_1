<?php
include('connectbdd.php');
$reponse=$bd->prepare('INSERT INTO Chercheur(nom_chercheur,email_chercheur,profile_chercheur,gender_chercheur,fonction_chercheur) values (?,?,?,?,?)');
$reponse->execute(array("abdel had","directeur@directeur","avatar_man.png","man","directeur"));
$reponse->closeCursor();







?>
