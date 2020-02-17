<?php
include('connectbdd.php');
$reponse=$bd->query('SELECT * FROM Personne');

while(!empty($donnee=$reponse->fetch()))
{
  echo $donnee['id'].' '.$donnee['Nom'].' '.$donnee['email'].' '.$donnee['fonction'].'<br>' ;


}

$reponse->closeCursor();


























?>
