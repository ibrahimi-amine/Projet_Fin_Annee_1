<?php
function addcredit($bd,$Npe,$code,$credit)
        {$reponse=$bd->prepare('INSERT INTO Credit VALUES (?,?,?,?)');
         $reponse->execute(array($Npe,$code,(float)$credit,(float)$credit));
         $reponse->closeCursor();return(NULL);

        }










?>
