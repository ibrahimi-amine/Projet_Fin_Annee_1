<?php
include('connectbdd.php');
$reponse=$bd->prepare('INSERT INTO Admin values (?,?)');
$reponse->execute(array(2,"password"));
$reponse->closeCursor();
?>
