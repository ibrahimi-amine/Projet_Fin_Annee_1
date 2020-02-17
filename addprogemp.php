<?php
function addpe($bd,$Npe,$Dateaff,$Budgpe,$Idbudgetproj,$Idbudgetfonct)
          {$reponse=$bd->prepare('SELECT * FROM Programme_emploi WHERE N_pe=?');
           $reponse->execute(array($Npe));
           $donnee=$reponse->fetch();
           if(empty($donnee))
              {$reponse2=$bd->prepare('INSERT INTO Programme_emploi VALUES (?,?,?,?,?)');
               $reponse2->execute(array($Npe,$Dateaff,$Budgpe,$Idbudgetproj,$Idbudgetfonct));$_SESSION['addpe']="YES";$_SESSION['npe']=$Npe;return(NULL);}

           else {
             $error="Programme already exist";}
            return($error);









          }















?>
