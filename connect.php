<?php
function connect($bd,$email,$password)
        {$reponse=$bd->prepare('SELECT * FROM Chercheur WHERE email_chercheur=?');
         $reponse->execute(array($email));
         $donnee=$reponse->fetch();
         if(empty($donnee))
              {$error="email not valid";}
         else
            {$reponse2=$bd->prepare('SELECT * FROM Admin,Chercheur WHERE Admin.id_admin=Chercheur.id_chercheur  and Admin.id_admin=?');
             $reponse2->execute(array($donnee["id_chercheur"]));
             $donnee2=$reponse2->fetch();
             if($donnee2['password']!=$password)
                {$error="password incorrect";}
            else
              {$_SESSION['Nom']=$donnee2['nom_chercheur'];
               $_SESSION['email']=$donnee2['email_chercheur'];
               $_SESSION['fonction']=$donnee2['fonction_chercheur'];
               $_SESSION['image']=$donnee2['profile_chercheur'];
               $_SESSION['etat']="connected";
               $reponse3=$bd->prepare('SELECT * FROM Projet WHERE id_projet=?');
               $reponse3->execute(array($donnee["id_projetchercheur"]));
               $donnee3=$reponse3->fetch();
               $_SESSION['idprojet']=$donnee["id_projetchercheur"];
               $_SESSION['projet']=$donnee3['nom_projet'];
               $reponse->closeCursor();
              header('Location: dashboard.php');exit();}
            }
        $reponse->closeCursor();
        return($error);

      }
?>
