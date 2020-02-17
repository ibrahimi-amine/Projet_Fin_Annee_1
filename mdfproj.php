<?php
function modifyprojet($bd,$nom,$datedebut,$datefin,$budget)
        {if(empty($nom)){$nom=$_SESSION["donneproj"]["nom_projet"];}
         elseif(empty($datedebut)){$datedebut=$_SESSION["donneproj"]["date_debutprojet"];}
         elseif(empty($datefin)){$datefin=$_SESSION["donneproj"]["date_finprojet"];}
         elseif(empty($budget)){$budget=$_SESSION["donneproj"]["budget"];}
         $reponse=$bd->prepare('UPDATE Projet SET nom_projet=?,date_debutprojet=?,date_finprojet=?,budget=? where nom_projet=?');
         $reponse->execute(array($nom,$datedebut,$datefin,(float)$budget,$_SESSION["donneproj"]["nom_projet"]));
         $reponse->closeCursor();$_SESSION['mdfproject']="YES";return(NULL);




        }




?>
