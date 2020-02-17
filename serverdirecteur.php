<?php
$_SESSION['addpers']="NO";
$_SESSION['rmpers']="NO";
$_SESSION['addproject']="NO";
$_SESSION['rmproject']="NO";
$_SESSION['mdfproject']="NO";
$_SESSION['addbudgetproj']="NO";
$_SESSION['addbudgetfonct']="NO";
$_SESSION['addpe']="NO";
$_SESSION['addcredit']="NO";
$_SESSION['adddep']="NO";
$_SESSION['addteam']="NO";
if(isset($_POST["creatbtn"]))
 {include('createpers.php');
  if(!empty($_POST["InputEmail"]) && !empty($_POST["InputNom"]) && !empty($_POST["InputGender"]) && !empty($_POST["InputFunction"]) && !empty($_POST["InputProjet"]) && (!empty($_POST["InputLabo"]) || !empty($_POST["InputEquipe"])) )
    {include('connectbdd.php');
     if(!empty($_FILES["file"]["name"]))
        {$file_name=$_FILES["file"]["name"];
         $file_tmp=$_FILES["file"]["tmp_name"];
         $temp=explode('.',$_FILES['file']['name']);
         $file_ext=strtolower(end($temp));
         $ext_auth=array("jpeg","jpg","png");
         if(in_array($file_ext,$ext_auth))
           {$error=create1($bd,$_POST["InputNom"],$_POST["InputEmail"],$_POST["InputGender"],$_POST["InputFunction"],$file_tmp,$file_name,$_POST["InputProjet"]);
            }
         else
           {$error='extension not supported';$_SESSION['addpers']="NO";
            }
        }
      else
        {$error=create($bd,$_POST["InputNom"],$_POST["InputEmail"],$_POST["InputGender"],$_POST["InputFunction"],$_POST["InputProjet"]);
        }
    }
  else {
    $error="entrer vos information";$_SESSION['addpers']="NO";
  }

 }
elseif(isset($_POST["rmbtn"]))
  {include('removpers.php');
   if(!empty($_POST["InputEmail"]) && !empty($_POST["InputNom"]))
      {include('connectbdd.php');
       $error=remove($bd,$_POST["InputEmail"],$_POST["InputNom"]);
       }
   else {
     $error="entrer vos information";$_SESSION['rmpers']="NO";
   }
  }
elseif(isset($_POST["creatprojectbtn"]))
  {include('createproject.php');
   if(!empty($_POST["InputNomproject"]) && !empty($_POST["InputDatedebutproject"]) && !empty($_POST["InputDatefinproject"]) && !empty($_POST["InputBudgetproject"]))
      {include('connectbdd.php');
       $error=createproject($bd,$_POST["InputNomproject"],$_POST["InputDatedebutproject"],$_POST["InputDatefinproject"],$_POST["InputBudgetproject"]);
       }
   else {
     $error="entrer vos information";$_SESSION['addproject']="NO";
   }
  }
elseif(isset($_POST["rmprojectbtn"]))
  {include('removproj.php');
   if(!empty($_POST["InputNomprojet"]))
      {include('connectbdd.php');
       $error=removeproject($bd,$_POST["InputNomprojet"]);
       }
   else {
     $error="entrer vos information";$_SESSION['rmproject']="NO";
   }
  }
 elseif(isset($_POST["modifyprojectbtn"]))
  {if(empty($_POST["InputmdfNomproject"]) && empty($_POST["InputmdfDatedebutproject"]) && empty($_POST["InputmdfDatefinproject"]) && empty($_POST["InputmdfBudgetproject"]))
    {$error="Nothing to modify";}
   else
   {include('connectbdd.php');
    include('mdfproj.php');
    $error=modifyprojet($bd,$_POST["InputmdfNomproject"],$_POST["InputmdfDatedebutproject"],$_POST["InputmdfDatefinproject"],$_POST["InputmdfBudgetproject"]);
   }
 }
 elseif(isset($_POST["addbudgprojectbtn"]))
  {include("addbudprojet.php");
   if(!empty($_POST["Inputidbudgetproj"]) && !empty($_POST["InputDateaffbudget"]) && !empty($_POST["InputBudgetmontant"]) && !empty($_POST["Inputnomproj"]))
      {include('connectbdd.php');
       $error=addbudproj($bd,$_POST["Inputidbudgetproj"],$_POST["InputDateaffbudget"],$_POST["InputBudgetmontant"],$_POST["Inputnomproj"]);

      }
  else {
    $error="enter vos information";$_SESSION['addbudgetproj']="NO";
      }
  }
 elseif(isset($_POST["addbudgfonctbtn"]))
  {include("addbudfonct.php");
   if(!empty($_POST["Inputidbudgetfonct"]) && !empty($_POST["InputDateaffbudget"]) && !empty($_POST["InputDatelimdep"]) && !empty($_POST["InputBudgetmontant"]) && !empty($_POST["Inputprojname"]))
      {include('connectbdd.php');
      $error=addbudfonct($bd,$_POST["Inputidbudgetfonct"],$_POST["InputDateaffbudget"],$_POST["InputDatelimdep"],$_POST["InputBudgetmontant"],$_POST["Inputprojname"]);
      }
  else {
      $error="enter vos information";$_SESSION['addbudgetfonct']="NO";
      }
  }
 elseif(isset($_POST["addpebtn"]))
  {include("addprogemp.php");
   if(!empty($_POST["InputNpe"]) && !empty($_POST["InputDateaffpe"]) && !empty($_POST["InputBudgpe"]) && !empty($_POST["InputIdbudgetproj"]))
      {include('connectbdd.php');
      $error=addpe($bd,$_POST["InputNpe"],$_POST["InputDateaffpe"],$_POST["InputBudgpe"],$_POST["InputIdbudgetproj"],$_POST["InputIdbudgetfonct"]);
      }
  else {
      $error="enter vos information";$_SESSION['addpe']="NO";
      }
  }
  elseif(isset($_POST["addcreditbtn"]))
   {include("addcredit.php");
    include('connectbdd.php');
    $reponse=$bd->query('SELECT * FROM Rubrique');
    while(!empty($donnee=$reponse->fetch()))
           {$error=addcredit($bd,$_SESSION['npe'],$donnee['code'],$_POST[$donnee['code']]);

           }
    $_SESSION['addcredit']="YES";
    unset($_SESSION['npe']);
  }
elseif(isset($_POST["adddepbtn"]))
 {include("adddepence.php");
  if(!empty($_POST["InputNpe"]) && !empty($_POST["InputCoderub"]) && !empty($_POST["InputNdepence"]) && !empty($_POST["InputDesc"]) && !empty($_POST["InputMontant"]))
     {include('connectbdd.php');
     $error=adddepence($bd,$_POST["InputNpe"],$_POST["InputCoderub"],$_POST["InputNdepence"],$_POST["InputDesc"],$_POST["InputMontant"]);
     }
 else {
     $error="enter vos information";$_SESSION['adddep']="NO";
     }
 }
elseif(isset($_POST["addteambtn"]))
  {include("addteams.php");
   if(!empty($_POST["InputNom"]) && !empty($_POST["Inputresp"]) &&  !empty($_POST["Inputdate"]) && !empty($_POST["InputDes"]))
      {include('connectbdd.php');
      $error=addteam($bd,$_POST["InputNom"],$_POST["Inputresp"],$_POST["Inputdate"],$_POST["InputDes"],$_POST["InputLabo"]);
      }
  else {
      $error="enter vos information";$_SESSION['adddep']="NO";
      }
  }
?>
