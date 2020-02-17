<?php
function addbudfonct($bd,$id,$dateaff,$datelim,$montant,$projet)
  {$reponse=$bd->prepare('SELECT * FROM Budget_Fonctionnelle WHERE id_budgetfonct=?');
   $reponse->execute(array($id));
   $donnee=$reponse->fetch();
   if(empty($donnee))
      {$reponse3=$bd->prepare('SELECT * FROM Projet WHERE nom_projet=?');
       $reponse3->execute(array($projet));
       $donnee3=$reponse3->fetch();
       if(!empty($donnee3))
        {$datedebutarray=explode("-",$dateaff);
         $datefinarray=explode("-",$datelim);
         if(((int)$datefinarray[0]>=(int)$datedebutarray[0]) && ((int)$datefinarray[1]>=(int)$datedebutarray[1]) && ((int)$datefinarray[2]>=(int)$datedebutarray[2]))
          {$reponse2=$bd->prepare('INSERT INTO Budget_Fonctionnelle VALUES (?,?,?,?,?)');
           $reponse2->execute(array($id,$dateaff,$montant,$datelim,$donnee3["id_projet"]));$_SESSION['addbudgetfonct']="YES";return(NULL);}
         else {
           $error="error in date";}
       }
       else {
         $error="project not found"; }
       }
   else {
     $error="budget already exist";}
    return($error);
  }










?>
