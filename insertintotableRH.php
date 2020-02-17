<?php
include('connectbdd.php');
$reponse=$bd->prepare('INSERT INTO RH(Departement_idDepartement,Prenom_NomPersonne,email,fonction,image) values (?,?,?,?,?)');
$reponse->execute(array(1,"Abdo Hadfi","admindepinfo@gmail.com","directeur departement","avatar_man.png"));
$reponse->closeCursor();







?>
