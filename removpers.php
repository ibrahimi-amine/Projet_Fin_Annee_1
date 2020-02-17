<?php
function remove($bd,$email,$nom)
      {$reponse=$bd->prepare('SELECT * FROM Chercheur WHERE email_chercheur=?');
       $reponse->execute(array($email));
       $donnee=$reponse->fetch();
       if(!empty($donnee))
          {if($donnee["nom_chercheur"]==$nom)
              {$reponse=$bd->prepare('DELETE FROM Chercheur WHERE email_chercheur=?');
               $reponse->execute(array($email));$reponse->closeCursor();$_SESSION['rmpers']="YES";
               if($email==$_SESSION['email'])
                  {header('Location: logout.php');exit();

                  }
               return(NULL);

              }
           else
              {$error="information entrer incorrecte";}
          }
       else {
         $error="email not found";
       }
      return($error);

      }


?>
