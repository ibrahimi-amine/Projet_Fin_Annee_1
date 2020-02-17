<?php
function createadmin($bd,$email,$password,$password2)
        {if($password===$password2)
           {$reponse=$bd->prepare('SELECT * FROM Personne WHERE email=?');
            $reponse->execute(array($email));
            $donnee=$reponse->fetch();
            if(empty($donnee))
                 {$error="email not found";}
            else
              {$reponse=$bd->prepare('INSERT INTO Admin values (?,?)');
               $reponse->execute(array($donnee['id'],$password));
               $reponse->closeCursor();}
           }
         else
           {$error="password doesn't mutch";}
         return($error);

      }
?>
