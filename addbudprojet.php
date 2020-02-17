<?php
function addbudproj($bd,$id,$date,$montant,$projet)
  {$reponse=$bd->prepare('SELECT * FROM Budget_Trancheprojet WHERE id_budgetprojet=?');
   $reponse->execute(array($id));
   $donnee=$reponse->fetch();
   if(empty($donnee))
      {$reponse3=$bd->prepare('SELECT * FROM Projet WHERE nom_projet=?');
       $reponse3->execute(array($projet));
       $donnee3=$reponse3->fetch();
       if(!empty($donnee3))
        {$reponse2=$bd->prepare('INSERT INTO Budget_Trancheprojet VALUES (?,?,?,?)');
         $reponse2->execute(array($id,$date,$montant,$donnee3["id_projet"]));$_SESSION['addbudgetproj']="YES";return(NULL);}
       else {
         $error="project not found"; }
       }
   else {
     $error="budget already exist";}
    return($error);
  }










?>
