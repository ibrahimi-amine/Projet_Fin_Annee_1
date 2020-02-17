<?php
include('connectbdd.php');
$reponse=$bd->prepare('INSERT INTO Labo(nom_Labo,id_responsable_labo,id_member_labo,date_creation_labo) values (?,?,?,?)');
$reponse->execute(array("Informatique",4,5,"2018-10-10"));
$reponse->closeCursor();







?>
