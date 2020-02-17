<?php
function createproject($bd,$nom,$datedebut,$datefin,$budget)
         {$reponse=$bd->prepare('SELECT * FROM Projet WHERE nom_projet=?');
          $reponse->execute(array($nom));
          $donnee=$reponse->fetch();
          if(empty($donnee))
            {$datedebutarray=explode("-",$datedebut);
             $datefinarray=explode("-",$datefin);
             if(((int)$datefinarray[0]>=(int)$datedebutarray[0]) )
                {$reponse=$bd->prepare('INSERT INTO Projet(nom_projet,date_debutprojet,date_finprojet,budget) VALUES (?,?,?,?)');
                 $reponse->execute(array($nom,$datedebut,$datefin,(float)$budget));
                 $reponse->closeCursor();$_SESSION['addproject']="YES";return(NULL);

                }
              else {
                $error="error dans la date";
              }

            }
          else {
            $error="projet exist";

          }
         return($error);
       }
















?>
