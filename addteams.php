<?php
function addteam($bd,$Nom,$resp,$date,$Des,$labo)
          {$reponse=$bd->prepare('SELECT * FROM Equipe WHERE nom_equipe=?');
           $reponse->execute(array($Nom));
           $donnee=$reponse->fetch();
           if(empty($donnee))
              {$reponse=$bd->prepare('SELECT * FROM Chercheur WHERE nom_chercheur like ?');
               $reponse->execute(array($resp));
               $donnee=$reponse->fetch();
               if(!empty($donnee))
                {$reponse2=$bd->prepare('INSERT INTO Equipe(nom_equipe,id_responsableequipe,date_creationequipe,description_equipe,id_labocomp) VALUES (?,?,?,?,?)');
                 $reponse2->execute(array($Nom,$donnee["id_chercheur"],$date,$Des,$labo));
                 $reponse3=$bd->prepare('UPDATE Chercheur Set fonction_chercheur=? WHERE nom_chercheur=?');
                 $reponse3->execute(array('responsable',$resp));
                 $_SESSION['addteam']="YES";return(NULL);

                }
               else {
                 $error="Personne not found";
               }}

           else {
             $error="team already exist";}
            return($error);



          }






?>
