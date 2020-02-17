<?php
function adddepence($bd,$Npe,$coderub,$depence,$desc,$montant)
        {$reponse=$bd->prepare('SELECT * FROM Programme_emploi WHERE N_pe=?');
         $reponse->execute(array($Npe));
         $donnee=$reponse->fetch();
         $reponse2=$bd->prepare('SELECT * FROM Rubrique WHERE code=?');
         $reponse2->execute(array($coderub));
         $donnee2=$reponse2->fetch();
         if(!empty($donnee2) && !empty($donnee))
                {$reponse3=$bd->prepare('SELECT * FROM Depence WHERE N_depense=?');
                 $reponse3->execute(array($depence));
                 $donnee3=$reponse3->fetch();
                 if(empty($donnee3))
                    {$reponse4=$bd->prepare('SELECT credit_disponible FROM Credit WHERE N_pe=? and code_rubrique=? ');
                     $reponse4->execute(array($Npe,$coderub));
                     $donnee4=$reponse4->fetch();
                     if((float)$montant<=(float)$donnee4["credit_disponible"])
                        {$reponse=$bd->prepare('INSERT INTO Depence values (?,?,?)');
                         $reponse->execute(array($depence,$desc,$montant));
                         $reponse->closeCursor();
                         $reponse=$bd->prepare('INSERT INTO Depencer values (?,?,?)');
                         $reponse->execute(array($Npe,$coderub,$depence));
                         $reponse->closeCursor();
                         $reponse=$bd->prepare('UPDATE Credit SET credit_disponible=credit_disponible-? where N_pe=? and code_rubrique=?');
                         $reponse->execute(array($montant,$Npe,$coderub));
                         $reponse->closeCursor();
                         $_SESSION['adddep']="YES";return(NULL);}
                     else {
                         $error="montant insuffisant";}
                    }
                  else {
                    $error="depence already exist";}
                }
       else {
                $error="N_Programme emploi or Code Rubrique not found";
              }
      return($error);
            }










?>
