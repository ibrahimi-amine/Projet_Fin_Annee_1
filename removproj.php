<?php
function removeproject($bd,$nom)
        {$reponse=$bd->prepare('SELECT * FROM Projet WHERE nom_projet=?');
         $reponse->execute(array($nom));
         $donnee=$reponse->fetch();
         if(!empty($donnee))
            {$reponse=$bd->prepare('UPDATE Chercheur set id_projetchercheur=NULL WHERE id_projetchercheur=?');
             $reponse->execute(array($donnee["id_projet"]));$reponse->closeCursor();
             $reponse2=$bd->prepare('DELETE FROM Projet WHERE id_projet=?');
             $reponse2->execute(array($donnee["id_projet"]));$reponse->closeCursor();$_SESSION['rmpers']="YES";

            }
         else {
           $error="project not found";
         }
        return($error);









        }









?>
