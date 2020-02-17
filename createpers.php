<?php
function create1($bd,$nom,$email,$gender,$fonction,$file_tmp,$file_name,$projet)
        {$reponse=$bd->prepare('SELECT * FROM Chercheur WHERE email_chercheur=?');
         $reponse->execute(array($email));
         $donnee=$reponse->fetch();
         if(empty($donnee))
            {$reponse2=$bd->prepare('SELECT id_projet FROM Projet WHERE nom_projet=?');
             $reponse2->execute(array($projet));
             $donnee2=$reponse2->fetch();
             if(!empty($donnee2))
               {$reponse=$bd->prepare('INSERT INTO Chercheur(nom_chercheur,email_chercheur,profile_chercheur,gender_chercheur,fonction_chercheur,id_projetchercheur) values (?,?,?,?,?,?)');
                $reponse->execute(array($nom,$email,$file_name,$gender,$fonction,$donnee2["id_projet"]));
                move_uploaded_file($file_tmp,"img/".$file_name);
                $reponse->closeCursor();$_SESSION['addpers']="YES";return(NULL);
               }
             else
               {$error="projet not found";}
             }
         else
            {$error="email already exits";$_SESSION['addpers']="NO";}
         return($error);
        }
function create($bd,$nom,$email,$gender,$fonction,$projet)
        {$reponse=$bd->prepare('SELECT * FROM Chercheur WHERE email_chercheur=?');
         $reponse->execute(array($email));
         $donnee=$reponse->fetch();
         if(empty($donnee))
             {$reponse2=$bd->prepare('SELECT id_projet FROM Projet WHERE nom_projet=?');
              $reponse2->execute(array($projet));
              $donnee2=$reponse2->fetch();
              if(!empty($donnee2))
                {$reponse=$bd->prepare('INSERT INTO Chercheur(nom_chercheur,email_chercheur,profile_chercheur,gender_chercheur,fonction_chercheur,id_projetchercheur) values (?,?,?,?,?,?)');
                 if($gender=="Male"){$image="avatar_man.png";}
                 else{$image="avatar_woman.png";}
                 $reponse->execute(array($nom,$email,$image,$gender,$fonction,$donnee2["id_projet"]));
                 $reponse->closeCursor();$_SESSION['addpers']="YES";return(NULL);
                }
             else
                {$error="projet not found";}}
        else
             {$error="email already exits";$_SESSION['addpers']="NO";}
         return($error);
        }
?>
