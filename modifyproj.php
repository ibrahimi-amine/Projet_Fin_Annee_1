<?php
include('connectbdd.php');
if(isset($_POST["checkmodifyprojbtn"]))
{$reponse=$bd->prepare('SELECT * FROM Projet WHERE nom_projet=?');
 $reponse->execute(array($_POST['InputNomproject']));
 $donnee=$reponse->fetch();
 $_SESSION["donneproj"]=$donnee;
 if(empty($donnee))
   {$error="projet not found";
   }
}
?>
