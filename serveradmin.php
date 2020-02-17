<?php
$_SESSION['addrub']="NO";
if(isset($_POST["creatbtn"]))
 {include('createadmin.php');
  if(!empty($_POST["InputEmail"]) && !empty($_POST["InputPassword"]))
    {include('connectbdd.php');
     $error=createadmin($bd,$_POST["InputEmail"],$_POST["InputPassword"],$_POST["InputPassword2"]);
    }
  else
    {$error="entrer vos information";
     }
  }
elseif(isset($_POST["addrubbtn"]))
  {include('creatrub.php');
   if(!empty($_POST["InputRubrique"]) && !empty($_POST["InputDes"]))
      {include('connectbdd.php');
       $error=createrubrique($bd,$_POST["InputRubrique"],$_POST["InputDes"]);
       }
   else {
     $error="entrer vos information";
   }




  }
?>
