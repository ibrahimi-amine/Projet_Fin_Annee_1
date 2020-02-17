<?php
function createrubrique($bd,$code,$des)
        {$reponse=$bd->prepare('SELECT * FROM Rubrique WHERE code=?');
         $reponse->execute(array($code));
         $donnee=$reponse->fetch();
         if(empty($donnee))
            {$reponse=$bd->prepare('INSERT INTO Rubrique VALUES (?,?)');
             $reponse->execute(array($code,$des));
             $reponse->closeCursor();$_SESSION['addrub']="YES";return(NULL);
            }
         else {
           $error="Rubrique already exist";
         }


        }






?>
